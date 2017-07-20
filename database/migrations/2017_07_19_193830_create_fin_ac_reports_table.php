<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinAcReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('fin_ac_reports', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('asset_group_id')->unsigned();

          $table->date('date_from');
          $table->date('date_to');
          $table->text('notes');
          
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
      Schema::dropIfExists('fin_ac_reports');
    }
}
