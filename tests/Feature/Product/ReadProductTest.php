<?php

namespace Tests\Feature\Product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Product;
use Tests\TestCase;

class ReadProductTest extends TestCase
{
    /**
     * A basic feature test user can read all products.
     */
    public function test_user_can_read_all_products(): void
    {        
        $response = $this->get('/products');
        $response->assertStatus(302);
    }


    /**
     * A basic feature test user can_read single product.
     */
    public function test_user_can_read_single_product(): void
    {
        // Arrange
        $createData = [
            'name' => 'Test',
            'description' => 'Description',
            'price' => 10000,
            'stock' => 50,
        ];        
        $product = Product::create($createData);

        //Act
        $response = $this->get("products/{$product->id}");

        //Assert
        $response->assertStatus(302);
    }
}
