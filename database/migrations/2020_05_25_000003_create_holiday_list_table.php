<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidayListTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'holiday_list';

    /**
     * Run the migrations.
     * @table holiday_list
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('holiday_id');
            $table->string('package_title');
            $table->string('package_code');
            $table->string('duration', 32)->nullable()->default(null);
            $table->string('destination');
            $table->string('state')->nullable()->default(null);
            $table->string('country')->nullable()->default(null);
            $table->string('continent')->nullable()->default(null);
            $table->integer('package_popularity')->nullable()->default(null);
            $table->integer('package_rating')->nullable()->default(null);
            $table->date('start_date')->nullable()->default(null);
            $table->date('end_date')->nullable()->default(null);
            $table->text('short_desc')->nullable()->default(null);
            $table->text('package_desc')->nullable()->default(null);
            $table->text('package_good')->nullable()->default(null);
            $table->text('comfort')->nullable()->default(null);
            $table->text('quality')->nullable()->default(null);
            $table->text('luxury')->nullable()->default(null);
            $table->text('highlights')->nullable()->default(null);
            $table->text('inclusion')->nullable()->default(null);
            $table->text('exclusion')->nullable()->default(null);
            $table->text('terms')->nullable()->default(null);
            $table->integer('price')->nullable()->default(null);
            $table->string('theme_id')->nullable()->default(null);
            $table->string('category', 150)->nullable()->default(null);
            $table->string('month_dur', 150)->nullable()->default(null);
            $table->tinyInteger('hot_offer')->default('0');
            $table->tinyInteger('trending_dest')->default('0');
            $table->tinyInteger('location_dest')->nullable()->default('0');
            $table->string('trending_section', 10)->nullable()->default('N');
            $table->text('trending_img')->nullable()->default(null);
            $table->text('location_img')->nullable()->default(null);
            $table->tinyInteger('offbeat_place')->default('0');
            $table->tinyInteger('deals')->default('0');
            $table->tinyInteger('inspiration_place')->default('0');
            $table->string('status', 10)->nullable()->default(null);
            $table->string('child_allowed', 3)->nullable()->default(null);
            $table->integer('minChildAge')->nullable()->default(null);
            $table->integer('maxChildAge')->nullable()->default(null);
            $table->integer('minAdultAge')->nullable()->default(null);
            $table->integer('minPaxOperating')->nullable()->default(null);
            $table->integer('maxPaxOperating')->nullable()->default(null);
            $table->tinyInteger('discount_type')->nullable()->default(null);
            $table->integer('discount_value')->default('0');
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
