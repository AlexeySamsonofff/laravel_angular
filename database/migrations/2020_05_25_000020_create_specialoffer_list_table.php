<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSpecialofferListTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'specialoffer_list';

    /**
     * Run the migrations.
     * @table specialoffer_list
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id');
            $table->integer('specialoffer_type');
            $table->string('specialoffer_code', 200);
            $table->text('specialoffer_desc');
            $table->integer('specialoffer_enable')->default('0');
            $table->text('superseeds');
            $table->tinyInteger('status')->comment('Active=1, InActive=0, Blocked=2');
            $table->timestamp('updated_time')->default(DB::raw('CURRENT_TIMESTAMP'));
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
