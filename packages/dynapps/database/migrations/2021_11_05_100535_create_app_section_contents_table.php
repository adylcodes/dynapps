<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppSectionContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_section_contents', function (Blueprint $table) {
            $table->id();
            $table->integer('app_section_id');
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->string('url')->nullable();
            $table->text('content')->nullable();
            $table->json('params')->nullable();
            $table->boolean('is_active')->nullable();
            $table->boolean('is_deleted')->nullable();
            $table->foreign('app_section_id')->references('id')->on('app_screen_sections');
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
        Schema::dropIfExists('app_section_contents');
    }
}
