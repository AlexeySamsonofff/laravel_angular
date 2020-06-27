<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'cms';

    /**
     * Run the migrations.
     * @table cms
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type', 10)->nullable()->default(null)->comment('1=aboutus, 2=contactus, 3-privacystatement, 4=termsandcondition');
            $table->string('name', 20);
            $table->longText('content')->nullable()->default(null);
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
