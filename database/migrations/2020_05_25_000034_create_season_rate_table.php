<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeasonRateTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'season_rate';

    /**
     * Run the migrations.
     * @table season_rate
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('season_name')->nullable()->default(null);
            $table->string('fromdate')->nullable()->default(null);
            $table->string('todate')->nullable()->default(null);
            $table->integer('supplier_id')->nullable()->default(null);
            $table->tinyInteger('status')->default('0');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
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
