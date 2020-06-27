<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePopularcityhotelTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'popularcityhotel';

    /**
     * Run the migrations.
     * @table popularcityhotel
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->nullable()->default(null);
            $table->string('code', 20)->nullable()->default(null);
            $table->string('country', 200)->nullable()->default(null);
            $table->string('status', 10)->nullable()->default(null);
            $table->timestamps();
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
