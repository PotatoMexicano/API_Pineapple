<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsMigration extends Migration
{

    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('license')->unique();
            $table->string('brand');
            $table->string('model');
            $table->enum('type', ['suv','van','sedan','pickup-truck','jeep','hatch','sport','crossover','cupê']);
            $table->string('tags');
            $table->integer('year');
            $table->enum('color',['gray','white','black','red','blue','brown','green','others']);
            $table->integer('doors');
            $table->string('image');
            $table->integer('id_user');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
