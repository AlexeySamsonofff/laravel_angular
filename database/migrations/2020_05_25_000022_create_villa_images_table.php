<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillaImagesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'villa_images';

    /**
     * Run the migrations.
     * @table villa_images
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('villa_id');
            $table->integer('supplier_id');
            $table->string('property_code', 250);
            $table->text('gallery_img')->nullable()->default(null);
            $table->tinyInteger('img_type')->default('1')->comment('1=gallery, 2=thumb');
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
