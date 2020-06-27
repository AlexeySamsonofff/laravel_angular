<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiPermanentHotelsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'api_permanent_hotels';

    /**
     * Run the migrations.
     * @table api_permanent_hotels
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('api_hotel_id');
            $table->string('api', 32);
            $table->string('city_code', 10);
            $table->string('city_name', 64)->nullable()->default(null);
            $table->string('country_name', 200)->nullable()->default(null);
            $table->string('hotel_code', 32);
            $table->string('hotel_name')->nullable()->default(null);
            $table->string('hotel_name_unique', 200)->nullable()->default(null);
            $table->string('star', 1)->nullable()->default(null);
            $table->text('image')->nullable()->default(null);
            $table->string('location')->nullable()->default(null);
            $table->string('latitude', 32)->nullable()->default(null);
            $table->string('longitude', 32)->nullable()->default(null);
            $table->text('address')->nullable()->default(null);
            $table->string('phone', 20)->nullable()->default(null);
            $table->string('fax', 20)->nullable()->default(null);
            $table->string('postal', 200)->nullable()->default(null);
            $table->string('email', 200)->nullable()->default(null);
            $table->text('room_facilities')->nullable()->default(null);
            $table->text('hotel_facilities')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->integer('supplier_id');
            $table->text('distances')->nullable()->default(null);
            $table->tinyInteger('status')->nullable()->default('1')->comment('1=Active, 0=InActive');
            $table->string('accomodation_type', 100)->nullable()->default(null);
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
