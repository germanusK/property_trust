<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('featured_image'); 
            $table->string('caption')->nullable(); 
            $table->text('description')->nullable(); 
            $table->date('date');
            $table->time('start_time')->nullable(); 
            $table->time('stop_time')->nullable(); 
            $table->string('town')->nullable();
            $table->string('address')->nullable();
            $table->json('links')->nullable();
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
        Schema::dropIfExists('events');
    }
}
