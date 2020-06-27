<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayDetailsOldTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pay_details_old';

    /**
     * Run the migrations.
     * @table pay_details_old
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigInteger('payment_id');
            $table->string('uniqueRefNo', 20)->nullable()->default(null);
            $table->text('mihpayid')->nullable()->default(null);
            $table->string('status', 50)->nullable()->default(null);
            $table->double('amount')->nullable()->default(null);
            $table->double('paid_amount');
            $table->double('discount')->nullable()->default(null);
            $table->double('net_amount_debit')->nullable()->default(null);
            $table->timestamp('addedon')->nullable()->default(null);
            $table->string('productinfo', 100)->nullable()->default(null);
            $table->text('hash')->nullable()->default(null);
            $table->string('transac_no', 100)->nullable()->default(null);
            $table->string('payment_source', 50)->nullable()->default(null);
            $table->string('PG_TYPE', 50)->nullable()->default(null);
            $table->string('bank_ref_num', 100)->nullable()->default(null);
            $table->string('bankcode', 100)->nullable()->default(null);
            $table->string('error', 50)->nullable()->default(null);
            $table->text('error_Message')->nullable()->default(null);
            $table->text('cardnum')->nullable()->default(null);
            $table->string('resp_code', 100);
            $table->string('transaction_id', 100);
            $table->string('passenger_name', 100);
            $table->string('passenger_mobile', 100);
            $table->string('passenger_email', 100);
            $table->string('service', 100);
            $table->string('ip', 100)->nullable()->default(null);
            $table->string('api', 100);
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
