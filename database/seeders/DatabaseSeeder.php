<?php

namespace Database\Seeders;

use App\Models\Entreprise;
use App\Models\TypeCommodite;
use App\Models\TypeEntreprise;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $sqls = [
            'users',
            'type_entreprises',
            'type_commodites',
            'mrcs',
            'entreprises',
            'emplacements',
            'evenements',
            'hebergements',
            'forfaits',
        ];
        foreach ($sqls as $sql) {

            DB::Unprepared(file_get_contents(database_path("seeders/$sql.sql")));
            $entreprises = Entreprise::all();
            $commodites = TypeCommodite::all()->pluck('id')->toArray();
            $types = TypeEntreprise::all()->pluck('id')->toArray();
            $entreprises->each(function ($entreprise) use ($commodites) {
                shuffle($commodites);
                $c2 = array_slice($commodites, 0, rand(3, 8));
                $entreprise->commodites()->sync($c2);
            });
            $entreprises->each(function ($entreprise) use ($types) {
                shuffle($types);
                $t2 = array_slice($types, 0, rand(3, 5));
                $entreprise->types()->sync($t2);
            });
        }
        // \App\Models\Mrc::factory(6)->create();
        // // \App\Models\Entreprise::factory(85)->create();
        // \App\Models\Emplacement::factory(46)->create();
        // \App\Models\Evenement::factory(46)->create();
        // \App\Models\Hebergement::factory(3)->create();
        // \App\Models\Forfait::factory(19)->create();
        // \App\Models\User::factory(5)->create();
        // \App\Models\TypeCommodite::factory(90)->create();
        // \App\Models\TypeEntreprise::factory(35)->create();
    }
}
