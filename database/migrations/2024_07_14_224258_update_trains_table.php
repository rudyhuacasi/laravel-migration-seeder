<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('azienda', 40);
            $table->string('stazione_di_partenza', 40);
            $table->string('stazione_di_arrivo', 40);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->string('codice_treno', 20)->unique();
            $table->unsignedInteger('numero_carrozze')->unsigned();
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('azienda');
            $table->dropColumn('stazione_di_partenza');
            $table->dropColumn('stazione_di_arrivo');
            $table->dropColumn('orario_di_partenza');
            $table->dropColumn('orario_di_arrivo');
            $table->dropColumn('square_metters');
            $table->dropColumn('codice_treno');
            $table->dropColumn('numero_carrozze');
            $table->dropColumn('in_orario');
            $table->dropColumn('cancellato');
        });
    }
};
