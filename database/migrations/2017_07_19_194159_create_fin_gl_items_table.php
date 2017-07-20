<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinGlItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('fin_gl_items', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('asset_group_id')->unsigned(); // za koji ulaz
          $table->integer('fin_doc_id')->unsigned();     // od kog dokumenta potice
          $table->integer('fin_group_id')->unsigned();    //na kom je kontu

          $table->integer('debit')->nullable();
          $table->integer('credit')->nullable();
          $table->date('date');
          $table->text('description')->nullable();
          $table->string('reference_code')->nullable();

          $table->integer('asset_contract_id')->unsigned()->nullable();      //ovo imaju fakture
          $table->integer('fin_ac_report_item_id')->unsigned()->nullable();  //u koji mjesecni izv je usao
          $table->integer('fin_ag_report_item_id')->unsigned()->nullable();  //u koji godisnji izv je usao

          $table->timestamps();
          $table->foreign('asset_group_id')->references('id')->on('asset_groups');
          $table->foreign('fin_doc_id')->references('id')->on('fin_docs');
          $table->foreign('fin_group_id')->references('id')->on('fin_groups');
          $table->foreign('asset_contract_id')->references('id')->on('asset_contracts');
          $table->foreign('fin_ac_report_item_id')->references('id')->on('fin_ac_report_items');
          $table->foreign('fin_ag_report_item_id')->references('id')->on('fin_ag_report_items');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('fin_gl_items');
    }
}
