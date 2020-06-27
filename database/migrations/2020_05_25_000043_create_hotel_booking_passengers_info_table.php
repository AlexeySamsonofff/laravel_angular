<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelBookingPassengersInfoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'hotel_booking_passengers_info';

    /**
     * Run the migrations.
     * @table hotel_booking_passengers_info
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('pass_id');
            $table->string('uniqueRefNo', 50);
            $table->string('passenger_type', 50)->nullable()->default(null);
            $table->string('title', 32)->nullable()->default(null);
            $table->string('first_name', 32);
            $table->string('middle_name', 32)->nullable()->default(null);
            $table->string('last_name', 32);
            $table->string('gender', 10)->nullable()->default(null);
            $table->string('child_age', 12)->nullable()->default(null);
            $table->string('room_no', 12)->nullable()->default(null);
            $table->string('zip_code', 20)->nullable()->default(null);
            $table->string('city', 32)->nullable()->default(null);
            $table->string('state', 150)->nullable()->default(null);
            $table->string('mobile', 16);
            $table->string('email', 128);
            $table->text('address')->nullable()->default(null);
            $table->string('country', 200)->nullable()->default(null);
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
