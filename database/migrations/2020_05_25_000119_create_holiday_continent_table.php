<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidayContinentTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'holiday_continent';

    /**
     * Run the migrations.
     * @table holiday_continent
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('continent_id');
            $table->string('continent_name', 150);
            $table->string('inspiration_img_path', 200);
            $table->text('inspiration_header_text');
            $table->text('inspiration_text');
            $table->text('promotional_name');
            $table->tinyInteger('active_inspiration');
            $table->tinyInteger('isActive');
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
