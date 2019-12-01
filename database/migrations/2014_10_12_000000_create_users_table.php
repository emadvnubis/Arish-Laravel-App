<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('Users')) {
         Schema::create('Users', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('Group_ID')->default(1);
            $table->integer('Reg_Status')->default(1);
            $table->integer('Trust_Status')->default(0);
            $table->string('Avatar')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }
  }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down() { Schema::dropIfExists('Users'); }

}
