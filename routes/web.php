<?php

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

Route::get('/', function () {

  $data = config("db-paste");

  $lunghe = [];
  $corte = [];
  $cortissime = [];

  foreach ($data as $index => $pasta) {
    $pasta["id"] = $index;

    if($pasta["tipo"] == "lunga") {
      $lunghe[] = $pasta;
    } elseif($pasta["tipo"] == "corta") {
      $corte[] = $pasta;
    } elseif($pasta["tipo"] == "cortissima") {
      $cortissime[] = $pasta;
    }
  }

  return view('home', [
    "types" => [
      [
        "title" => "lunghe",
        "type" => $lunghe
      ],
      [
        "title" => "corte",
        "type" => $corte
      ],
      [
        "title" => "cortissime",
        "type" => $cortissime
      ],
    ]
  ]);
})->name("home");

Route::get('/products/{id}', function ($id) {

  $data = config("db-paste");

  return view("products", [
    "product" => $data[$id],
    "id" => $id,
    "last_product" => count($data)-1
  ]);
})->name("products");

Route::get('/news', function () {
  return view("news");
})->name("news");
