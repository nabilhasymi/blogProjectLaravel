<?php

use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ["nama" => "Nabil Hasymi", "title" => "Home"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "About Us"]);
});

Route::get('/blog', function () {
    return view('blog', ["title" => "Welcome to our Blog", "posts" => Article::all()]);
});

Route::get("/blog/{articles:slug}", function (Article $articles) {
    return view("detail", [
        "title" => "Article Detail",
        "detail" => $articles
    ]);
});

Route::get("/author/{user}", function (User $user) {
    return view("blog", [
        "title" => "Articles by: " . $user->name,
        "posts" => $user->articles
    ]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact Us"]);
});
