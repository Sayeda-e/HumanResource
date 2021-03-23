<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKarmandjadedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karmandjadeds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('E_name');
            $table->string('lastname');
            $table->string('E_lastname');
            $table->string('Fname');
            $table->string('padarkalan');
            $table->date('tarikhtawalod');
            $table->string('numberTazkira');
            $table->string('safha');
            $table->string('jold');
            $table->string('sokonatAsly');
            $table->string('sokonatFehly');
            $table->string('jensiat');
            $table->string('phone');
            $table->string('email');
            $table->string('halatMadany');
            $table->Integer('mashMaslaky');
            $table->string('mashShakhsy');
            $table->string('codeTashkilaty');
            $table->string('milyat');
            $table->string('sazmanSiasy');
            $table->string('groupeKhoon');
            $table->string('role');
            $table->text('photo');
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
        Schema::dropIfExists('karmandjadeds');
    }
}
