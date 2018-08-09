<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePictureManufacturesTable extends Migration
{
 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up()
 {
  Schema::create('picture_manufactures', function (Blueprint $table) {
   $table->integer('manufacture_id')->unsigned()->index();
   $table->integer('picture_id')->unsigned()->index()->nullable();
   $table->integer('category_id')->unsigned()->index()->nullable();
   $table->foreign('manufacture_id')->references('id')->on('manufactures')->onDelete('cascade');
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
  Schema::dropIfExists('picture_manufactures');
 }
}
