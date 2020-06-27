<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidayBookingReportsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'holiday_booking_reports';

    /**
     * Run the migrations.
     * @table holiday_booking_reports
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('holiday_booking_id');
            $table->integer('user_id')->nullable()->default(null);
            $table->string('user_no', 100)->nullable()->default(null);
            $table->integer('agent_id')->default('0')->comment('0 is B2C User, Any Real Value is B2B User');
            $table->integer('supplier_id')->default('0');
            $table->string('uniqueRefNo', 50)->nullable()->default(null);
            $table->string('user_email', 50)->nullable()->default(null);
            $table->string('title', 5)->nullable()->default(null);
            $table->string('first_name', 50)->nullable()->default(null);
            $table->string('middle_name', 50)->nullable()->default(null);
            $table->string('last_name', 50)->nullable()->default(null);
            $table->string('user_mobile', 20)->nullable()->default(null);
            $table->text('address')->nullable()->default(null);
            $table->string('user_city', 100)->nullable()->default(null);
            $table->string('user_state', 100)->nullable()->default(null);
            $table->string('user_country', 200)->nullable()->default(null);
            $table->text('user_comment')->nullable()->default(null);
            $table->string('user_pincode', 15)->nullable()->default(null);
            $table->integer('adults_no')->nullable()->default(null);
            $table->integer('childs_no')->nullable()->default(null);
            $table->integer('infants_no')->nullable()->default(null);
            $table->integer('seniors_no')->nullable()->default(null);
            $table->string('holiday_id', 11)->nullable()->default(null);
            $table->string('package_title', 100)->nullable()->default(null);
            $table->string('package_code')->nullable()->default(null);
            $table->string('holiday_duration', 50)->nullable()->default(null);
            $table->string('month_duration', 50)->nullable()->default(null);
            $table->string('arrival_date', 50)->nullable()->default(null);
            $table->string('depart_date', 50)->nullable()->default(null);
            $table->string('accommodation_type', 50)->nullable()->default(null);
            $table->integer('single_room_no')->nullable()->default(null);
            $table->integer('twin_room_no')->nullable()->default(null);
            $table->integer('triple_room_no')->nullable()->default(null);
            $table->integer('room_count')->nullable()->default(null);
            $table->text('room_details')->nullable()->default(null);
            $table->timestamp('booking_datetime')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date('Booking_Date')->nullable()->default(null);
            $table->float('total_cost')->nullable()->default(null);
            $table->string('Currency', 10)->default('USD');
            $table->float('package_cost')->nullable()->default(null);
            $table->float('discount_amount')->nullable()->default(null);
            $table->string('promo_code', 150)->nullable()->default(null);
            $table->string('booking_type', 30)->nullable()->default(null);
            $table->string('booking_status', 30)->nullable()->default(null);
            $table->integer('assignto')->nullable()->default(null);
            $table->text('accounting_response')->nullable()->default(null);
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
