<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierHotelListOldTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'supplier_hotel_list_old';

    /**
     * Run the migrations.
     * @table supplier_hotel_list_old
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('supplier_hotel_list_id');
            $table->integer('supplier_id')->nullable()->default(null);
            $table->string('hotel_code', 200)->nullable()->default(null);
            $table->string('hotel_name')->nullable()->default(null);
            $table->string('hotel_star_rating', 50)->nullable()->default(null);
            $table->text('hotel_property_type')->nullable()->default(null);
            $table->string('hotel_group', 10);
            $table->string('property_code', 200);
            $table->text('property_address');
            $table->text('hotel_address');
            $table->text('hotel_address2');
            $table->text('hotel_neighbourhood');
            $table->string('hotel_gps', 200);
            $table->integer('totalnoofbookings')->nullable()->default(null);
            $table->string('release_date', 50)->nullable()->default(null);
            $table->string('year_built', 50)->nullable()->default(null);
            $table->string('account_no', 200)->nullable()->default(null);
            $table->string('weekend_day', 200)->nullable()->default(null);
            $table->string('latitude', 200)->nullable()->default(null);
            $table->string('longitude', 200)->nullable()->default(null);
            $table->text('hotel_desc')->nullable()->default(null);
            $table->string('cityid', 50)->nullable()->default(null);
            $table->text('cityName');
            $table->string('hotel_city')->nullable()->default(null);
            $table->string('hotel_state', 200);
            $table->string('hotel_country', 200)->nullable()->default(null);
            $table->string('hotel_pin', 200);
            $table->string('email', 100)->nullable()->default(null);
            $table->text('address')->nullable()->default(null);
            $table->text('location')->nullable()->default(null);
            $table->string('price_type', 100)->nullable()->default(null);
            $table->string('currency_type', 100)->nullable()->default(null);
            $table->string('module_permission', 50)->nullable()->default(null);
            $table->text('places_near_by')->nullable()->default(null);
            $table->text('hotel_email')->nullable()->default(null);
            $table->text('reservation_email')->nullable()->default(null);
            $table->text('sales_email')->nullable()->default(null);
            $table->string('hotel_extension', 50);
            $table->text('hotel_telephone')->nullable()->default(null);
            $table->string('hotel_fax', 50)->nullable()->default(null);
            $table->string('hotel_mobile', 50)->nullable()->default(null);
            $table->string('booking_phone', 50)->nullable()->default(null);
            $table->string('management_phone', 50)->nullable()->default(null);
            $table->string('emergency_no', 50)->nullable()->default(null);
            $table->string('hotel_website', 200)->nullable()->default(null);
            $table->text('hotel_facilities')->nullable()->default(null);
            $table->string('check_in', 30)->nullable()->default(null);
            $table->string('check_out', 30)->nullable()->default(null);
            $table->text('general_notes')->nullable()->default(null);
            $table->text('children_policy')->nullable()->default(null);
            $table->text('check_in_policy')->nullable()->default(null);
            $table->text('check_out_policy')->nullable()->default(null);
            $table->text('policy')->nullable()->default(null);
            $table->text('cancellation_policy')->nullable()->default(null);
            $table->text('pet_policy')->nullable()->default(null);
            $table->date('created_date')->nullable()->default(null);
            $table->timestamp('last_updated')->nullable()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->tinyInteger('status')->nullable()->default('0');
            $table->tinyInteger('admin_status')->default('0');
            $table->text('thumb_img')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
