<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\Cloner\Data;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * A aplicação escuta uma requisição HTTP do tipo POST na URI
 * http://127.0.0.1:8000/api/pizza-maker , converte o JSON enviado
 * no body da requisição em um objeto, itera pelo objeto, soma o
 * valor de cada chave à variável $total, itera novamente pelo
 * objeto, substitui o valor da chave pelo angulo equivalente
 * e retorna o resultao em formato JSON.
 */
Route::post('/pizza-maker', function (Request $request) {
    $bodyContent = json_decode($request->getContent());
    $total = 0;
    foreach ($bodyContent as $value) {
        $total += $value;
    }
    foreach ($bodyContent as $key => $value) {
        $bodyContent->$key = round(($value / $total) * 360, 2);
    }
    return json_encode($bodyContent);
});