<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuantityBenefitLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('marketplace__levels', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->integer('benefits_quantity')->default(1);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('marketplace__levels', function (Blueprint $table) {
        $table->dropColumn('benefits_quantity');
      });
    }
}
