<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlbHotelRoomTypeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'glb_hotel_room_type';

    /**
     * Run the migrations.
     * @table glb_hotel_room_type
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id')->default('0');
            $table->string('room_type');
            $table->timestamp('date_time')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date('created_date');
            $table->string('status', 11)->nullable()->default(null)->comment('\'\'=Pending, 0=Inactive, 1=Active, 2=Blocked');
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
