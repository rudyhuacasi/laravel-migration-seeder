<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class trainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i=0; $i <= 50; $i++) { 
            $train= new Train();
    
            $train -> azienda = $faker->company();
            $train -> stazione_di_partenza = $faker->city();
            $train -> stazione_di_arrivo = $faker->city();
            $train -> orario_di_partenza = $faker->time();
            $train -> orario_di_arrivo = $faker->time();
            $train -> codice_treno = $faker->bothify('?????-#####');
            $train -> numero_carrozze = $faker->randomDigitNot(0);
    
            $inOrario = $faker->boolean();
            $train->in_orario = $inOrario;
            $train->cancellato = !$inOrario;
    
            $train->save();
        }
    }
}
