<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupAccSummaryTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'sup_acc_summary';

    /**
     * Run the migrations.
     * @table sup_acc_summary
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('acc_id');
            $table->string('transaction_id', 250)->nullable()->default(null);
            $table->integer('supplier_id');
            $table->string('supplier_no', 100);
            $table->string('booking_id', 20)->nullable()->default(null);
            $table->integer('hotel_id')->nullable()->default(null);
            $table->string('hotel_code', 20)->nullable()->default(null);
            $table->text('transaction_summary')->nullable()->default(null);
            $table->double('booked_amount');
            $table->double('paid_amount')->nullable()->default(null);
            $table->double('available_balance');
            $table->string('city', 150)->nullable()->default(null);
            $table->date('booking_date')->nullable();
            $table->timestamp('transaction_datetime')->nullable();
            $table->integer('user_id');
            $table->text('remarks')->nullable()->default(null);
            $table->string('property_type', 64)->nullable()->default(null);
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
