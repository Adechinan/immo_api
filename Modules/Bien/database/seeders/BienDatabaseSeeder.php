<?php

namespace Modules\Bien\Database\Seeders;

use Modules\Bien\Models\Bien;
use Illuminate\Database\Seeder;
use Modules\BienEnVente\Models\BienEnVente;
use Modules\BienEnLocation\Models\BienEnLocation;

class BienDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bien::factory(10)->create([
            'user_id' => 1
        ])->each(function($bien){
            $bien->location()->create(
                BienEnLocation::factory()->make()->toArray()
            );
        });

        Bien::factory(10)->create([
            'user_id' => 1
        ])->each(function($bien){
            $bien->vente()->create(
                BienEnVente::factory()->make()->toArray()
            );
        });
    }
}
