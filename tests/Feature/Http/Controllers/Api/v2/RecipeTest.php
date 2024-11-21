<?php

namespace Tests\Feature\Http\Controllers\v2;

use Illuminate\Foundation\Testing\RefreshDatabase;

use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

use App\Models\Recipe;
use App\Models\Category;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
class RecipeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_index(): void
    {
        Sanctum::actingAs(User::factory()->create());
        Category::factory()->create();
        $recipes = Recipe::factory(5)->create();
        $response = $this->getJson('/api/v2/recipes');
        $response->assertStatus(Response::HTTP_OK)
               ->assertJsonCount(5, 'data')
               ->assertJsonStructure([
                        'data'  => [],
                        'links' => [],
                        'meta'  => [],
                ]);
    }
}
