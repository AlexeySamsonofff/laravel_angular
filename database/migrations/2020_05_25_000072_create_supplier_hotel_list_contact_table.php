<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierHotelListContactTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'supplier_hotel_list_contact';

    /**
     * Run the migrations.
     * @table supplier_hotel_list_contact
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('contact_title', 200);
            $table->string('contact_name', 200);
            $table->string('contact_surname', 200);
            $table->string('contact_department', 200);
            $table->string('contact_role', 200);
            $table->string('contact_telephone', 200);
            $table->string('contact_mobile', 200);
            $table->string('contact_email', 200);
            $table->timestamp('last_updated')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->date('created_date');
            $table->integer('supplier_hotel_list_id');
            $table->integer('supplier_id');
            $table->string('property_code', 200);
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
