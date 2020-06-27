<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillaListTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'villa_list';

    /**
     * Run the migrations.
     * @table villa_list
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('supplier_id')->nullable()->default(null);
            $table->string('module_permission', 12)->nullable()->default(null);
            $table->tinyInteger('availability_type')->nullable()->default(null);
            $table->string('property_code', 200)->nullable()->default(null);
            $table->string('property_name')->nullable()->default(null);
            $table->tinyInteger('property_type')->nullable()->default(null);
            $table->tinyInteger('star_rating')->nullable()->default(null);
            $table->string('city_name', 64)->nullable()->default(null);
            $table->string('country_name', 64)->nullable()->default(null);
            $table->string('cityid', 64)->nullable()->default(null);
            $table->text('short_desc')->nullable()->default(null);
            $table->text('address')->nullable()->default(null);
            $table->string('year_built', 50)->nullable()->default(null);
            $table->string('latitude', 200)->nullable()->default(null);
            $table->string('longitude', 200)->nullable()->default(null);
            $table->text('location')->nullable()->default(null);
            $table->string('currency_type', 100)->nullable()->default(null);
            $table->tinyInteger('price_type')->nullable()->default(null);
            $table->float('price')->nullable()->default(null);
            $table->integer('min_pax')->nullable()->default(null);
            $table->integer('max_pax')->nullable()->default(null);
            $table->integer('bedroom')->nullable()->default(null);
            $table->integer('bathroom')->nullable()->default(null);
            $table->text('reservation_email')->nullable()->default(null);
            $table->text('sales_email')->nullable()->default(null);
            $table->string('phone', 32)->nullable()->default(null);
            $table->string('mobile', 32)->nullable()->default(null);
            $table->string('website', 64)->nullable()->default(null);
            $table->text('facilities')->nullable()->default(null);
            $table->string('check_in', 30)->nullable()->default(null);
            $table->string('check_out', 30)->nullable()->default(null);
            $table->text('thumb_img')->nullable()->default(null);
            $table->text('meta_title')->nullable()->default(null);
            $table->text('meta_keywords')->nullable()->default(null);
            $table->text('meta_description')->nullable()->default(null);
            $table->text('policy')->nullable()->default(null);
            $table->text('child_policy')->nullable()->default(null);
            $table->text('cancellation_policy')->nullable()->default(null);
            $table->text('terms_and_condition')->nullable()->default(null);
            $table->text('photo_policy')->nullable()->default(null);
            $table->text('rate_desc')->nullable()->default(null);
            $table->text('room_charge_disclosure')->nullable()->default(null);
            $table->text('highlights')->nullable()->default(null);
            $table->text('imp_info')->nullable()->default(null);
            $table->date('created_date')->nullable()->default(null);
            $table->timestamp('last_updated')->nullable()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->tinyInteger('status')->nullable()->default('0');
            $table->tinyInteger('admin_status')->default('1')->comment('0=Inactive,1=Active,2=Blocked');
            $table->double('supplier_tax_percent')->nullable()->default('0');
            $table->tinyInteger('discount_type')->nullable()->default(null);
            $table->integer('discount_value')->default('0');
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
