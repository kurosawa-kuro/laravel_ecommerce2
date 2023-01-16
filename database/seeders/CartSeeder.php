<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cart::factory()->create([
            'order_id' => 1,
            'product_id' => 1,
            'quantity' => 1,
        ]);
        Cart::factory()->create([
            'order_id' => 1,
            'product_id' => 2,
            'quantity' => 2,
        ]);
        Cart::factory()->create([
            'order_id' => 1,
            'product_id' => 3,
            'quantity' => 2,
        ]);
        Cart::factory()->create([
            'order_id' => 2,
            'product_id' => 1,
            'quantity' => 2,
        ]);
        Cart::factory()->create([
            'order_id' => 3,
            'product_id' => 2,
            'quantity' => 4,
        ]);
    }
}
