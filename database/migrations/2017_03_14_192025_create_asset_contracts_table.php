<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_contracts', function (Blueprint $table) {
            $table->increments('id');
      			$table->integer('asset_id')->unsigned();
      			$table->integer('asset_owner_id')->unsigned();

      			$table->text('notes')->nullable();

            $table->timestamps();
            $table->softdeletes();
      			$table->foreign('asset_id')->references('id')->on('assets');
      			$table->foreign('asset_owner_id')->references('id')->on('asset_owners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_contracts');
    }
}
