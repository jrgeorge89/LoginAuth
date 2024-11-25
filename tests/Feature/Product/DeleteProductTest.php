<?php

namespace Tests\Feature\Product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Product;
use Tests\TestCase;

class DeleteProductTest extends TestCase
{
    /**
     * A basic feature test product can be delete.
     */
    public function test_product_can_be_delete()
    {
        // Arrange
        $createData = [
            'name' => 'Test',
            'description' => 'Description',
            'price' => 10000,
            'stock' => 50,
        ];        
        $product = Product::create($createData);

        // Act
        $response = $this->delete('products/'. $product->id);

        //Assert
        $response->assertStatus(302);
    }

}
