<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelSearchResultoldTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'hotel_search_resultold';

    /**
     * Run the migrations.
     * @table hotel_search_resultold
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('search_id');
            $table->string('session_id', 128);
            $table->string('uniqueRefNo')->nullable()->default(null);
            $table->string('api', 20);
            $table->string('city_code', 10)->nullable()->default(null);
            $table->string('city_name')->nullable()->default(null);
            $table->string('hotel_code', 32);
            $table->integer('unique_cityid')->nullable()->default(null);
            $table->string('hotel_property_id')->nullable()->default(null);
            $table->text('room_code');
            $table->text('room_type')->nullable()->default(null);
            $table->string('room_type_id', 128);
            $table->string('room_name', 200)->nullable()->default(null);
            $table->text('room_description')->nullable()->default(null);
            $table->text('image')->nullable()->default(null);
            $table->text('room_details_info')->nullable()->default(null);
            $table->string('hotel_supplier_id')->nullable()->default(null);
            $table->integer('room_capacity')->nullable()->default(null);
            $table->text('rate_plan_code')->nullable()->default(null);
            $table->text('room_image')->nullable()->default(null);
            $table->text('hotel_address')->nullable()->default(null);
            $table->string('amount_before_tax', 111)->nullable()->default(null);
            $table->string('tax', 111)->nullable()->default(null);
            $table->string('discount_coupon', 111)->nullable()->default(null);
            $table->string('amount_to_send', 111)->nullable()->default(null);
            $table->string('tax_to_send', 111)->nullable()->default(null);
            $table->string('hotel_type', 111)->nullable()->default(null);
            $table->longText('description')->nullable()->default(null);
            $table->string('star', 1)->nullable()->default(null);
            $table->text('amenities')->nullable()->default(null);
            $table->string('room_amenities')->nullable()->default(null);
            $table->double('net_fare')->nullable()->default(null);
            $table->double('total_cost');
            $table->double('currency_conv_value')->nullable()->default(null);
            $table->string('ROE', 111)->nullable()->default(null);
            $table->string('status', 32);
            $table->integer('adult');
            $table->integer('child');
            $table->integer('infant')->nullable()->default(null);
            $table->string('child_age', 25)->nullable()->default(null);
            $table->string('hotel_name')->nullable()->default(null);
            $table->string('promotions')->nullable()->default(null);
            $table->text('remarks')->nullable()->default(null);
            $table->string('room_count', 10);
            $table->double('markup');
            $table->double('agent_markup')->nullable()->default(null);
            $table->double('sub_agent_markup')->nullable()->default(null);
            $table->double('org_amt');
            $table->string('xml_currency', 62);
            $table->string('currency', 20)->nullable()->default(null);
            $table->double('currency_val');
            $table->double('payment_charge');
            $table->text('cancel_policy')->nullable()->default(null);
            $table->timestamp('search_datetime')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->string('curr_date_time', 111)->nullable()->default(null);
            $table->double('discount')->nullable()->default(null);
            $table->string('share_bed', 10)->nullable()->default(null);
            $table->text('per_room_cost')->nullable()->default(null);
            $table->float('admin_markup')->nullable()->default(null);
            $table->float('admin_agent_markup')->nullable()->default(null);
            $table->string('mealType')->nullable()->default(null);
            $table->string('mealName')->nullable()->default(null);
            $table->string('meallabelid', 200)->nullable()->default(null);
            $table->text('meallabeltext')->nullable()->default(null);
            $table->integer('nights');
            $table->string('room_runno', 150);
            $table->string('extrabeds', 50)->nullable()->default(null);
            $table->text('fitruums_notes')->nullable()->default(null);
            $table->string('fitruums_isSuperDeal', 20)->nullable()->default(null);
            $table->string('fitruums_isBestBuy', 20)->nullable()->default(null);
            $table->string('fitruums_paymentMethod_id', 20)->nullable()->default(null);
            $table->text('fitruums_payment_property')->nullable()->default(null);
            $table->string('resort_id', 30)->nullable()->default(null);
            $table->string('resort_name', 200)->nullable()->default(null);
            $table->string('transfer', 20)->nullable()->default(null);
            $table->text('fitruumsPreBookCode')->nullable()->default(null);
            $table->text('trustYouID')->nullable()->default(null);
            $table->string('priceChange', 200)->nullable()->default(null);
            $table->integer('wish_list')->nullable()->default('0');
            $table->integer('compare_list')->nullable()->default('0');
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
