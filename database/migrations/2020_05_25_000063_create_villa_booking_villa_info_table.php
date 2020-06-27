<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillaBookingVillaInfoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'villa_booking_villa_info';

    /**
     * Run the migrations.
     * @table villa_booking_villa_info
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('villa_booking_id');
            $table->bigInteger('user_id')->nullable()->default('0')->comment('0 or NULL is Guest, Any Real value is B2C User');
            $table->string('user_no', 100)->nullable()->default(null);
            $table->bigInteger('agent_id')->nullable()->default('0')->comment('0 is B2C User, Any Real Value is B2B  User');
            $table->string('uniqueRefNo', 100)->nullable()->default(null);
            $table->string('villa_code', 50)->nullable()->default(null);
            $table->string('villa_name', 200)->nullable()->default(null);
            $table->string('city_code', 50)->nullable()->default(null);
            $table->date('check_in')->nullable()->default(null);
            $table->date('check_out')->nullable()->default(null);
            $table->date('voucher_date')->nullable()->default(null);
            $table->string('city', 64)->nullable()->default(null);
            $table->smallInteger('star')->nullable()->default(null);
            $table->text('address')->nullable()->default(null);
            $table->text('cancellation_policy')->nullable()->default(null);
            $table->smallInteger('bedrooms')->nullable()->default(null);
            $table->smallInteger('bathrooms')->nullable()->default(null);
            $table->smallInteger('guests')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->string('phone', 32)->nullable()->default(null);
            $table->text('image')->nullable()->default(null);
            $table->smallInteger('durations')->nullable()->default(null);
            $table->string('latitude', 200)->nullable()->default(null);
            $table->string('longitude', 200)->nullable()->default(null);
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
