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

class Assets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        

        //
        Schema::create("assets", function(Blueprint $table){
            $table->engine = "InnoDB";
            $table->id();
            $table->string("name");
            $table->integer("quantity");
            $table->string("price");//price per item.
            $table->string("address")->nullable();//price per item.
            $table->string("description")->nullable(); //concise description of the item e.g house properties and facilities.
            $table->timestamp("created_at")->useCurrent();//time stamp on which the asset was uplaoded
            $table->timestamp("updated_at")->useCurrent();
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
