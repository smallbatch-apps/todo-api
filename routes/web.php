<?php

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

use Illuminate\Http\Request;

header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', function () {
    return ['todos'=>App\Task::all()];
});

Route::get('/todos/{id}', function ($id) {
    return App\Task::find($id);
});

Route::put('/todos/{id}', function ($id, Request $request) {
    $data = $request->all('todo')['todo'];
    $todo = App\Task::find($id);
    $todo->title = $data['title'];
    $todo->checked = $data['checked'];
    $todo->save();
    return ["todo" => $todo];
});

Route::post('/todos', function (Request $request) {
    $data = $request->all('todo')['todo'];
    $todo = App\Task::create($data);
    return ["todo" => $todo];
});