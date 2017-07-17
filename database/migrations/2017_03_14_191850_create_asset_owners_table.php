<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetownersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_owners', function (Blueprint $table) {
            $table->increments('id');
      			$table->integer('user_group_id')->unsigned();

      			$table->string('name');
      			$table->string('address1')->nullable();
      			$table->string('address2')->nullable();
      			$table->string('email')->nullable();
      			$table->string('telephone')->nullable();
      			$table->string('status'); // Aktivan ili ne
      			$table->string('identification_number')->nullable(); // JMBG
      			$table->text('notes')->nullable();

            $table->timestamps();
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
        Schema::dropIfExists('asset_owners');
    }
}
