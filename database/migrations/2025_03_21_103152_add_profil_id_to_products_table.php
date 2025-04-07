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
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('profil_id')->nullable();  // Ajout de la colonne profil_id
            $table->foreign('profil_id')->references('id')->on('profils')->onDelete('set null');  // Définition de la clé étrangère
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['profil_id']);
            $table->dropColumn('profil_id');
        });
    }
};