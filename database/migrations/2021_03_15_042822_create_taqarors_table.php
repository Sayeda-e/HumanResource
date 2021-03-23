<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaqarorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taqarors', function (Blueprint $table) {
            $table->id();
            $table->Integer('T_id');
            $table->string('number_hokm');
            $table->string('marjeHokm');
            $table->date('tarikhTaqaror');
            $table->string('enwanBast');
            $table->string('bastChand');
            $table->string('codeBast');
            $table->string('wazifa');
            $table->string('E_wazifa');
            $table->string('edareMarbod');
            $table->string('E_edara');
            $table->foreign('T_id')->references('id')->on('karmandjadeds')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('taqarors');
    }
}
