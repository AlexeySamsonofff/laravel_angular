<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupHotelRoomDetailsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'sup_hotel_room_details';

    /**
     * Run the migrations.
     * @table sup_hotel_room_details
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('sup_room_details_id');
            $table->integer('supplier_id');
            $table->integer('sup_hotel_id');
            $table->string('hotel_code', 250);
            $table->integer('room_type_id');
            $table->string('room_code', 20);
            $table->string('room_name', 250);
            $table->text('room_desc')->nullable()->default(null);
            $table->integer('occupancy')->nullable()->default(null);
            $table->integer('no_of_adults')->nullable()->default(null);
            $table->integer('no_of_childs')->nullable()->default(null);
            $table->integer('total_no_of_rooms')->nullable()->default(null);
            $table->string('room_critical_level', 50)->nullable()->default(null)->comment('0=percentage,1=numerical');
            $table->integer('no_of_rooms_left')->nullable()->default(null);
            $table->text('room_policies')->nullable()->default(null);
            $table->string('room_image');
            $table->string('room_facilities');
            $table->tinyInteger('status')->nullable()->default(null)->comment('0=Inactive,1=Active,2=Blocked');
            $table->timestamp('created_date')->nullable()->default(null);
            $table->timestamp('update_date_time')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->index(["hotel_code"], 'hotel_code');

            $table->index(["sup_hotel_id"], 'sup_hotel_id');

            $table->index(["room_code"], 'room_code');
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
