<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('add_person',[PeopleController::class,'add']);
Route::put('edit_person',[PeopleController::class,'edit']);
Route::delete('delete_person',[PeopleController::class, 'delete']);
Route::get('get_people', [PeopleController::class, 'getPeople']);
Route::get('get_people/{id}', [PeopleController::class, 'getPerson']);