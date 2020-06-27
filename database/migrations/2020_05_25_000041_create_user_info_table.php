<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'user_info';

    /**
     * Run the migrations.
     * @table user_info
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_email', 100)->comment('Login Emailid / Username');
            $table->string('user_password', 200)->comment('Login Password');
            $table->string('user_no', 128)->nullable()->default(null);
            $table->string('title', 10)->nullable()->default(null);
            $table->string('first_name', 150);
            $table->string('middle_name', 150)->nullable()->default(null);
            $table->string('last_name', 150);
            $table->bigInteger('mobile_no');
            $table->string('billing_no', 50)->nullable()->default(null);
            $table->text('address')->nullable()->default(null);
            $table->bigInteger('pin_code')->nullable()->default(null);
            $table->string('city', 150)->nullable()->default(null);
            $table->string('state', 150)->nullable()->default(null);
            $table->string('country', 150)->nullable()->default(null);
            $table->integer('status')->nullable()->default(null)->comment('\'\'=Pending, 0=Inactive, 1=Active, 2=Blocked');
            $table->string('gender', 100)->nullable()->default(null);
            $table->string('DOB', 100)->nullable()->default(null);
            $table->string('activation_key')->nullable()->default(null);
            $table->string('profilepicture', 100)->nullable()->default(null);
            $table->text('recaptcharesponse')->nullable()->default(null);
            $table->text('zohoId')->nullable()->default(null);
            $table->text('zohoInsertResJson')->nullable()->default(null);
            $table->text('zohoUpdateResJson')->nullable()->default(null);
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
