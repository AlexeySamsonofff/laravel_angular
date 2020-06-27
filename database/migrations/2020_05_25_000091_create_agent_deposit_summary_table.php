<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentDepositSummaryTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'agent_deposit_summary';

    /**
     * Run the migrations.
     * @table agent_deposit_summary
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->integer('deposit_id');
            $table->integer('agent_id');
            $table->string('agent_no', 100);
            $table->text('transaction_summary')->nullable()->default(null);
            $table->float('deposit_amount')->nullable()->default(null);
            $table->float('withdraw_amount')->nullable()->default(null);
            $table->string('transaction_id', 250)->nullable()->default(null);
            $table->string('bank', 150)->nullable()->default(null);
            $table->string('branch', 150)->nullable()->default(null);
            $table->string('city', 150)->nullable()->default(null);
            $table->date('value_date')->nullable();
            $table->timestamp('transaction_datetime')->nullable();
            $table->enum('status', ['Accepted', 'Pending', 'Declined']);
            $table->text('remarks')->nullable()->default(null);
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
