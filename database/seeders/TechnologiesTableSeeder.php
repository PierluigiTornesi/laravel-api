<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['php','laravel','javascript','html'];

        foreach ($technologies as $technology) {
            $new_tech = new Technology();
            $new_tech->name = $technology;
            $new_tech->slug = Str::slug($new_tech->name);
            $new_tech->save();
        }
    }
}
