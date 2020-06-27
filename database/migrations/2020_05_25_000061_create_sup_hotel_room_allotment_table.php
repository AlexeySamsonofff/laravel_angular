<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupHotelRoomAllotmentTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'sup_hotel_room_allotment';

    /**
     * Run the migrations.
     * @table sup_hotel_room_allotment
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('sup_hotel_room_allotment_id');
            $table->integer('sup_hotel_room_allotment_list_id')->nullable()->default(null);
            $table->integer('supplier_id');
            $table->integer('sup_hotel_id');
            $table->string('hotel_code', 250);
            $table->string('room_code', 20);
            $table->integer('sup_room_details_id');
            $table->integer('rooms_available')->nullable()->default('0');
            $table->integer('total_booking')->nullable()->default('0');
            $table->date('room_avail_date')->nullable()->default(null);
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
