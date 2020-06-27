<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLoggerTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'user_logger';

    /**
     * Run the migrations.
     * @table user_logger
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('unique_ref_no', 50)->nullable()->default(null);
            $table->text('search_criteria')->nullable()->default(null);
            $table->string('city', 100)->nullable()->default(null);
            $table->string('results', 50)->nullable()->default(null);
            $table->string('details', 50)->nullable()->default(null);
            $table->string('pre_booking', 50)->nullable()->default(null);
            $table->string('payment_gateway', 50)->nullable()->default(null);
            $table->string('voucher', 50)->nullable()->default(null);
            $table->timestamp('search_start')->nullable()->default(null);
            $table->timestamp('payment_start')->nullable()->default(null);
            $table->timestamp('payment_end')->nullable()->default(null);
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
