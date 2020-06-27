<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrencyTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'currency';

    /**
     * Run the migrations.
     * @table currency
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('currency_id');
            $table->string('currency_name', 64)->nullable()->default(null);
            $table->char('currency_code', 3)->nullable()->default(null);
            $table->float('value')->nullable()->default(null)->comment('1 USD=');
            $table->integer('status')->comment('1= Active, 0= Inactive');
            $table->timestamp('updated_datetime')->nullable();
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
