<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidayActivityTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'holiday_activity';

    /**
     * Run the migrations.
     * @table holiday_activity
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('activity_code', 64);
            $table->integer('holiday_id')->nullable()->default(null);
            $table->string('activity_title')->nullable()->default(null);
            $table->string('operating_hours', 32)->nullable()->default(null);
            $table->string('duration', 32)->nullable()->default(null);
            $table->string('pickup_location')->nullable()->default(null);
            $table->string('pickup_time', 32)->nullable()->default(null);
            $table->string('child_allowed', 3)->nullable()->default(null);
            $table->integer('minChildAge')->nullable()->default(null);
            $table->integer('maxChildAge')->nullable()->default(null);
            $table->integer('minAdultAge')->nullable()->default(null);
            $table->integer('minPaxOperating')->nullable()->default(null);
            $table->integer('maxPaxOperating')->nullable()->default(null);
            $table->string('start_date', 32)->nullable()->default(null);
            $table->string('end_date', 32)->nullable()->default(null);
            $table->float('price_adt')->nullable()->default(null);
            $table->float('price_chd')->nullable()->default(null);
            $table->float('price_sen')->nullable()->default(null);
            $table->text('activity_desc')->nullable()->default(null);
            $table->text('cancel_policy')->nullable()->default(null);
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
