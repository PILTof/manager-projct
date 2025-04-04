<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public static function list() {
        return Posts::query()->orderBy('id', 'desc')->select(['id', 'title'])->get()->all();
    }
}
