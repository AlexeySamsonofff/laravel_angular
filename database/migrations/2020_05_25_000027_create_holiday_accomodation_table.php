<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidayAccomodationTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'holiday_accomodation';

    /**
     * Run the migrations.
     * @table holiday_accomodation
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id')->nullable()->default(null);
            $table->string('hotel_name', 200)->nullable()->default(null);
            $table->string('accomodation_type', 100)->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->string('hotel_city', 200)->nullable()->default(null);
            $table->string('contact_no', 200)->nullable()->default(null);
            $table->text('address')->nullable()->default(null);
            $table->text('thumb_img')->nullable()->default(null);
            $table->tinyInteger('status')->default('0');
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
