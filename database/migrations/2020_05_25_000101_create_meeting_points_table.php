<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingPointsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'meeting_points';

    /**
     * Run the migrations.
     * @table meeting_points
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('holiday_id')->nullable()->default(null);
            $table->string('pickup_type')->nullable()->default(null);
            $table->string('pickup_time')->nullable()->default(null);
            $table->string('pickup_location')->nullable()->default(null);
            $table->string('latitude')->nullable()->default(null);
            $table->string('longitude')->nullable()->default(null);
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
