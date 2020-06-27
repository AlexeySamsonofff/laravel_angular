<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidayBookingHolidayInfoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'holiday_booking_holiday_info';

    /**
     * Run the migrations.
     * @table holiday_booking_holiday_info
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('holiday_info_id');
            $table->string('uniqueRefNo', 50)->nullable()->default(null);
            $table->string('user_email', 50)->nullable()->default(null);
            $table->string('title', 50)->nullable()->default(null);
            $table->string('first_name', 50)->nullable()->default(null);
            $table->string('middle_name', 50)->nullable()->default(null);
            $table->string('last_name', 50)->nullable()->default(null);
            $table->string('user_mobile', 20)->nullable()->default(null);
            $table->string('package_title')->nullable()->default(null);
            $table->string('package_code')->nullable()->default(null);
            $table->string('holiday_duration', 100)->nullable()->default(null);
            $table->timestamp('booking_datetime')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('booking_status', 30)->nullable()->default(null);
            $table->string('operated_by', 32)->nullable()->default(null);
            $table->string('operator_no', 16)->nullable()->default(null);
            $table->string('emergency_no', 16)->nullable()->default(null);
            $table->text('cancellation_policy')->nullable()->default(null);
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
