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
        Schema::create('bookmarks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 30)->unique();
            $table->bigInteger('folder')->unsigned()->nullable();
            $table->foreign('folder')->references('id')->on('folders')->onDelete('cascade');
            $table->bigInteger('icon')->unsigned()->nullable();
            $table->foreign('icon')->references('id')->on('icons')->onDelete('cascade');
            $table->bigInteger('tag')->unsigned()->nullable();
            $table->foreign('tag')->references('id')->on('tags')->onDelete('cascade');
            $table->bigInteger('color')->unsigned()->nullable();
            $table->foreign('color')->references('id')->on('colors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookmarks');
    }
};
