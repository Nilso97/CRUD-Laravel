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

use App\Models\Product;
use Illuminate\Http\Request;

Route::get('/cadastrar-produto', function () {
    return view('product-register');
});

Route::post('/cadastrar-produto', function (Request $request) {

    Product::create([
        'product_name' => $request->name,
        'product_description' => $request->description,
        'product_price' => $request->price,
        'qt_stock' => $request->stock
    ]);

    echo "Produto cadastrado com sucesso!";
});

Route::get('/buscar-produto/{id}', function ($id) {

    $product = Product::find($id);
    return view('product', ['product' => $product]);
});

Route::get('/editar-produto/{id}', function ($id) {

    $product = Product::find($id);
    return view('product-edit', ['product' => $product]);
});

Route::post('/editar-produto/{id}', function (Request $request, $id) {

    $product = Product::find($id);
    $product->update([
        'product_name' => $request->name,
        'product_description' => $request->description,
        'product_price' => $request->price,
        'qt_stock' => $request->stock
    ]);

    echo "Produto editado com sucesso!";
});

Route::get('/excluir-produto/{id}', function ($id) {

    $product = Product::find($id);
    $product->delete();

    echo "Produto excluído com sucesso!";
});
