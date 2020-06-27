<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobSupplierHotelFeaturesAmenitiesGroupTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'glob_supplier_hotel_features_amenities_group';

    /**
     * Run the migrations.
     * @table glob_supplier_hotel_features_amenities_group
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id')->default('0');
            $table->string('name', 200);
            $table->timestamp('last_updated')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->date('created_date');
            $table->tinyInteger('status')->default('0')->comment('1=Active, 0=InActive');
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
