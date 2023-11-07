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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre_producto');
            $table->longText('descripcion_producto');
            $table->string('precio_producto');
            $table->unsignedBigInteger('imagenes')->nullable();
            $table->foreign('imagenes','fk_imagenes_producto')->references('id_image')->on('images')->onDelete('restrict')->onUpdate('restrict');
            $table->BigInteger('contacto_vendedor');
            $table->string('estado_producto');
            $table->string('terminos_condiciones');
            $table->unsignedBigInteger('vendedor');
            $table->foreign('vendedor','fk_vendedor_producto')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('aprobacion')->default(2);
            $table->foreign('aprobacion','fk_aprobacion_producto')->references('id_aprobacion')->on('aprobacion_productos')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('categoria');
            $table->foreign('categoria','fk_categoria_producto')->references('id_categoria')->on('categoria_productos')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('disponibilidad');
            $table->foreign('disponibilidad','fk_disponibilidad_producto')->references('id_disponibilidad')->on('disponibilidad_productos')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('productos');
    }
};
