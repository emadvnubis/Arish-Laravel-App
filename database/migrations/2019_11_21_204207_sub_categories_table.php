<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('sub_cat')) {
            Schema::create('sub_cat', function (Blueprint $table) {
              $table->engine = 'InnoDB';
              $table->bigIncrements('id');
              $table->string('name');
              $table->string('description');
              $table->integer('Allow_Comments');
              $table->integer('cat_id');
            });
          }
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down() { Schema::dropIfExists('sub_cat'); }

}
