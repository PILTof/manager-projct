<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use CrudTrait;
    /** @use HasFactory<\Database\Factories\BannerFactory> */
    use HasFactory;
    protected $fillable = [
        'post'
    ];
}
