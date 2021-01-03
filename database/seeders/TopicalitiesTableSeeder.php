<?php

namespace Database\Seeders;

use App\Models\Topicality;
use Illuminate\Database\Seeder;

class TopicalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        //on laravel 7
        //factory(Topicality::class, 30)->create();
        */
        Topicality::factory()->count(30)->create();
    }
}
