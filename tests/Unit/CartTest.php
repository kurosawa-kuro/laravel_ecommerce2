<?php

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Database\Seeders\CartSeeder;
use Database\Seeders\OrderSeeder;
use Database\Seeders\ProductSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CartTest extends TestCase
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

        Cart::truncate();
        $this->seed(CartSeeder::class);
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

//        dd(Cart::with('product')->where('order_id',1)->get()->toArray());
        $cart = Cart::with('product')->where('order_id', 1)->get()->toArray();
//        dd($cart);
        $products = [];
        $data1 = array("name" => "product 1", "image" => "https://i.pravatar.cc/300");
        $data2 = array("name" => "product 2", "image" => "https://i.pravatar.cc/300");

        $array1[] = $data1;
        $array1[] = $data2;

        dd($array1);


//        $product = array("name" => "dummy product1");
//        $products = array_merge($product,array("name" => "dummy product2"));
//        dd($products);

        $amount = 100;
        $displayCart = ["products" => [], "amount" => $amount];
        dd($displayCart);
        $this->assertTrue(true);
    }
}
