<?php

namespace Tests\Feature\Product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Product;
use Tests\TestCase;

class CreateProductTest extends TestCase
{
    /**
     * A basic feature test product can be created.
     */
    public function test_product_can_be_created(): void
    {
        $createData = [
            'name' => 'Test',
            'description' => 'Description',
            'price' => 10000,
            'stock' => 50,
        ];        
        Product::create($createData);

        $this->assertDatabaseHas('products', $createData);
    }
}
