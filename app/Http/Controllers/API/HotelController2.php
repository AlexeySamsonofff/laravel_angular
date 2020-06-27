<?php

// namespace App\Http\Controllers\API;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\AWS\Credentials;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;

use App\Models\HotelSearchResult;
use App\Models\GlbHotelFacilitiesType;
use App\Models\SupplierHotelList;
use App\Models\HotelSearchDatum;
use App\Models\SupplierRoomList;
use App\Models\SupplierRoomGalleryImage;
class HotelController extends Controller
{
    //
    public function index(Request $request)
    {
        $hotelcode='0000100058' ;
        $uniqueRefNo='';
        $search=json_decode($_COOKIE["srchval"]);
        $cityName = $search->cityName;
        $checkIn = $search->checkIn;
        $checkOut = $search->checkOut;
        if($cityName=="Montego Bay")
        {
            $uniqueRefNo='VMN54GD1EM7H7';
        }
        if($cityName=="Negril")
        {
            $uniqueRefNo='VMN15J9GC3VSP';
        }
        if($cityName=="Ocho Rios")
        {
            $uniqueRefNo='VMN3WURZFX7';
        }


        // $hotels=HotelSearchResult::where('uniqueRefNo',$uniqueRefNo)->selectRaw('image,star,hotel_name,description,hotel_address,xml_currency, min(org_amt) as orgamt,hotel_code,amenities')->groupBy('image','star','hotel_name','description','hotel_address','xml_currency','hotel_code','amenities')->get();
        $hotels=SupplierHotelList::where('hotel_city',$cityName)->selectRaw('supplier_hotel_list_id as hotel_id,thumb_img as image,hotel_star_rating as star,latitude, longitude, hotel_search_result.hotel_name,hotel_desc as description,address as hotel_address,currency_type as xml_currency, min(hotel_search_result.org_amt) as orgamt,supplier_hotel_list.hotel_code,hotel_facilities as amenities')->join('hotel_search_result','hotel_search_result.hotel_code','=','supplier_hotel_list.hotel_code')->groupBy('supplier_hotel_list_id','thumb_img','hotel_star_rating','latitude', 'longitude','hotel_search_result.hotel_name','supplier_hotel_list.hotel_desc','supplier_hotel_list.address','supplier_hotel_list.currency_type','supplier_hotel_list.hotel_facilities','supplier_hotel_list.hotel_code')->get();
        //$hotels=$hotel->all()->take(10);
        //$hotels=SupplierHotelList::where('hotel_city',$cityName)->get();
        return response()->json([
            'error' => false,
            'hotels'  => $hotels,
            'cityName' => $cityName,
            'checkIn' => $checkIn,
            'checkOut' => $checkOut,
            'adult' => $search->adult,
            'child' => $search->child,
            'room' => $search->room
        ], 200);
    }

    public function getResultsThumbnail() {

        $filename="supplier/uploads/28/hotel/25/supplier_hotel_list/thumbnail/Jamaica-inn-beach.jpg/";
        //return getCloudfrontImage($filename, ["width" => 257, "height" => 257, "fit" => "cover"]);
        $resize =["width" => 257, "height" => 257, "fit" => "cover"];
        $resizeDefaults = [
            "width" => 200,
            "fit" => "inside"
        ];
        $options = [
            "resize" => array_merge($resizeDefaults, $resize),
            "normalise" => true,
        ];
        $config = [
            "bucket" => "vacaymenow.com",
            "key" => $filename,x
        ];
        $imgUrl= sprintf('https://d1b2szyitz6nlt.cloudfront.net/%s', base64_encode(json_encode($config, JSON_UNESCAPED_SLASHES)));
        return response()->json([
            'error' => false,
            'imgUrl'  => $imgUrl
        ], 200);
    }
    public function getAmenities(){
        $amenities=GlbHotelFacilitiesType::where('facility_type','hotel')->where('status',1)->get();
        return response()->json([
            'error' => false,
            'amenities'  => $amenities
        ], 200);
    }
    public function getHotelAmenities($id){
        // $myString = '1,2,3';
         $ids = explode(',', $id);
        //print_r($id);die;
        $hotelamenities=GlbHotelFacilitiesType::whereIn('id',$ids)->get();
        return response()->json([
            'error' => false,
            'hotelamenities'  => $hotelamenities
        ], 200);
    }
    public function hotelDetail()
    {
        //setcookie("hotelid", $id);
        // return view('hotels.hotel_details')->with(compact('hotelid'));
        return view('hotels.hotel_details');
    }
    public function gethotelDetail()
    {
        $hotelid=$_COOKIE['hotelid'];
        $hoteldetails=SupplierHotelList::where('supplier_hotel_list_id',$hotelid)->get();
        $search=json_decode($_COOKIE["srchval"]);
        $cityName = $search->cityName;
        $checkIn = $search->checkIn;
        $checkOut = $search->checkOut;
        return response()->json([
            'error' => false,
            'hoteldetails'  => $hoteldetails,
            'cityName' => $cityName,
            'checkIn' => $checkIn,
            'checkOut' => $checkOut,
            'adult' => $search->adult,
            'child' => $search->child,
            'room' => $search->room
        ], 200);
    }

    public function getroomDetails()
    {

        $rooms=HotelSearchResult::where('hotel_supplier_id',41)->take(3)->get();

        //$roomimages=SupplierRoomGalleryImage::where('supplier_room_list_id',34)->first();
        return response()->json([
            'error' => false,
            'roomdetails'  => $rooms
        ], 200);
    }
    public function getRoomAmenities($id){
        // $myString = '1,2,3';
         $ids = explode(',', $id);
        //print_r($id);die;
        $roomamenities=GlbHotelFacilitiesType::whereIn('id',$ids)->get();
        return response()->json([
            'error' => false,
            'roomamenities'  => $roomamenities
        ], 200);
    }
    public function get_hotel_room_image_by_code($roomcode) {

        $roomimage=SupplierRoomGalleryImage::where('room_code',$roomcode)->first();
        return response()->json([
            'error' => false,
            'roomimage'  => $roomimage
        ], 200);
    }






    ///For Reference
    public function hotelsearchresult(Request $request)
    {
        $search=json_decode($_COOKIE["srchval"]);
        $cityName = $search->cityName;
        $cityCode = "";
        $checkIn = $search->checkIn;
        $checkOut = $search->checkOut;
        $search_data='';
        $hotel_search_data=$this->Hotels_Model->check_hotel_search_data($ses_id,$refNo);
        $search_data=json_decode($hotel_search_data->search_data,true);


        $sess_array = array(
            'cityName' => $search->cityName,
            'checkIn' => $search->checkIn,
            'checkOut' => $search->checkOut,
          );
          $this->db->select('*');
          $this->db->from('hotel_search_data');
          $this->db->where('session_id',$sess_id);
          $this->db->where('uniqueRefNo',$uniqueRefNo);
          $query=$this->db->get();



        print_r($search->cityName.'--'.$search->checkIn.'--'.$search->checkOut);die;
        $result=HotelSearchResult::where('uniqueRefNo','VMN595ATF585W')->get();
        print_r($result);die;
        return response()->json($result);
    }
    public function check_hotel_search_data($sess_id,$uniqueRefNo)
    {
         $this->db->select('*');
         $this->db->from('hotel_search_data');
         $this->db->where('session_id',$sess_id);
         $this->db->where('uniqueRefNo',$uniqueRefNo);
         $query=$this->db->get();
           // echo $this->db->last_query();exit;

         if($query->num_rows() > 0)
         {
           return $query->row();
         }
         else
         {
           return '';
         }
    }

    function generateRandomString($length = 10) {
        $time = Date('i');
        // echo Date('ydHi');exit;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ9876543210ZYXWVUTSRQPONMLKJIHGFEDCBA';
          $randomString = '';
          for ($i = 0; $i < $length; $i++) {
              $randomString .= $characters[rand(0, strlen($characters) - 1)];
          }
          return 'VMN'.$time.$randomString;
      }
    public function get_image_aws($file_name,$s3_name='vacaymenow.com') {
        if($file_name!=''){
    	    try {
    	        $credentials = $this->getAwsCred();
    	        $s3Client = new Aws\S3\S3Client($credentials);
    	        // Get the object.
    	        $cmd = $s3Client->getCommand('GetObject', [
    	            'Bucket' => $s3_name,
    	            'Key'    => $file_name
    	        ]);

    	        $request = $s3Client->createPresignedRequest($cmd, '+5   minutes');
    	        $presignedUrl = (string) $request->getUri();
    	        return $presignedUrl;
    	    } catch (S3Exception $e) {
    	        echo $e->getMessage() . PHP_EOL;
    	    }
        } else {
            return '';
        }
    }
    public function getAwsCred(){
    	$cred = new Aws\Credentials\Credentials(env('OBJECT_STORAGE_KEY', 'AKIA3NGXKBBPWLE7CMGP'), env('OBJECT_STORAGE_SECRET', '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'));
        $credentials = [
			'version'     => 'latest',
			'region'      => env('OBJECT_STORAGE_REGION', 'us-east-2'),
			'credentials' => $cred
    	];
        return $credentials;
    }






}
