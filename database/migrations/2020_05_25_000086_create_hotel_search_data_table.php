<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelSearchDataTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'hotel_search_data';

    /**
     * Run the migrations.
     * @table hotel_search_data
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('session_id', 200);
            $table->string('uniqueRefNo');
            $table->text('search_data');
            $table->timestamp('date_time')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
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
