<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Alfian',
            'username' => 'alfian',
            'email' => 'alfian@gmail.com',
            'password' => bcrypt('alfian')
        ]);


        Category::create([
            'name' => 'Pengetahuan seputar gempa',
            'image' =>  'image/gempa1.jpg',
            'slug' => 'Pengetahuan-seputar-gempa'
        ]);
        Category::create([
            'name' => 'Pengetahuan tanda-tanda gempa',
            'image' =>  'image/gempa2.jpg',
            'slug' => 'Pengetahuan-tanda-tanda-gempa'
        ]);
        Category::create([
            'name' => 'Pengetahuan cara penyelamatan diri ketika terjadi gempa',
            'image' =>  'image/gempa3.jpg',
            'slug' => 'Pengetahuan-cara-penyelamatan-diri-ketika-terjadi-gempa'
        ]);


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum 1',
        //     'body' => 'Isi Lorem ipsum 1',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum 2',
        //     'body' => 'Isi Lorem ipsum 2',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum 3',
        //     'body' => 'Isi Lorem ipsum 3',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
