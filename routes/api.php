<?php

use Illuminate\Http\Request;

Route::get('posts', 'PagesController@home');
Route::get('blog/{post}', 'PostsController@show');
