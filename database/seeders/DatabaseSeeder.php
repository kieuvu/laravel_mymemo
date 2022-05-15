<?php

namespace Database\Seeders;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $file = File::get("database/seeders/posts/posts.json");
        $data = json_decode($file, true);

        foreach ($data as $values) {
            foreach ($values as $item) {
                $image = $item['image'];
                $title = $item['title'];
                $status = 0;
                $slug   = Carbon::now()->format('s') . Str::random(10);

                Post::create([
                    "title" => $title,
                    "image_link" => $image,
                    "author" => 'Seeder',
                    "status" => $status,
                    "slug" => $slug,
                ]);
                sleep(1);
            }
        }
    }
}
