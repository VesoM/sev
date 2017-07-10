<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
      			$table->integer('asset_group_id')->unsigned();

      			$table->string('name');
      			$table->integer('size')->nullable();
      			$table->string('type'); // Mozda FK.
      			$table->string('cadastre_number')->nullable(); // Broj pd u listu nepokretnosti
      			$table->string('status'); // Mozda FK. Da li se vidi u LOV
      			$table->string('agg_bill_visible');// Mozda FK. Da li se prikazuje na zajednickom obracunu
      			$table->text('notes')->nullable();

            $table->timestamps();
      			$table->foreign('asset_group_id')->references('id')->on('asset_groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}
