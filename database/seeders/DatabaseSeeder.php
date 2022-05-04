<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
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
        $user= User::factory()->create([
                'name'=> "ShamsMi"
            ]);
        
        Post::factory(5)->create([
            'user_id'=> $user->id
        ]);
        //trunacte for Duplicate data
        // User::truncate();
        // Category::truncate();
        // Post::truncate();


        // $user = User::factory()->create();
        
        // $personal = Category::create(
        //     ['name' => 'personal',
        //      'slug'=> 'sulg']
        // );

        // $work = Category::create(
        //     ['name' => 'Work',
        //      'slug'=> 'work']
        // );
        // $hobby = Category::create(
        //     ['name' => 'Hobby',
        //      'slug'=> 'hobby']
        // );

        // Post::create(
        //     ['user_id' => $user->id,
        //      'category_id' => $personal->id,
        //      'title'=> 'Fisrt post',
        //      'slug'=> 'this is aslug for the personal post',
        //      'body'=> 'personallllllllllllllllllllllllllllllll']
        // );
        //  Post::create(
        //     ['user_id' => $user->id,
        //      'category_id' => $work->id,
        //      'title'=> 'Second post',
        //      'slug'=> 'this is aslug for the work post',
        //      'body'=> 'wooooooooooooooooooooooooooooooooork']
        // );
        // Post::create(
        //     ['user_id' => $user->id,
        //      'category_id' => $hobby->id,
        //      'title'=> 'THird post',
        //      'slug'=> 'this is aslug for the hobby post',
        //      'body'=> 'hobbyyyyyyyyyyyyyyyyyyyyyyyyyyyyy']
        // );
    }
}
