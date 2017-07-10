<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPrivsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_privs', function (Blueprint $table) {
            $table->increments('id');

      			$table->integer('user_id')->unsigned();
      			$table->integer('user_group_id')->unsigned();
      			$table->string('privilege'); // Mozda FK
      			$table->string('status'); // Mozda ne treba

            $table->timestamps();
      			$table->foreign('user_id')->references('id')->on('users');
      			$table->foreign('user_group_id')->references('id')->on('user_groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_groups');
    }
}
