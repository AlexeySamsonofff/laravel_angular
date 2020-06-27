<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierHotelImagesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'supplier_hotel_images';

    /**
     * Run the migrations.
     * @table supplier_hotel_images
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_hotel_list_id');
            $table->integer('supplier_id');
            $table->string('hotel_code', 250);
            $table->text('gallery_img')->nullable()->default(null);
            $table->tinyInteger('img_type')->default('1')->comment('1=gallery, 2=food and drink');
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
