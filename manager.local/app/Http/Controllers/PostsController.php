<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostsListResource;
use App\Models\Posts;

class PostsController extends Controller
{
    public function listForBanner() {
        $elements = Posts::query()->orderBy('id', 'desc')->get()->all();
        $result = [];
        $group = [];
        $c = 0;
        foreach ($elements as $key => $item) {
            $group[] = $item;
            $c++;
            if ($c > 1) {
                $result[] = $group;
                $group = [];
            }
        }
        return response()->json(
              PostsListResource::make($result)
        );
    }
}
