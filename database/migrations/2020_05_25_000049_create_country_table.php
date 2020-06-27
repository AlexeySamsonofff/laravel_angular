<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'country';

    /**
     * Run the migrations.
     * @table country
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('numcode');
            $table->char('iso2', 2);
            $table->string('name', 80);
            $table->string('name_caps', 80);
            $table->char('iso3', 3)->nullable()->default(null);
            $table->integer('phone_code');
            $table->string('continent', 30)->nullable()->default(null);

            $table->unique(["id"], 'id');
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
