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
        $amount =0;


        foreach ($cart as &$value) {
            $products[] = array(
                "name" => $value['product']['name'],
                "image" => $value['product']['image'],
                "price" => $value['product']['price']
            );

            $amount += $value['product']['price'];
        }

        $displayCart = ["products" => $products, "amount" => $amount];
        dd($displayCart);
        $this->assertTrue(true);
    }
}
