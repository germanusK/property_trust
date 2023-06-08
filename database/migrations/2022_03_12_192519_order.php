<?php

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // this model is going to be applicable for a search without the 'description' and 'placed_by' fields
        Schema::create("messages", function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->id();
            $table->string('type');
            $table->integer('quantity');
            $table->text("description")->nullable(); //concise description of expected item
            $table->enum("status", ["pending", "acheived", 'cancelled'])->default("pending");//if order is pending, achieved or cancelled
            $table->unsignedBigInteger('asset_id')->nullable();
            $table->unsignedBigInteger("customer_id"); //the id of the customer placing the order.
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
        //
        Schema::dropIfExists("order");
    }
}
