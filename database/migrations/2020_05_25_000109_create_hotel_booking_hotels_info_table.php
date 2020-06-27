<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelBookingHotelsInfoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'hotel_booking_hotels_info';

    /**
     * Run the migrations.
     * @table hotel_booking_hotels_info
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('hotel_booking_id');
            $table->bigInteger('user_id')->nullable()->default('0')->comment('0 or NULL is Guest, Any Real value is B2C User');
            $table->string('user_no', 100)->nullable()->default(null);
            $table->bigInteger('agent_id')->nullable()->default('0')->comment('0 is B2C User, Any Real Value is B2B  User');
            $table->string('uniqueRefNo', 100)->nullable()->default(null);
            $table->string('hotel_code', 50)->nullable()->default(null);
            $table->string('hotel_name', 200)->nullable()->default(null);
            $table->string('city_code', 50)->nullable()->default(null);
            $table->date('check_in');
            $table->date('check_out');
            $table->date('voucher_date');
            $table->string('city', 64)->nullable()->default(null);
            $table->text('room_type')->nullable()->default(null);
            $table->smallInteger('star');
            $table->text('address')->nullable()->default(null);
            $table->smallInteger('room_count')->nullable()->default(null);
            $table->text('cancellation_policy')->nullable()->default(null);
            $table->string('adult', 12)->nullable()->default(null);
            $table->string('child', 12);
            $table->string('infant', 50)->nullable()->default('0');
            $table->text('childage')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->string('phone', 32)->nullable()->default(null);
            $table->string('fax', 32)->nullable()->default(null);
            $table->text('image')->nullable()->default(null);
            $table->string('nights', 32)->nullable()->default(null);
            $table->string('api', 20);
            $table->text('remarks')->nullable()->default(null);
            $table->mediumText('comment_desc')->nullable()->default(null);
            $table->string('inclusion', 200)->nullable()->default(null);
            $table->string('room_code', 100)->nullable()->default(null);
            $table->text('fitruums_notes')->nullable()->default(null);
            $table->string('latitude', 200)->nullable()->default(null);
            $table->string('longitude', 200)->nullable()->default(null);
            $table->string('room_format', 100)->nullable()->default(null);
            $table->string('hp_additional_info', 200)->nullable()->default(null);
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
