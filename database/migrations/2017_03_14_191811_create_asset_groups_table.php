<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_groups', function (Blueprint $table) {
            $table->increments('id');
      			$table->integer('user_group_id')->unsigned();

      			$table->string('name'); // Ponudi autocomplete na osnovu address i number
      			$table->string('address');
      			$table->string('number');
      			$table->string('municipality');
      			$table->string('bank_account')->nullable();
      			$table->string('tax_number')->nullable();

      			$table->string('superintendent')->nullable();
      			$table->string('contact_tel')->nullable();
      			$table->string('contact_mail')->nullable();
      			$table->string('contact_address')->nullable();

      			$table->date('founding_date')->nullable();
      			$table->date('first_bill_date')->nullable()->comment('Datum obracuna je posljednji dan u mjesecu obracuna');

            $table->timestamps();
            $table->softdeletes();
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
        Schema::dropIfExists('asset_groups');
    }
}
