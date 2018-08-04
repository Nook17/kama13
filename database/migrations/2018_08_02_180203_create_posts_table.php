<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up()
 {
  Schema::create('posts', function (Blueprint $table) {
   $table->increments('id');
   $table->text('content');
   $table->string('title', 255);
   $table->string('subtitle', 255);
   $table->string('slug', 100);
   $table->string('img', 255)->nullable();
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
  Schema::dropIfExists('posts');
 }
}
