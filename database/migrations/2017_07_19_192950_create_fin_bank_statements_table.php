<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinBankStatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('fin_bank_statements', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('asset_group_id')->unsigned();
        //$table->string('name');
          $table->date('date');
          $table->integer('rownum');
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
      Schema::dropIfExists('fin_bank_statements');
    }
}
