<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('fin_docs', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('asset_group_id')->unsigned();
          $table->integer('fin_doc_type_id')->unsigned();

          $table->integer('debit')->nullable();
          $table->integer('credit')->nullable();
          $table->date('date');
          $table->text('description')->nullable();
          $table->string('reference_code')->nullable();

          $table->integer('asset_contract_id')->unsigned()->nullable();
          $table->integer('fin_bank_statement_id')->unsigned()->nullable();

          $table->timestamps();
          $table->foreign('asset_group_id')->references('id')->on('asset_groups');
          $table->foreign('fin_doc_type_id')->references('id')->on('fin_doc_types');
          $table->foreign('asset_contract_id')->references('id')->on('asset_contracts');
          $table->foreign('fin_bank_statement_id')->references('id')->on('fin_bank_statements');      
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('fin_docs');
    }
}
