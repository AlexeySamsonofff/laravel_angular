<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillaSearchResultTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'villa_search_result';

    /**
     * Run the migrations.
     * @table villa_search_result
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('search_id');
            $table->string('session_id', 128)->nullable()->default(null);
            $table->string('uniqueRefNo')->nullable()->default(null);
            $table->string('api', 20)->nullable()->default(null);
            $table->string('city_code', 10)->nullable()->default(null);
            $table->string('city_name')->nullable()->default(null);
            $table->integer('supplier_id')->nullable()->default(null);
            $table->text('villa_allotment_id')->nullable()->default(null);
            $table->text('supplier_rate_info')->nullable()->default(null);
            $table->string('villa_code', 128)->nullable()->default(null);
            $table->string('villa_name')->nullable()->default(null);
            $table->tinyInteger('avail_type')->nullable()->default(null)->comment('1=booking,2=contact');
            $table->tinyInteger('price_type')->nullable()->default(null)->comment('1=per night,2=per week');
            $table->string('villa_capacity', 32)->nullable()->default(null);
            $table->integer('guests')->nullable()->default(null);
            $table->integer('bedrooms')->nullable()->default(null);
            $table->integer('bathrooms')->nullable()->default(null);
            $table->text('villa_address')->nullable()->default(null);
            $table->longText('description')->nullable()->default(null);
            $table->string('star', 1)->nullable()->default(null);
            $table->text('amenities')->nullable()->default(null);
            $table->text('image')->nullable()->default(null);
            $table->text('cancel_policy')->nullable()->default(null);
            $table->text('villa_crs_cancellation_json')->nullable()->default(null);
            $table->integer('duration')->nullable()->default(null);
            $table->double('net_fare')->nullable()->default(null);
            $table->double('org_amt')->nullable()->default(null);
            $table->double('agent_markup')->nullable()->default(null);
            $table->double('total_cost')->nullable()->default(null);
            $table->string('amount_before_tax', 111)->nullable()->default(null);
            $table->string('discount_coupon', 111)->nullable()->default(null);
            $table->string('xml_currency', 62)->nullable()->default(null);
            $table->string('currency', 20)->nullable()->default(null);
            $table->double('currency_val')->nullable()->default(null);
            $table->double('payment_charge')->nullable()->default(null);
            $table->string('promotions')->nullable()->default(null);
            $table->string('tax', 111)->nullable()->default(null);
            $table->string('ROE', 111)->nullable()->default(null);
            $table->double('currency_conv_value')->nullable()->default(null);
            $table->double('discount')->nullable()->default(null);
            $table->float('admin_markup')->nullable()->default(null);
            $table->float('admin_agent_markup')->nullable()->default(null);
            $table->string('status', 32)->nullable()->default(null);
            $table->timestamp('search_datetime')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->text('blocked_dates')->nullable()->default(null);
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
