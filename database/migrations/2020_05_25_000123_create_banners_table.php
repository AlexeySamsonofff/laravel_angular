<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'banners';

    /**
     * Run the migrations.
     * @table banners
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('module_type')->nullable()->default(null)->comment('1=hotel,2=villa,3=tour,4=all');
            $table->text('banner_path')->nullable()->default(null);
            $table->tinyInteger('status')->nullable()->default(null);
            $table->nullableTimestamps();
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
