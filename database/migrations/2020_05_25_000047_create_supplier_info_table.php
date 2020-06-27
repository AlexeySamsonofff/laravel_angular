<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierInfoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'supplier_info';

    /**
     * Run the migrations.
     * @table supplier_info
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 100)->comment('Login Emailid / Username');
            $table->string('password', 200)->comment('Login Password');
            $table->string('supplier_no', 128);
            $table->string('supplier_name', 128);
            $table->string('supplier_logo')->nullable()->default(null);
            $table->string('currency_type', 64);
            $table->string('title', 10)->nullable()->default(null);
            $table->string('first_name', 150);
            $table->string('middle_name', 150)->nullable()->default(null);
            $table->string('last_name', 150);
            $table->string('mobile_no', 32)->nullable()->default(null);
            $table->bigInteger('office_phone_no')->nullable()->default(null);
            $table->text('address')->nullable()->default(null);
            $table->string('pin_code', 32)->nullable()->default(null);
            $table->string('city', 150)->nullable()->default(null);
            $table->string('state', 150)->nullable()->default(null);
            $table->string('country', 164)->nullable()->default(null);
            $table->integer('status')->nullable()->default(null)->comment('\'\'=Pending, 0=Inactive, 1=Active, 2=Blocked');
            $table->string('supplier_grade', 50)->nullable()->default(null);
            $table->string('account_id', 30)->nullable()->default(null);
            $table->string('physical_address', 200)->nullable()->default(null);
            $table->string('emergency_number', 50)->nullable()->default(null);
            $table->string('website', 200)->nullable()->default(null);
            $table->string('time_zone', 50)->nullable()->default(null);
            $table->string('office_timings', 50)->nullable()->default(null);
            $table->string('after_office_contact', 200)->nullable()->default(null);
            $table->text('telephone_no')->nullable()->default(null);
            $table->string('holiday', 50)->nullable()->default(null);
            $table->string('region', 100)->nullable()->default(null);
            $table->text('nationality')->nullable()->default(null);
            $table->string('module_permission', 11)->nullable()->default(null)->comment('1=hotel,2=villa,3=tour');
            $table->enum('confirm_page_parmission', ['0', '1'])->nullable()->default('0');
            $table->enum('tax_included_permission', ['0', '1'])->nullable()->default('0');
            $table->string('activation_key')->nullable()->default(null);
            $table->tinyInteger('notification_flag')->default('0');
            $table->rememberToken();
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
