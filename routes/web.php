<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


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
    return view('home');
})->name('home');


// Route::match(['GET', 'POST'], '/users', [UserController::class, 'index']);
// Route::get('/users/{id}', [UserController::class, 'show']) // pub fun show(User $user)
//         ->whereNumber('id');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/ssh', function () {
    return view('/tutorials.ssh');
})->name('ssh');

Route::get('/linux', function () {
    return view('/tutorials.linux');
})->name('linux');

Route::get('/docker', function () {
    return view('/tutorials.docker');
})->name('docker');

Route::get('/symfony', function () {
    return view('/tutorials.symfony');
})->name('symfony');

Route::get('/youtube', function () {
    return view('/tutorials.youtube');
})->name('youtube');

Route::get('/windows', function () {
    return view('/tutorials.windows');
})->name('windows');

Route::get('/english', function () {
    return view('/tutorials.english');
})->name('english');

Route::get('/api', function () {
    return view('/tutorials.api');
})->name('api');

Route::get('/figma', function () {
    return view('/tutorials.figma');
})->name('figma');

Route::get('/html', function () {
    return view('/tutorials.html');
})->name('html');

Route::get('/css', function () {
    return view('/tutorials.css');
})->name('css');

Route::get('/contact/all/{id}', [ContactController::class, 'showOneMessage'])->name('contact-data-one');

Route::get('/contact/all/{id}/update', [ContactController::class, 'updateMessage'])->name('contact-update');

Route::post('/contact/all/{id}/update', [ContactController::class, 'updateMessageSubmit'])->name('contact-update-submit');

Route::get('/contact/all/{id}/delete', [ContactController::class, 'deleteMessage'])->name('contact-delete');

Route::get('/contact/all', [ContactController::class, 'allData'])->name('contact-data');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form');