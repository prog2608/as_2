<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $objs = [
            'IPHONE',
            'HUAWEI',
            'REDMI',
            'MI',
            'NOKIA',
            'SAMSUNG',
            'BLACKBERRY',
            'Airpods'
        ];
        foreach ($objs as $obj) {
            Brand::create([
                'name' => $obj,
            ]);
        }
    }
}
