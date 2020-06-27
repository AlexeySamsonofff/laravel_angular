<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiInfoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'api_info';

    /**
     * Run the migrations.
     * @table api_info
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_type')->comment('1= Hotel,  2= Flight, 3= Car,4=Bus');
            $table->string('api_name', 32);
            $table->text('client_id')->nullable()->default(null);
            $table->text('username');
            $table->text('password');
            $table->text('live_url')->nullable()->default(null);
            $table->text('demo_url')->nullable()->default(null);
            $table->integer('order_no')->nullable()->default(null);
            $table->integer('mode')->comment('0=\'Local\', 1=\'Live\'');
            $table->integer('status')->comment('0= Inactive, 1= Active');
            $table->timestamp('updated_at')->nullable()->default(null);
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
