<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasta;

class PastaController extends Controller
{
    public function index() {

      $lunghe = Pasta::where("tipo", "lunga")->get();
      $corte = Pasta::where("tipo", "corta")->get();
      $cortissime = Pasta::where("tipo", "cortissima")->get();

      $types = [
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
      ];


      return view("home", compact("types"));
    }

    public function show($slug) {
      $product = Pasta::where("slug", $slug)->first();


      return view("products", compact("product"));
    }
}
