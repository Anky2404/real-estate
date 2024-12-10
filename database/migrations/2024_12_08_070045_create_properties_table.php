<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id(); 
            $table->string('property_name'); 
            $table->string('sqft'); 
            $table->string('image'); 
            $table->enum('client_demand', ['For Rent!', 'For Sale!']); 
            $table->decimal('rent', 10, 2); 
            $table->string('location'); 
            $table->text('description')->nullable(); 
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
        Schema::dropIfExists('properties');
    }
};