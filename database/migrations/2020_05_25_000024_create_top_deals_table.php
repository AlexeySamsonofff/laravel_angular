<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopDealsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'top_deals';

    /**
     * Run the migrations.
     * @table top_deals
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('topic', 128)->nullable()->default(null);
            $table->string('title')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->text('banner_path')->nullable()->default(null);
            $table->text('url')->nullable()->default(null);
            $table->tinyInteger('status')->nullable()->default(null);
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
