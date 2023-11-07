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
        Schema::create('images', function (Blueprint $table) {
            $table->id('id_image');
            $table->string('url1')->nullable();
            $table->string('url2')->nullable();
            $table->string('url3')->nullable();
            $table->string('url4')->nullable();
            $table->string('url5')->nullable();
            $table->string('url6')->nullable();
            $table->string('url7')->nullable();
            $table->string('url8')->nullable();
            $table->string('url9')->nullable();
            $table->string('url10')->nullable();
            $table->string('url11')->nullable();
            $table->string('url12')->nullable();
            $table->string('url13')->nullable();
            $table->string('url14')->nullable();
            $table->string('url15')->nullable();
            $table->string('url16')->nullable();
            $table->string('url17')->nullable();
            $table->string('url18')->nullable();
            $table->string('url19')->nullable();
            $table->string('url20')->nullable();
            $table->string('url21')->nullable();
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
        Schema::dropIfExists('images');
    }
};
