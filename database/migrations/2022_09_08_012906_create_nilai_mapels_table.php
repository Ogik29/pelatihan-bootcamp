<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_mapels', function (Blueprint $table) {
            $table->id();
            // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            $table->bigInteger('siswa_id')->unsigned();
            $table->foreign('siswa_id')->references('_id')->on('siswa')->cascadeOnUpdate()->cascadeOnDelete();
            // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            $table->bigInteger('mapel_id')->unsigned();
            $table->foreign('mapel_id')->references('_id')->on('mapels')->cascadeOnUpdate()->cascadeOnDelete();
            // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            $table->float('ls_1');
            $table->float('ls_2');
            $table->float('ls_3');
            $table->float('ls_4');
            $table->float('uh_1');
            $table->float('uh_2');
            $table->float('uts');
            $table->float('uas');
            $table->float('rata_rata');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_mapels');
    }
};
