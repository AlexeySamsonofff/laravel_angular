<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierLoginHistroyTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'supplier_login_histroy';

    /**
     * Run the migrations.
     * @table supplier_login_histroy
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('history_id');
            $table->string('session_id', 250);
            $table->integer('supplier_id');
            $table->integer('supplier_sub_user_id')->nullable()->default(null);
            $table->string('ip_address', 45)->default('0');
            $table->string('remote_ip', 45)->default('0');
            $table->string('user_agent', 120);
            $table->timestamp('last_activity')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comment('on insert CURRENT_TIMESTAMP');
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
