<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupVillaCancellationRatesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'sup_villa_cancellation_rates';

    /**
     * Run the migrations.
     * @table sup_villa_cancellation_rates
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sup_villa_rates_list_id')->nullable()->default(null);
            $table->integer('supplier_id')->nullable()->default(null);
            $table->integer('sup_villa_id')->nullable()->default(null);
            $table->string('villa_code', 20)->nullable()->default(null);
            $table->integer('days_before_checkin');
            $table->integer('per_rate_charge')->nullable()->default(null);
            $table->string('cancel_rates_type', 20)->nullable()->default(null);
            $table->date('villa_avail_date')->nullable()->default(null);
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
