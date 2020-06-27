<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupHotelBookingTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'sup_hotel_booking';

    /**
     * Run the migrations.
     * @table sup_hotel_booking
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('hotel_booking_id');
            $table->integer('booking_id');
            $table->integer('supplier_id')->nullable()->default(null);
            $table->string('AL_RefNo', 100)->nullable()->default(null);
            $table->string('uniqueRefNo', 250);
            $table->string('hotel_code', 50);
            $table->string('hotel_name', 200)->nullable()->default(null);
            $table->date('check_in');
            $table->date('check_out');
            $table->date('booking_date');
            $table->string('city', 64)->nullable()->default(null);
            $table->smallInteger('room_count')->nullable()->default(null);
            $table->string('adult', 12);
            $table->string('child', 12);
            $table->double('total_amount');
            $table->double('net_amount');
            $table->double('discount');
            $table->double('tax');
            $table->float('government_tax')->default('0');
            $table->float('resort_fee')->default('0');
            $table->float('service_tax')->default('0');
            $table->integer('paid_status')->comment('0 = Unpaid,1=Paid Supplier');
            $table->text('remarks')->nullable()->default(null);
            $table->mediumText('comment_desc')->nullable()->default(null);
            $table->integer('user_id');
            $table->timestamp('date_time')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
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
