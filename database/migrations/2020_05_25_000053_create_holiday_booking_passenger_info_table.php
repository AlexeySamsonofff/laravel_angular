<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidayBookingPassengerInfoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'holiday_booking_passenger_info';

    /**
     * Run the migrations.
     * @table holiday_booking_passenger_info
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('holi_pass_id');
            $table->integer('user_id')->nullable()->default(null);
            $table->string('uniqueRefNo', 50)->nullable()->default(null);
            $table->string('passenger_type', 50)->nullable()->default(null);
            $table->string('title', 5)->nullable()->default(null);
            $table->string('first_name', 50)->nullable()->default(null);
            $table->string('middle_name', 50)->nullable()->default(null);
            $table->string('last_name', 50)->nullable()->default(null);
            $table->string('dob', 20)->nullable()->default(null);
            $table->string('holiday_id', 11)->nullable()->default(null);
            $table->string('package_title', 100)->nullable()->default(null);
            $table->string('holiday_duration', 50)->nullable()->default(null);
            $table->string('month_duration', 50)->nullable()->default(null);
            $table->string('arrival_date', 50)->nullable()->default(null);
            $table->string('depart_date', 50)->nullable()->default(null);
            $table->timestamp('booking_datetime')->default(DB::raw('CURRENT_TIMESTAMP'));
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
