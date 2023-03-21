<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    public function index(){
        $posts = DB::table('posts')->groupBy('title')->having('title', 'like', '%a%')->get();
        return view('posts.index', ['posts' => $posts]);
    }

}
