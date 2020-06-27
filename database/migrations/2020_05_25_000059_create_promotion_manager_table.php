<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionManagerTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'promotion_manager';

    /**
     * Run the migrations.
     * @table promotion_manager
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_type', 50)->comment('1= Hotel,  2= Flight, 3= Car');
            $table->string('promo_name', 150);
            $table->string('promo_code', 150);
            $table->integer('discount')->comment('Fixed');
            $table->string('discount_type', 111);
            $table->double('amount_min')->nullable()->default(null);
            $table->double('amount_max')->nullable()->default(null);
            $table->date('promo_expire')->nullable();
            $table->timestamp('created_datetime')->nullable();
            $table->integer('status')->comment('1= Active, 0= Inactive, 2= Block');
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
