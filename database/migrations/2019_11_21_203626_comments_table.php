<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    if (!Schema::hasTable('comments')) {
          Schema::create('comments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('comment');
            $table->integer('status');
            $table->integer('post_id');
            $table->integer('user_id');
            $table->timestamps();
          });
        }
          }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down() { Schema::dropIfExists('comments'); }

}
