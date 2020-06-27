<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierRoomGalleryImagesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'supplier_room_gallery_images';

    /**
     * Run the migrations.
     * @table supplier_room_gallery_images
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('supplier_room_list_id');
            $table->integer('sup_hotel_id');
            $table->integer('supplier_id');
            $table->string('hotel_code', 250);
            $table->string('room_code', 250);
            $table->text('gallery_img')->nullable()->default(null);
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
