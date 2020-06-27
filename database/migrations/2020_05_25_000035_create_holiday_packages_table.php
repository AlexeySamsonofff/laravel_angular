<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidayPackagesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'holiday_packages';

    /**
     * Run the migrations.
     * @table holiday_packages
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('supplier_id')->nullable()->default(null);
            $table->string('package_title')->nullable()->default(null);
            $table->string('package_code')->nullable()->default(null);
            $table->string('duration', 32)->nullable()->default(null);
            $table->string('destination')->nullable()->default(null);
            $table->string('state')->nullable()->default(null);
            $table->string('country')->nullable()->default(null);
            $table->string('continent')->nullable()->default(null);
            $table->integer('package_rating')->nullable()->default(null);
            $table->date('start_date')->nullable()->default(null);
            $table->date('end_date')->nullable()->default(null);
            $table->text('short_desc')->nullable()->default(null);
            $table->text('package_desc')->nullable()->default(null);
            $table->text('package_good')->nullable()->default(null);
            $table->text('highlights')->nullable()->default(null);
            $table->text('inclusion')->nullable()->default(null);
            $table->text('exclusion')->nullable()->default(null);
            $table->text('terms')->nullable()->default(null);
            $table->float('price')->nullable()->default(null);
            $table->tinyInteger('discount_type')->default('0')->comment('0=None,1=Fixed,2=Percent');
            $table->float('discount_price')->default('0');
            $table->integer('discount_value')->default('0');
            $table->string('theme_id')->nullable()->default(null);
            $table->string('status', 10)->nullable()->default(null);
            $table->string('child_allowed', 3)->nullable()->default(null);
            $table->integer('minChildAge')->nullable()->default(null);
            $table->integer('maxChildAge')->nullable()->default(null);
            $table->integer('minAdultAge')->nullable()->default(null);
            $table->integer('minPaxOperating')->nullable()->default(null);
            $table->integer('maxPaxOperating')->nullable()->default(null);
            $table->string('holiday_type', 64)->nullable()->default(null);
            $table->text('operation_day')->nullable()->default(null);
            $table->text('closed_dates')->nullable()->default(null);
            $table->text('closed_reason')->nullable()->default(null);
            $table->string('currency_code', 3)->nullable()->default(null);
            $table->string('reservation_email')->nullable()->default(null);
            $table->string('operated_by', 32)->nullable()->default(null);
            $table->string('operator_no', 16)->nullable()->default(null);
            $table->string('emergency_no', 16)->nullable()->default(null);
            $table->text('thumb_img')->nullable()->default(null);
            $table->text('child_policy')->nullable()->default(null);
            $table->text('cancellation_policy')->nullable()->default(null);
            $table->text('policy')->nullable()->default(null);
            $table->text('photo_policy')->nullable()->default(null);
            $table->text('rate_desc')->nullable()->default(null);
            $table->text('things_to_bring')->nullable()->default(null);
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
