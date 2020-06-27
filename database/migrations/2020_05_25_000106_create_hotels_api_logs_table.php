<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsApiLogsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'hotels_api_logs';

    /**
     * Run the migrations.
     * @table hotels_api_logs
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigInteger('log_id');
            $table->string('session_id', 200)->nullable()->default(null);
            $table->string('api', 20)->nullable()->default(null);
            $table->string('uniqueRefNo', 50)->nullable()->default(null);
            $table->timestamp('date_time')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->binary('search_request')->nullable()->default(null);
            $table->binary('search_response')->nullable()->default(null);
            $table->binary('hoteldetail_request')->nullable()->default(null);
            $table->binary('hoteldetail_response')->nullable()->default(null);
            $table->binary('getroom_request')->nullable()->default(null);
            $table->binary('getroom_response')->nullable()->default(null);
            $table->binary('roomblock_request')->nullable()->default(null);
            $table->binary('roomblock_response')->nullable()->default(null);
            $table->binary('hotelbookdetail_request')->nullable()->default(null);
            $table->binary('hotelbookdetail_response')->nullable()->default(null);
            $table->binary('hotelbooking_request')->nullable()->default(null);
            $table->binary('hotelbooking_response')->nullable()->default(null);
            $table->binary('cancellation_request')->nullable()->default(null);
            $table->binary('cancellation_response')->nullable()->default(null);
            $table->binary('final_cancellation_req')->nullable()->default(null);
            $table->binary('final_cancellation_res')->nullable()->default(null);
            $table->string('AL_RefNo', 100)->nullable()->default(null);
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
