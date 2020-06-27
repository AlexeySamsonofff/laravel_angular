<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateB2BMarkupInfoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'b2b_markup_info';

    /**
     * Run the migrations.
     * @table b2b_markup_info
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('agent_no', 50);
            $table->integer('service_type')->comment('1= Hotel,  2= Flight, 3= Car');
            $table->string('markup_type', 50);
            $table->string('api_name', 32);
            $table->string('hotel', 100)->nullable()->default(null);
            $table->string('country', 120);
            $table->float('markup')->comment('In % only');
            $table->integer('status')->comment('1= Active, 0= Inactive');
            $table->string('markup_process', 111);
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
