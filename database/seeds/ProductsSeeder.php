<?php

use Illuminate\Database\Seeder;
use App\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'name' => 'Espresso',
            'description' => 'A full-flavored, concentrated form of coffee.',
            'price' => 2.50,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Products::create([
            'name' => 'Cappuccino',
            'description' => 'A coffee-based drink prepared with espresso, hot milk, and steamed milk foam.',
            'price' => 3.00,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Products::create([
            'name' => 'Latte',
            'description' => 'A coffee drink made with espresso and steamed milk.',
            'price' => 3.50,
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Products::create([
            'name' => 'Velvet Mocha',
            'description' => 'Rich espresso blended with velvety chocolate and topped with whipped cream.',
            'price' => 5.49,
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Products::create([
            'name' => 'Matcha Bliss',
            'description' => 'Smooth and creamy matcha green tea latte, lightly sweetened for a perfect balance.',
            'price' => 4.99,
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Products::create([
            'name' => 'Caramel Delight',
            'description' => 'Espresso with steamed milk and a swirl of caramel sauce, finished with whipped cream.',
            'price' => 4.79,
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Products::create([
            'name' => 'Tropical Coconut',
            'description' => 'Refreshing blend of coconut milk and espresso, topped with coconut flakes.',
            'price' => 5.29,
            'category_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Products::create([
            'name' => 'Spiced Chai Latte',
            'description' => 'Aromatic blend of black tea, spices, and steamed milk, lightly sweetened.',
            'price' => 4.59,
            'category_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Products::create([
            'name' => 'Hazelnut Euphoria',
            'description' => 'Smooth espresso infused with hazelnut syrup and topped with frothy milk.',
            'price' => 5.19,
            'category_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Products::create([
            'name' => 'Strawberry Fields',
            'description' => 'Fresh strawberry puree blended with milk and a shot of espresso.',
            'price' => 4.99,
            'category_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Products::create([
            'name' => 'Vanilla Dream',
            'description' => 'Espresso combined with steamed milk and a hint of vanilla syrup.',
            'price' => 4.79,
            'category_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Products::create([
            'name' => 'Iced Caramel Macchiato',
            'description' => 'Cold espresso poured over ice with creamy milk and caramel drizzle.',
            'price' => 5.49,
            'category_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Products::create([
            'name' => 'Honey Lavender Latte',
            'description' => 'Aromatic lavender syrup blended with espresso and steamed milk, sweetened with honey.',
            'price' => 5.29,
            'category_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
