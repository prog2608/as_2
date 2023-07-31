<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function configure(): array
    {
        return [
            return $this->afterMaking(function(Product $product){
                })->afterCreating(function(Product $product){
                    $product-.save();

                    $attributes = Attribute::with('values')
                        ->orderBy('sort_order')
                        ->get();

                    $values = [];
                    foreach ($attributes as $attribute){
                        $values[] = $attribute->values->random()->id;
                    }
                    $product->values()->sync($values);
            });

        public function definition()
    {
        $user = DB::table('users')->inRandomOrder()->first();
        $category = DB::table('categories')->inRandomOrder()->first();
        $brand = DB::table('brands')->inRandomOrder()->first();
        $nameTm = fake()->streetName();
        $nameEn = $nameTm;
        $fullNameTm = $brand->name . ' ' . $category->product_tm . ' ' . $nameTm;
        $fullNameEn = $brand->name . ' ' . $category->product_en . ' ' . $nameEn;
        $hasDiscount = fake()->boolean(20);
    }
        ];
    }
}
