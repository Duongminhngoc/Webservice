<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shipper_id'); 
            $table->integer('shipment_status_id'); 
            $table->integer('invoice_id'); 
            $table->integer('tracking_number'); 
            $table->timestamp('datetime_start')->nullable(); 
            $table->timestamp('datetime_end')->nullable(); 
            $table->string('other_shipment_details');
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
        Schema::dropIfExists('shipments');
    }
}
