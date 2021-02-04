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
  $data = config("pasta");


  $lunghe=[];
  $corte=[];
  $cortissime=[];

  foreach ($data as $key => $pasta) {
    $pasta["id"]=$key;
    if($pasta["tipo"]=="lunga"){
      $lunghe[]=$pasta;
    } elseif ($pasta["tipo"]=="corta") {
      $corte[]=$pasta;
    } elseif ($pasta["tipo"]=="cortissima") {
      $cortissime[]=$pasta;
    }
  }

  // dd($lunghe,$corte, $cortissime);

  return view('home',[
    "lunghe"=> $lunghe,
    "corte"=> $corte,
    "cortissime"=>$cortissime
  ]);
})->name("home");

Route::get('/product/{id}', function ($id) {

  $data = config("pasta");
  
  return view('product', [
    'product' => $data[$id]
  ]);
})->name('product');

Route::get('/news', function () {
  return view("news");
})->name("news");
