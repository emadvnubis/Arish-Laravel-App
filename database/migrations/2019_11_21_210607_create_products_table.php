<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
              $table->engine = 'InnoDB';
              $table->bigIncrements('id');
              $table->string('name');
              $table->string('description')->nullable();
              $table->string('Thumbnail')->nullable();
              $table->integer('Approve')->default(1);
              $table->integer('cat_id')->nullable();
              $table->integer('user_id')->nullable();
              $table->integer('price')->nullable();
              $table->integer('rating')->nullable();
              $table->integer('status')->nullable();
              $table->integer('tags')->nullable();
              $table->timestamps();
            });
          }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
