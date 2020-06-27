<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionOtaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'promotion_ota';

    /**
     * Run the migrations.
     * @table promotion_ota
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id');
            $table->string('promo_type', 32)->nullable()->default(null);
            $table->string('promo_name', 128)->nullable()->default(null);
            $table->string('hotel_code')->nullable()->default(null);
            $table->text('room_code')->nullable()->default(null);
            $table->string('promo_audience', 64)->nullable()->default(null);
            $table->integer('minimum_night')->nullable()->default('1');
            $table->text('booking_period')->nullable()->default(null);
            $table->float('before_checkin_days')->nullable()->default('0');
            $table->float('before_checkin_hours')->nullable()->default('0');
            $table->text('stay_period')->nullable()->default(null);
            $table->string('applicable_days', 64)->nullable()->default(null);
            $table->text('applicable_day')->nullable()->default(null);
            $table->float('discount')->nullable()->default('0');
            $table->string('sale_code', 200)->nullable()->default(null);
            $table->text('block_date')->nullable()->default(null);
            $table->tinyInteger('status')->nullable()->default(null);
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
