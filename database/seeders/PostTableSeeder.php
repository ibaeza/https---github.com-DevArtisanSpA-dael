<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $categories = Category::all();

        foreach($categories as $key => $c){
            for($i = 1; $i<=20; $i++){
                Post::create([
                    'title'=>"Post $i $key ",
                    'url_clean'=>"post-$i-$key",
                    'content'=>"Este es el Post $i de la Categoría $c->id",
                    'posted'=>'yes',
                    'category_id'=>$c->id
                ]);
            }
        }
    }
}
