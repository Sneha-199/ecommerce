<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::create([
            'category'=>'Television'
          ]);

          \App\Models\Category::create([
              'category'=>'Headphone'
            ]);

          \App\Models\Category::create([
              'category'=>'Mobile'
            ]);
    }
}
