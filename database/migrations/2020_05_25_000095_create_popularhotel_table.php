<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePopularhotelTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'popularhotel';

    /**
     * Run the migrations.
     * @table popularhotel
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('hotel_name')->nullable()->default(null);
            $table->string('hotel_code', 50)->nullable()->default(null);
            $table->string('api', 200)->nullable()->default(null);
            $table->string('city_code', 50)->nullable()->default(null);
            $table->string('city_name', 200)->nullable()->default(null);
            $table->string('star', 2)->nullable()->default(null);
            $table->string('status', 10)->nullable()->default(null);
            $table->timestamps();
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
