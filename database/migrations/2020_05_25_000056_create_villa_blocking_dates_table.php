<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillaBlockingDatesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'villa_blocking_dates';

    /**
     * Run the migrations.
     * @table villa_blocking_dates
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('villa_id', 64)->nullable()->default(null);
            $table->text('from_date')->nullable()->default(null);
            $table->string('blocking_reason', 100)->nullable()->default(null);
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
