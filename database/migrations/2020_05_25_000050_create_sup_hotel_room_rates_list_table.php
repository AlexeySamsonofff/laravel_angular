<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupHotelRoomRatesListTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'sup_hotel_room_rates_list';

    /**
     * Run the migrations.
     * @table sup_hotel_room_rates_list
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('sup_hotel_room_rates_list_id');
            $table->integer('supplier_id');
            $table->integer('sup_hotel_id');
            $table->string('hotel_code', 250);
            $table->string('room_code', 20);
            $table->integer('sup_room_details_id');
            $table->date('from_date')->nullable()->default(null);
            $table->date('to_date')->nullable()->default(null);
            $table->text('meal_plan')->nullable()->default(null);
            $table->text('cancellation_policy')->nullable()->default(null);
            $table->double('room_rate')->nullable()->default(null);
            $table->double('adult_rate')->nullable()->default(null);
            $table->double('double_rate')->default('0');
            $table->string('triple_rate', 50)->nullable()->default(null);
            $table->string('quad_rate', 50)->nullable()->default(null);
            $table->string('child_rate', 50)->nullable()->default(null);
            $table->integer('min_night_stay')->nullable()->default(null);
            $table->float('discount')->nullable()->default(null);
            $table->integer('status')->nullable()->default(null);
            $table->timestamp('last_updated')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->tinyInteger('is_deleted')->default('0');
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
