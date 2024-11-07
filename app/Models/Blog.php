<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Blog extends Model{
    
    // public static function find($slug){
    //     $blog = Arr::first(Blog::all(), fn ($blog) => $blog['slug'] == $slug );
    //     if(!$blog){
    //         abort(404);
    //     }
    //     return $blog;
    // }
}

?>