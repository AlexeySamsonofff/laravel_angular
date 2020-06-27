<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupVillaRatesListTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'sup_villa_rates_list';

    /**
     * Run the migrations.
     * @table sup_villa_rates_list
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('sup_villa_rates_list_id');
            $table->integer('supplier_id')->nullable()->default(null);
            $table->integer('sup_villa_id')->nullable()->default(null);
            $table->string('villa_code', 250)->nullable()->default(null);
            $table->date('from_date')->nullable()->default(null);
            $table->date('to_date')->nullable()->default(null);
            $table->text('cancellation_policy')->nullable()->default(null);
            $table->double('villa_rate')->nullable()->default(null);
            $table->integer('status')->nullable()->default(null);
            $table->timestamp('last_updated')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->tinyInteger('is_deleted')->default('0');
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
