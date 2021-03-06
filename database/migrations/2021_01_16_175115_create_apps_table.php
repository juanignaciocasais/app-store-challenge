<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->integer('app_id',true);
            $table->string('app_name');
            $table->string('description')->nullable();
            $table->integer('category_id');
            $table->integer('user_id');
            $table->integer('price');
            $table->double('rating')->nullable();
            $table->string('image');
            $table->integer('publish')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apps');
    }
}
