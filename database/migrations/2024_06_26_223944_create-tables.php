<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tipo_usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');            
        });

        Schema::create('tipo_servicio', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('url_imagen');            
        });

        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();            
            $table->string('telefono');
            $table->string('url_imagen');
            $table->string('contraseña'); 
            
            $table->unsignedBigInteger('id_tipo_usuario'); 
            //$table->foreign('id-tipo-usuario')->references('id')->on('tipo-usuario')->onDelete('cascade'); 
        });

        Schema::create('negocio', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('direccion');
            $table->string('telefono');
            $table->string('url_imagen');
            
            $table->unsignedBigInteger('id_usuario'); 
            //$table->foreign('id-usuario')->references('id')->on('usuario')->onDelete('cascade'); 
        });

        Schema::create('calificacion', function (Blueprint $table) {
            $table->id();
            $table->integer('valor');
            $table->string('descripcion');
                        
            $table->unsignedBigInteger('id_usuario'); 
            //$table->foreign('id-usuario')->references('id')->on('usuario')->onDelete('cascade'); 

            $table->unsignedBigInteger('id_servicio'); 
            //$table->foreign('id-negocio')->references('id')->on('negocio')->onDelete('cascade'); 
        });

        Schema::create('servicio', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('valor');
            $table->integer('servicios_simultaneos');
            $table->time('hora_entrada');
            $table->time('hora_salida');
            $table->integer('duracion');
            $table->string('url_imagen');                                

            $table->unsignedBigInteger('id_negocio'); 
            //$table->foreign('id-negocio')->references('id')->on('negocio')->onDelete('cascade'); 

            $table->unsignedBigInteger('id_tipo_servicio'); 
            //$table->foreign('id-tipo-servicio')->references('id')->on('tipo-servicio')->onDelete('cascade'); 
        });

        Schema::create('reserva', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha');
            $table->boolean('estado');
                                        

            $table->unsignedBigInteger('id_usuario'); 
            //$table->foreign('id-usuario')->references('id')->on('usuario')->onDelete('cascade'); 

            $table->unsignedBigInteger('id_servicio'); 
            //$table->foreign('id-servicio')->references('id')->on('servicio')->onDelete('cascade'); 
        });


        Schema::table('usuario', function (Blueprint $table) {            
            $table->foreign('id_tipo_usuario')->references('id')->on('tipo_usuario')->onDelete('cascade');            
        });

        Schema::table('negocio', function (Blueprint $table) {            
            $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');
        });

        Schema::table('calificacion', function (Blueprint $table) {                        
            $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');             
            $table->foreign('id_servicio')->references('id')->on('servicio')->onDelete('cascade');           
        });

        Schema::table('servicio', function (Blueprint $table) {                        
            $table->foreign('id_negocio')->references('id')->on('negocio')->onDelete('cascade');             
            $table->foreign('id_tipo_servicio')->references('id')->on('tipo_servicio')->onDelete('cascade');             
        });

        Schema::table('reserva', function (Blueprint $table) {                        
            $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');             
            $table->foreign('id_servicio')->references('id')->on('servicio')->onDelete('cascade');            
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
