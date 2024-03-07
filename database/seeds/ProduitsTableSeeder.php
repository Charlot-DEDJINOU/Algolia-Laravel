<?php

use Illuminate\Database\Seeder;
use App\Models\Produit;
use Faker\Factory as Faker;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            Produit::create([
                'nom' => $faker->sentence(2),
                'description' => $faker->paragraph(3),
                'prix' => $faker->randomFloat(2, 10, 100),
                'quantite' => $faker->numberBetween(1, 50),
            ]);
        }
    }
}
