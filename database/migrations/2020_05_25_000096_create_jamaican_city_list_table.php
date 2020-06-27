<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJamaicanCityListTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'jamaican_city_list';

    /**
     * Run the migrations.
     * @table jamaican_city_list
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('city_name')->nullable()->default(null);
            $table->string('region_name')->nullable()->default(null);
            $table->string('country_name')->nullable()->default('Jamaica');
            $table->string('latitude')->nullable()->default(null);
            $table->string('longitude')->nullable()->default(null);
            $table->tinyInteger('status')->nullable()->default('1');
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
