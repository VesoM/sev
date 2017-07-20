<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinAcReportItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('fin_ac_report_items', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('fin_ac_report_id')->unsigned();
          $table->integer('asset_contract_id')->unsigned();

          $table->integer('previous_debt');
          $table->integer('payments')->nullable();
          $table->integer('current_debt');

          $table->timestamps();
          $table->foreign('fin_ac_report_id')->references('id')->on('fin_ac_reports');
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
      Schema::dropIfExists('fin_ac_report_items');
    }
}
