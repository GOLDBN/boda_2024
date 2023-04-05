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
        Schema::create('invitados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('estatus');
            $table->integer('num_invitados_confirm')->nullable();
            $table->integer('num_invitados_perm');
            $table->integer('num_invitados_confirm_n')->nullable();
            $table->integer('num_invitados_perm_n');
            $table->string('mesa')->nullable();
            $table->string('telefono')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
