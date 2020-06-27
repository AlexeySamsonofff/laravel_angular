<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentGatewayTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'payment_gateway';

    /**
     * Run the migrations.
     * @table payment_gateway
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->integer('id');
            $table->integer('service_type')->comment('1= Hotel, 2= Flight');
            $table->integer('user_type')->nullable()->default(null);
            $table->float('charge')->nullable()->default(null)->comment('In % only');
            $table->integer('status')->comment('0 =Inactive, 1=Active');
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
