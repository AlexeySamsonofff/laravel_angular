<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidayStateTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'holiday_state';

    /**
     * Run the migrations.
     * @table holiday_state
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('state_id');
            $table->string('state_name', 150);
            $table->integer('country_id');
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
