<?php

use App\Models\AssetGroup;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AssetCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("asset_categories", function(Blueprint $table){
            $table->engine='InnoDB';
            $table->id();
            $table->unsignedBigInteger("asset_id");
            $table->unsignedBigInteger("category_id");
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
        Schema::dropIfExists("asset_categories");
    }
}
