<?php

use App\Models\Blog;
use App\Models\Produk;
use App\Models\recipes;
use App\Models\Recipes as ModelsRecipes;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/contacts', function () {
    return view('contacts', [
        'pageTitle'=>'Terafood-Contacts'
    ]);
});

Route::get('/aboutus', function () {
    return view('aboutus', [
        'pageTitle'=>'Terafood-About Us'
    ]);
});

Route::get('/recipe', function () {
    return view('recipe',[
        'recipes' => Recipes::index()
    ]);
});

Route::get('/recipedetail/{id}', function ($id) {
    return view('recipedetail',[
        'recipe' => Recipes::recipe($id),
    ]);
});

Route::get('/', function () {
    return view('home',[
        'products' => Produk::index()
    ]);
});

Route::get('/home', function () {
    return view('home',[
        'products' => Produk::index()
    ]);
});

Route::get('/products', function () {
    return view('products',[
        'products' => Produk::index()
    ]);
});

Route::get('/blogs', function () {
    return view('blogs',[
        'blogs' => Blog::index()
    ]);
});



Route::get('/productdetail/{id}', function ($id) {
    return view('productdetail',[
        'product' => Produk::detail($id),
        'products' => Produk::index()
    ]);
});

Route::get('/blogarticle/{id}', function ($id) {
    return view('blogarticle',[
        'blog' => Blog::article($id),
        'blogs' => Blog::index()
    ]);
});