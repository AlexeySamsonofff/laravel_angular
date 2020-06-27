<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierRoomListTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'supplier_room_list';

    /**
     * Run the migrations.
     * @table supplier_room_list
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('supplier_room_list_id');
            $table->integer('supplier_id');
            $table->bigInteger('supplier_hotel_list_id');
            $table->string('hotel_code', 200);
            $table->text('amadeus_room_code')->nullable()->default(null);
            $table->string('room_name');
            $table->string('room_code', 200);
            $table->string('hotel_room_type', 250)->nullable()->default(null);
            $table->text('mealplan')->nullable()->default(null);
            $table->text('room_desc')->nullable()->default(null);
            $table->text('inclusions')->nullable()->default(null);
            $table->text('exclusions')->nullable()->default(null);
            $table->text('room_facilities')->nullable()->default(null);
            $table->string('childageminlimit', 200)->nullable()->default(null);
            $table->string('childagemaxlimit', 200)->nullable()->default(null);
            $table->integer('minadult')->default('1');
            $table->integer('maxadult')->default('1');
            $table->integer('minchild');
            $table->integer('maxchild');
            $table->integer('maxperson')->nullable()->default('1');
            $table->integer('minperson')->nullable()->default('1');
            $table->text('room_policies')->nullable()->default(null);
            $table->text('room_cancel_policies')->nullable()->default(null);
            $table->date('created_date');
            $table->timestamp('last_updated')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->tinyInteger('status')->default('0');
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
