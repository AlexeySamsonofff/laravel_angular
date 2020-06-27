<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierHotelListTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'supplier_hotel_list';

    /**
     * Run the migrations.
     * @table supplier_hotel_list
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('supplier_hotel_list_id');
            $table->integer('supplier_id')->nullable()->default(null);
            $table->string('hotel_code', 200)->nullable()->default(null);
            $table->string('amadeus_code', 25)->nullable()->default(null);
            $table->string('hotel_name')->nullable()->default(null);
            $table->string('hotel_star_rating', 50)->nullable()->default(null);
            $table->text('hotel_property_type')->nullable()->default(null);
            $table->integer('totalnoofbookings')->nullable()->default(null);
            $table->string('release_day', 50)->nullable()->default(null);
            $table->string('year_built', 50)->nullable()->default(null);
            $table->string('account_no', 200)->nullable()->default(null);
            $table->string('weekend_day', 200)->nullable()->default(null);
            $table->string('latitude', 200)->nullable()->default(null);
            $table->string('longitude', 200)->nullable()->default(null);
            $table->text('hotel_desc')->nullable()->default(null);
            $table->string('cityid', 50)->nullable()->default(null);
            $table->string('hotel_city')->nullable()->default(null);
            $table->string('hotel_country', 200)->nullable()->default(null);
            $table->string('email', 100)->nullable()->default(null);
            $table->enum('call_a_reserve', ['0', '1'])->nullable()->default('0');
            $table->text('address')->nullable()->default(null);
            $table->text('location')->nullable()->default(null);
            $table->integer('ta_location_id')->nullable()->default(null);
            $table->string('price_type', 100)->nullable()->default(null);
            $table->string('currency_type', 100)->nullable()->default(null);
            $table->string('module_permission', 50)->nullable()->default(null);
            $table->text('places_near_by')->nullable()->default(null);
            $table->text('hotel_email')->nullable()->default(null);
            $table->text('reservation_email')->nullable()->default(null);
            $table->text('sales_email')->nullable()->default(null);
            $table->string('hotel_phone', 50)->nullable()->default(null);
            $table->string('hotel_fax', 50)->nullable()->default(null);
            $table->string('hotel_mobile', 50)->nullable()->default(null);
            $table->string('booking_phone', 50)->nullable()->default(null);
            $table->string('management_phone', 50)->nullable()->default(null);
            $table->string('emergency_no', 50)->nullable()->default(null);
            $table->string('hotel_website', 200)->nullable()->default(null);
            $table->text('hotel_facilities')->nullable()->default(null);
            $table->string('check_in', 30)->nullable()->default(null);
            $table->string('check_out', 30)->nullable()->default(null);
            $table->text('thumb_img')->nullable()->default(null);
            $table->text('meta_title')->nullable()->default(null);
            $table->text('meta_keywords')->nullable()->default(null);
            $table->text('meta_description')->nullable()->default(null);
            $table->text('policy')->nullable()->default(null);
            $table->text('child_policy')->nullable()->default(null);
            $table->text('cancellation_policy')->nullable()->default(null);
            $table->text('terms_and_condition')->nullable()->default(null);
            $table->date('created_date')->nullable()->default(null);
            $table->timestamp('last_updated')->nullable()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->tinyInteger('status')->nullable()->default('0');
            $table->tinyInteger('admin_status')->comment('0=Inactive,1=Active,2=Blocked');
            $table->double('supplier_tax_percent')->nullable()->default('0');
            $table->float('government_tax')->nullable()->default(null);
            $table->float('resort_fee')->nullable()->default(null);
            $table->float('service_tax')->nullable()->default(null);
            $table->text('photo_policy')->nullable()->default(null);
            $table->text('rate_desc')->nullable()->default(null);
            $table->text('room_charge_disclosure')->nullable()->default(null);
            $table->tinyInteger('discount_type')->nullable()->default(null);
            $table->integer('discount_value')->default('0');
            $table->string('minimum_check_in')->nullable()->default(null);
            $table->text('Check_in_instructions')->nullable()->default(null);
            $table->text('mealplan')->nullable()->default(null);
            $table->text('meal_plan_desc')->nullable()->default(null);
            $table->text('internet')->nullable()->default(null);
            $table->text('language')->nullable()->default(null);
            $table->text('close_by')->nullable()->default(null);
            $table->text('hotel_parking_type')->nullable()->default(null);
            $table->text('pets_allow')->nullable()->default(null);
            $table->text('nearby')->nullable()->default(null);
            $table->text('entertainment')->nullable()->default(null);
            $table->text('pool')->nullable()->default(null);
            $table->text('imp_information')->nullable()->default(null);
            $table->text('exclusions')->nullable()->default(null);
            $table->text('transfers')->nullable()->default(null);
            $table->text('fees')->nullable()->default(null);
            $table->enum('tax_included', ['yes', 'no'])->nullable()->default('no');
            $table->enum('last_minute_booking', ['0', '1'])->nullable()->default('0')->comment('0=disable ,1=ebable');
            $table->integer('minstay')->nullable()->default('1');
            $table->tinyInteger('notification_flag')->default('0');
            $table->dateTime('notification_time')->nullable()->default(null);
            $table->text('notification_msg')->nullable()->default(null);
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
