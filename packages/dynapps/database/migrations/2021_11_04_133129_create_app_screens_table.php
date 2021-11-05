<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppScreensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_screens', function (Blueprint $table) {
            $table->id();
            $table->integer('module_id');
            $table->string('name');
            $table->string('title');
            $table->json('params');
            $table->boolean('is_active')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->foreign('module_id')->references('id')->on('app_modules');
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
        Schema::dropIfExists('app_screens');
    }
}
