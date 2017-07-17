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
            $table->integer('asset_type_id')->unsigned();

      			$table->string('name');
      			$table->integer('size')->nullable();
      			$table->string('cadastre_number')->nullable(); // Broj pd u listu nepokretnosti
      			$table->string('status'); // Aktivan ili ne
      			$table->string('agg_bill_visible'); // Da li se prikazuje na zajednickom obracunu
      			$table->text('notes')->nullable();

            $table->timestamps();
      			$table->foreign('asset_group_id')->references('id')->on('asset_groups');
            $table->foreign('asset_type_id')->references('id')->on('asset_types');
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
