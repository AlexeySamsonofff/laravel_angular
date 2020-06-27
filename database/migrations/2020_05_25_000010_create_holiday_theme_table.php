<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidayThemeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'holiday_theme';

    /**
     * Run the migrations.
     * @table holiday_theme
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('theme_id');
            $table->string('theme_name');
            $table->text('theme_desc')->nullable()->default(null);
            $table->integer('price')->nullable()->default(null);
            $table->string('theme_img', 100)->nullable()->default(null);
            $table->string('home_category_image')->nullable()->default(null);
            $table->string('category_image')->nullable()->default(null);
            $table->tinyInteger('status')->default('0');
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
