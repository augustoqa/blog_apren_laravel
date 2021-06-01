<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function store(Post $post)
    {
        return 'procesando imagen...';
    }
}
