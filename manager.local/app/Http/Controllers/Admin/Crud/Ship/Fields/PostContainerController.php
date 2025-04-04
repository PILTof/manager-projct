<?php

namespace App\Http\Controllers\Admin\Crud\Ship\Fields;

use App\Http\Controllers\Controller;
use App\Models\PostContainer;

class PostContainerController extends Controller
{
    public function list() {
        return PostContainer::query()->get()->toArray();
    }
}
