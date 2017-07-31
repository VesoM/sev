<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetAnnexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_annexes', function (Blueprint $table) {
            $table->increments('id');
      			$table->integer('asset_contract_id')->unsigned();

            $table->integer('asset_size')->nullable();
            $table->integer('unit_price')->nullable();
      			$table->integer('ownership_percentage');
      			$table->integer('amount');
      			$table->date('start_date'); // Mozda null
      			$table->date('end_date')->nullable();
      			$table->text('notes')->nullable();

            $table->timestamps();
            $table->softdeletes();
      			$table->foreign('asset_contract_id')->references('id')->on('asset_contracts');
			});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_annexes');
    }
}
