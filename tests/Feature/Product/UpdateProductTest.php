<?php

namespace Tests\Feature\Product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Product;
use Tests\TestCase;

class UpdateProductTest extends TestCase
{
    /**
     * A basic feature test product can be update.
     */
    public function test_product_can_be_update()
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
        $response = $this->put("products/{$product->id}", [
            'name' => 'Test 2',
            'description' => 'Description 2',
            'price' => 20000,
            'stock' => 100,
        ]);

        //Assert
        $response->assertStatus(302);
    }
}
