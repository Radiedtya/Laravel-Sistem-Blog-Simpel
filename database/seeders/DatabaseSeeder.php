<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

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

        // $this->call([UserSeeder::class, CategorySeeder::class,]);

        // Post::factory(200)->recycle([
        //     User::all(),
        //     Category::all(),
        // ])->create();

        // 1. Jalankan Seeder dasar dulu (User & Category)
        $this->call([
            UserSeeder::class, 
            CategorySeeder::class,
        ]);

        // 2. Buat Post dan simpan ke variabel
        // Kita recycle User dan Category yang sudah di-seed tadi
        $posts = Post::factory(200)->recycle([
            User::all(),
            Category::all(),
        ])->create();

        // 3. Baru buat Comment-nya!
        // Kita recycle User (sebagai penulis komen) dan $posts (post mana yang dikomen)
        Comment::factory(100)->recycle([
            User::all(),
            $posts // Menggunakan hasil create post tadi
        ])->create();
    }
}
