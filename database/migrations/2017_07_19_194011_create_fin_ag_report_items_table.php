<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinAgReportItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('fin_ag_report_items', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('fin_ag_report_id')->unsigned();
          $table->integer('fin_group_id')->unsigned();

          $table->integer('debit')->nullable();
          $table->integer('credit')->nullable();

          $table->timestamps();
          $table->foreign('fin_ag_report_id')->references('id')->on('fin_ag_reports');
          $table->foreign('fin_group_id')->references('id')->on('fin_groups');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('fin_ag_report_items');
    }
}
