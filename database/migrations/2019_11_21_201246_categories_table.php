<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      if (!Schema::hasTable('categories')) {
    Schema::create('categories', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->bigIncrements('id');
      $table->string('name')->unique();
      $table->longText('description');
      $table->integer('Parent');
      $table->integer('Allow_Comment');
      $table->integer('Trust_Status');
      $table->string('Post_Thumbnail');
      $table->timestamps();
    });
  }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() { Schema::dropIfExists('categories'); }
}
