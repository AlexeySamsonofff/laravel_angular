<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupHotelCancellationRatesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'sup_hotel_cancellation_rates';

    /**
     * Run the migrations.
     * @table sup_hotel_cancellation_rates
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id');
            $table->integer('sup_hotel_id');
            $table->string('hotel_code', 20);
            $table->integer('cancellation_id');
            $table->integer('days_before_checkin');
            $table->integer('per_rate_charge');
            $table->timestamp('date_time')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            $table->index(["hotel_code"], 'hotel_code');

            $table->index(["sup_hotel_id"], 'sup_hotel_id');

            $table->index(["sup_hotel_id"], 'sup_hotel_id_2');

            $table->index(["hotel_code"], 'hotel_code_2');
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
