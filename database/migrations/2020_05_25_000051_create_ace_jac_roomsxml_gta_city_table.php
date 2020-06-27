<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAceJacRoomsxmlGtaCityTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'ace_jac_roomsxml_gta_city';

    /**
     * Run the migrations.
     * @table ace_jac_roomsxml_gta_city
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('country_name', 200)->nullable()->default(null);
            $table->string('city_name', 200)->nullable()->default(null);
            $table->string('ace_city_id', 100)->nullable()->default(null);
            $table->string('ace_country_id', 100)->nullable()->default(null);
            $table->string('rooms_city_id', 100)->nullable()->default(null);
            $table->string('rooms_country_id', 100)->nullable()->default(null);
            $table->string('region_jac', 200)->nullable()->default(null);
            $table->string('gta_city_code', 100)->nullable()->default(null);
            $table->string('gta_country_code', 100)->nullable()->default(null);
            $table->string('at_city_code', 100)->nullable()->default(null);
            $table->string('at_country_code', 100)->nullable()->default(null);
            $table->string('tg_city_name')->nullable()->default(null);
            $table->string('hp_city_id')->nullable()->default(null);
            $table->string('dotw_city_id', 111);
            $table->string('ez_city_name', 100);
            $table->string('ez_country_name', 100);
            $table->string('hb_city_code', 100)->nullable()->default(null);
            $table->string('tbo_city_id', 100)->nullable()->default(null);
            $table->string('tbo_country_code', 100)->nullable()->default(null);
            $table->integer('status')->nullable()->default(null);
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
