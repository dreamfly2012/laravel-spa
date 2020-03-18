<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Faker\Generator as Faker;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(App\Item::class, 50)->create();
        //
        // factory('App\Item::class',50)->create()->each(function($user){
        //     $user->name = Str::random(10);
        //     $user->content = Str::random(500);
        // });
       
        // DB::table('items')->insert([
        //     'name' => Str::random(10),
        //     'content'=>Str::random(500)
        // ]);
    }
}
