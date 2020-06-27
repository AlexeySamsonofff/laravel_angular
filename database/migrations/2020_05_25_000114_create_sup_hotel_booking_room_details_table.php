<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupHotelBookingRoomDetailsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'sup_hotel_booking_room_details';

    /**
     * Run the migrations.
     * @table sup_hotel_booking_room_details
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('hotel_room_booking_id');
            $table->integer('booking_id');
            $table->string('uniqueRefNo', 200);
            $table->string('mobile', 50);
            $table->string('email', 200);
            $table->integer('supplier_id');
            $table->string('hotel_code', 50);
            $table->string('room_code', 20)->nullable()->default(null);
            $table->integer('contract_id');
            $table->string('market', 200)->nullable()->default(null);
            $table->text('meal_plan');
            $table->string('rate_plan_code', 200);
            $table->string('rate_type', 200);
            $table->date('check_in');
            $table->date('check_out');
            $table->text('room_type')->nullable()->default(null);
            $table->integer('room_no');
            $table->integer('nights');
            $table->string('adult', 12);
            $table->string('child', 12);
            $table->string('childs_ages', 200)->nullable()->default(null);
            $table->double('room_price');
            $table->double('net_fare')->nullable()->default(null);
            $table->double('discount')->nullable()->default(null);
            $table->text('hotel_crs_booking_code')->nullable()->default(null);
            $table->text('hotel_crs_cancellation_json')->nullable()->default(null);
            $table->timestamp('date_time')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
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
