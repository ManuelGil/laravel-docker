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
        Schema::create('files', function (Blueprint $table) {
            $table->id('id_file');
            $table->string('url1')->nullable();
            $table->string('name1')->nullable();
            $table->string('url2')->nullable();
            $table->string('name2')->nullable();
            $table->string('url3')->nullable();
            $table->string('name3')->nullable();
            $table->string('url4')->nullable();
            $table->string('name4')->nullable();
            $table->string('url5')->nullable();
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
        Schema::dropIfExists('files');
    }
};
