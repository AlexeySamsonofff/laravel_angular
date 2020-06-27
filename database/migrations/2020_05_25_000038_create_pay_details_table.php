<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayDetailsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pay_details';

    /**
     * Run the migrations.
     * @table pay_details
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('payment_id');
            $table->string('uniqueRefNo', 20)->nullable()->default(null);
            $table->string('service_type', 20)->nullable()->default(null);
            $table->string('status', 50)->nullable()->default(null);
            $table->double('amount')->nullable()->default(null);
            $table->double('paid_amount');
            $table->double('discount')->nullable()->default(null);
            $table->text('Message')->nullable()->default(null);
            $table->string('RespondType', 50)->nullable()->default(null);
            $table->string('IP', 200)->nullable()->default(null);
            $table->string('PaymentType', 50)->nullable()->default(null);
            $table->text('RespondCode')->nullable()->default(null);
            $table->string('Auth', 100);
            $table->string('passenger_name', 100);
            $table->string('passenger_mobile', 100);
            $table->string('passenger_email', 100);
            $table->string('user_ip', 100)->nullable()->default(null);
            $table->string('api', 100);
            $table->string('ChargeID')->nullable()->default(null);
            $table->string('TransactionID')->nullable()->default(null);
            $table->string('CustomerID')->nullable()->default(null);
            $table->string('Description')->nullable()->default(null);
            $table->text('ResponseDescription')->nullable()->default(null);
            $table->text('outcome')->nullable()->default(null);
            $table->string('SourceID')->nullable()->default(null);
            $table->text('client_secret')->nullable()->default(null);
            $table->text('owner')->nullable()->default(null);
            $table->text('card')->nullable()->default(null);
            $table->date('TransactionDate')->nullable()->default(null);
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
