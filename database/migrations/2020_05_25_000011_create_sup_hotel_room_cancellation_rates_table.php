<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupHotelRoomCancellationRatesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'sup_hotel_room_cancellation_rates';

    /**
     * Run the migrations.
     * @table sup_hotel_room_cancellation_rates
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sup_hotel_room_rates_list_id')->nullable()->default(null);
            $table->integer('supplier_id');
            $table->integer('sup_hotel_id');
            $table->string('hotel_code', 20);
            $table->integer('sup_room_details_id')->nullable()->default(null);
            $table->string('room_code', 20)->nullable()->default(null);
            $table->text('meal_plan')->nullable()->default(null);
            $table->integer('days_before_checkin');
            $table->integer('per_rate_charge');
            $table->text('cancel_rates_type')->nullable()->default(null);
            $table->date('room_avail_date')->nullable()->default(null);
            $table->timestamp('date_time')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->integer('policy_id')->nullable()->default(null);
            $table->integer('season_id')->nullable()->default(null);
            $table->string('policy_name')->nullable()->default(null);
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
