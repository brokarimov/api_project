<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        for ($i = 1; $i <= 10; $i++) {
            Category::create([
                'name' => [
                    'uz' => 'Bolim - ' . $i,
                    'ru' => 'Категория - ' . $i,
                    'en' => 'Category - ' . $i,
                ],
            ]);
        }
        $categoryIds = Category::pluck('id')->toArray(); 

        for ($i = 1; $i <= 100; $i++) {
            News::create([
                'category_id' => $categoryIds[array_rand($categoryIds)], 
                'title' => [
                    'uz' => 'Yangilik - ' . $i,
                    'ru' => 'Новость - ' . $i,
                    'en' => 'New - ' . $i,
                ],
                'description' => [
                    'uz' => 'Yangilikning tavsifi - ' . $i,
                    'ru' => 'Описание новости - ' . $i,
                    'en' => 'Description of news - ' . $i,
                ],
            ]);
        }
    }
}
