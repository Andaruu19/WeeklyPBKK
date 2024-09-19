<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function  all() {
        return [
            [
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Farel Hanif Andaru',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nam esse molestias voluptatibus, quod laborum itaque dolore optio voluptas excepturi, provident, earum quis consectetur culpa nostrum! Omnis fugiat dolor exercitationem Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus neque exercitationem soluta odio quae tempore accusantium, quasi consequuntur similique sint aspernatur animi tenetur praesentium nemo excepturi commodi quaerat id doloribus?'
            ],
            [
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Farel Hanif Andaru',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nam esse molestias voluptatibus, quod laborum itaque dolore optio voluptas excepturi, provident, earum quis consectetur culpa nostrum! Omnis fugiat dolor exercitationem Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus neque exercitationem soluta odio quae tempore accusantium, quasi consequuntur similique sint aspernatur animi tenetur praesentium nemo excepturi commodi quaerat id doloribus?'
            ] 
            ];
    }
    
    // public static function find($slug) {
    //     return Arr::first(static::all(), function($post) use($slug){
    //         return $post['slug'] == $slug;
    //     });
    // }

    public static function find($slug) {
        return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
    }
}