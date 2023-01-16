<?php

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Database\Seeders\OrderSeeder;
use Database\Seeders\ProductSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    // use RefreshDatabase;

    private function testSeeder()
    {
        User::truncate();
        $this->seed(UserSeeder::class);

        Order::truncate();
        $this->seed(OrderSeeder::class);

        Product::truncate();
        $this->seed(ProductSeeder::class);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_create()
    {
        $this->testSeeder();
//        dd(User::get()->toArray());

        dd(Product::get()->toArray());

        $this->assertTrue(true);
    }
}
