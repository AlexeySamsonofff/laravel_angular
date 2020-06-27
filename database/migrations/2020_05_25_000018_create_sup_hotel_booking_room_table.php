<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupHotelBookingRoomTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'sup_hotel_booking_room';

    /**
     * Run the migrations.
     * @table sup_hotel_booking_room
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('hotel_room_booking_id');
            $table->integer('booking_id');
            $table->string('hotel_code', 50);
            $table->string('room_code', 20)->nullable()->default(null);
            $table->date('check_in');
            $table->date('check_out');
            $table->text('room_type')->nullable()->default(null);
            $table->string('adult', 12);
            $table->string('child', 12);
            $table->double('room_price');
            $table->text('hotel_crs_booking_code')->nullable()->default(null);
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
