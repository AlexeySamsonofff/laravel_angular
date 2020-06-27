<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupVillaBookingTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'sup_villa_booking';

    /**
     * Run the migrations.
     * @table sup_villa_booking
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('booking_id')->nullable()->default(null);
            $table->integer('supplier_id')->nullable()->default(null);
            $table->string('uniqueRefNo', 250)->nullable()->default(null);
            $table->string('villa_code', 50)->nullable()->default(null);
            $table->string('villa_name', 200)->nullable()->default(null);
            $table->date('check_in')->nullable()->default(null);
            $table->date('check_out')->nullable()->default(null);
            $table->date('booking_date')->nullable()->default(null);
            $table->string('city', 64)->nullable()->default(null);
            $table->smallInteger('bedrooms')->nullable()->default(null);
            $table->smallInteger('bathrooms')->nullable()->default(null);
            $table->smallInteger('guests')->nullable()->default(null);
            $table->double('total_amount')->nullable()->default(null);
            $table->double('net_amount')->nullable()->default(null);
            $table->double('discount')->nullable()->default(null);
            $table->double('tax');
            $table->tinyInteger('paid_status')->nullable()->default(null)->comment('0 = Unpaid,1=Paid Supplier');
            $table->text('remarks')->nullable()->default(null);
            $table->mediumText('comment_desc')->nullable()->default(null);
            $table->integer('user_id')->nullable()->default(null);
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
