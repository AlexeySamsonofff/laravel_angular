<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillaBookingReportsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'villa_booking_reports';

    /**
     * Run the migrations.
     * @table villa_booking_reports
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('report_id');
            $table->integer('user_id')->nullable()->default('0')->comment('0 or NULL is Guest, Any Real value is B2C User');
            $table->string('user_no', 100)->nullable()->default(null);
            $table->integer('agent_id')->nullable()->default('0')->comment('0 is B2C User, Any Real Value is B2B  User');
            $table->integer('supplier_id')->nullable()->default('0');
            $table->string('Api_Name', 50)->nullable()->default(null);
            $table->string('Booking_RefNo', 100)->nullable()->default(null);
            $table->string('uniqueRefNo', 100)->nullable()->default(null);
            $table->float('promotional_discount')->nullable()->default(null);
            $table->string('Booking_Status', 100)->nullable()->default(null);
            $table->date('Booking_Date')->nullable();
            $table->text('allotment_arr')->nullable()->default(null);
            $table->double('Net_Amount')->nullable()->default(null);
            $table->double('Deducted_Amount')->nullable()->default(null);
            $table->float('Booking_Amount')->nullable()->default(null);
            $table->double('total_cost')->nullable()->default(null);
            $table->float('Admin_Markup')->nullable()->default(null);
            $table->float('Admin_Agent_Markup')->nullable()->default(null);
            $table->float('Agent_Markup')->nullable()->default(null);
            $table->float('Payment_Charge')->nullable()->default(null);
            $table->string('Currency', 100)->nullable()->default(null);
            $table->string('Xml_Currency', 100)->nullable()->default(null);
            $table->text('cancel_policy')->nullable()->default(null);
            $table->string('Cancellation_Status', 50)->nullable()->default(null);
            $table->string('Cancelled_By', 64)->nullable()->default(null);
            $table->string('Payment_Id', 200)->nullable()->default(null);
            $table->string('Payment_Status', 50)->nullable()->default(null);
            $table->string('Booking_Done_By', 100)->nullable()->default(null);
            $table->string('Cancellation_date', 100)->nullable()->default(null);
            $table->string('currency_conv_value', 111)->nullable()->default(null);
            $table->string('ROE', 111)->nullable()->default(null);
            $table->string('payment_type', 30)->nullable()->default(null);
            $table->float('Di_Markup')->nullable()->default(null);
            $table->float('Di_Agent_Markup')->nullable()->default(null);
            $table->float('Sub_Agent_Markup')->nullable()->default(null);
            $table->text('paymentGuaranteedBy')->nullable()->default(null);
            $table->string('agent_type', 200)->nullable()->default(null);
            $table->string('user_name', 200)->nullable()->default(null);
            $table->string('user_email', 100)->nullable()->default(null);
            $table->string('user_mobile', 100)->nullable()->default(null);
            $table->string('user_country', 200)->nullable()->default(null);
            $table->string('user_pincode', 11)->nullable()->default(null);
            $table->string('user_city', 32)->nullable()->default(null);
            $table->string('user_state', 32)->nullable()->default(null);
            $table->text('user_address')->nullable()->default(null);
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
