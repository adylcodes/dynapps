<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppScreenSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_screen_sections', function (Blueprint $table) {
            $table->id();
            $table->integer('app_screen_id');
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->json('params')->nullable();
            $table->boolean('is_active')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->foreign('app_screen_id')->references('id')->on('app_screens');
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
        Schema::dropIfExists('app_screen_sections');
    }
}
