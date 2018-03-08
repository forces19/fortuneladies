<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name' => str_random(10),
            'price' => str_random(10),
            'image' => str_random(10),
        ]);
    }
}
