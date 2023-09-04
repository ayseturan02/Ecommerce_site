<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("image")->nullable();
            $table->string("thumbnail")->nullable();
            $table->string("slug");
            $table->string("content")->nullable();
            $table->integer("cat_ust")->nullable();
            $table->enum("status",["0","1"])->default("1");
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
        Schema::dropIfExists('categories');
    }
};
