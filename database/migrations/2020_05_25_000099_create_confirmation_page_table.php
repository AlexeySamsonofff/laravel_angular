<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfirmationPageTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'confirmation_page';

    /**
     * Run the migrations.
     * @table confirmation_page
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->text('heading_1')->nullable()->default(null);
            $table->text('sub_heading')->nullable()->default(null);
            $table->string('click_call_text')->nullable()->default(null);
            $table->string('chat_now_text')->nullable()->default(null);
            $table->text('heading_2')->nullable()->default(null);
            $table->text('heading_3')->nullable()->default(null);
            $table->text('more_text')->nullable()->default(null);
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
