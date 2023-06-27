<?php

use App\Models\AssetCategory;
use App\Models\AssetGrade;
use App\Models\AssetGroup;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\Isset_;
use SebastianBergmann\Environment\Console;

class AssetImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        

        //
        Schema::create("asset_images", function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->id();
            $table->unsignedBigInteger("asset_id");
            $table->string("url");
            $table->text("description")->nullable();
            $table->enum('type', ['property', 'project', 'service'])->default('property');
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
        Schema::dropIfExists("property");
    }
}
