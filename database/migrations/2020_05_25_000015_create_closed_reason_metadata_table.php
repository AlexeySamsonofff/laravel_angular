<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClosedReasonMetadataTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'closed_reason_metadata';

    /**
     * Run the migrations.
     * @table closed_reason_metadata
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('closed_reason', 200)->nullable()->default(null);
            $table->string('closed_reason_type', 200)->nullable()->default(null);
            $table->tinyInteger('status')->default('1');
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
