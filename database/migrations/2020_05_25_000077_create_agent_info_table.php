<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentInfoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'agent_info';

    /**
     * Run the migrations.
     * @table agent_info
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('agent_type')->comment('1=cash deposit agent, 2=credit agent');
            $table->string('agent_email', 100)->comment('Login Emailid / Username');
            $table->string('agent_password', 200)->comment('Login Password');
            $table->string('agent_no', 128);
            $table->string('agency_name', 128);
            $table->string('profilepicture')->nullable()->default(null);
            $table->string('currency_type', 64);
            $table->string('title', 10)->nullable()->default(null);
            $table->string('first_name', 150);
            $table->string('middle_name', 150)->nullable()->default(null);
            $table->string('last_name', 150);
            $table->bigInteger('mobile_no');
            $table->bigInteger('office_phone_no')->nullable()->default(null);
            $table->string('fax', 64)->nullable()->default(null);
            $table->string('website')->nullable()->default(null);
            $table->text('address')->nullable()->default(null);
            $table->bigInteger('pin_code')->nullable()->default(null);
            $table->string('city', 150)->nullable()->default(null);
            $table->string('state', 150)->nullable()->default(null);
            $table->string('country', 150);
            $table->string('status', 11)->nullable()->default(null)->comment('\'\'=Pending, 0=Inactive, 1=Active, 2=Blocked');
            $table->string('gstin', 100)->nullable()->default(null);
            $table->string('pan_no', 100)->nullable()->default(null);
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
