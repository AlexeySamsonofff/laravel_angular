<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidayBlockingDatesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'holiday_blocking_dates';

    /**
     * Run the migrations.
     * @table holiday_blocking_dates
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('holiday_id')->nullable()->default(null);
            $table->integer('activity_id')->nullable()->default(null);
            $table->text('from_date')->nullable()->default(null);
            $table->string('blocking_reason', 128)->nullable()->default(null);
            $table->integer('supplier_id')->nullable()->default(null);
            $table->tinyInteger('status')->default('1');
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
