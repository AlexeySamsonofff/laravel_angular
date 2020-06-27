<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLoginHistoryTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'user_login_history';

    /**
     * Run the migrations.
     * @table user_login_history
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('history_id');
            $table->string('session_id', 250);
            $table->string('user_no', 100);
            $table->string('ip_address', 45)->default('0');
            $table->string('remote_ip', 45)->default('0');
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
