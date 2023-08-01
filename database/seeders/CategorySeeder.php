<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $objs = [
            ['Telefonlar', 'Phones', 'Telefon', 'Phone', 1],
            ['Naushniklar', 'Earphones', 'Naushnik', 'Earphone', 1],
        ];
        for ($i = 0; $i < count($objs); $i++) {
            Category::create([
                'name_tm' => $objs[$i][0],
                'name_en' => $objs[$i][1],
                'product_tm' => $objs[$i][2],
                'product_en' => $objs[$i][3],
                'home' => $objs[$i][4],
                'sort_order' => $i + 1,
            ]);
        }
    }
}
