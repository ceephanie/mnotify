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
    return view('welcome');
});


// Route::get('create', 'create-contact')->name('dashboard');

// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class,'showdata']);
// // Route::get('/student', 'ContactController@index')->name('home');
// Route::get('/contact', [App\Http\Controllers\ContactController::class,'index']);
Route::view('create-contact','contacts.create');
Route::get ('/group', [App\Http\Controllers\GroupController::class,'index']);
Route::view('create-group','groups.create');
Route::get ('/message', [App\Http\Controllers\MessageController::class,'index']);
// Route::get ('/contacts', [App\Http\Controllers\ContactController::class,'message']);
// Route::get ('/campaing', [App\Http\Controllers\CampaingController::class,'getData']);
// Route::post ('/message', [App\Http\Controllers\MessageController::class,'index']);

// Route::post ('/contact', [App\Http\Controllers\ContactController::class,'index']);
// Route::get('/group', 'GroupController@group')->name('home');
// Route::get('/welcome', 'Controller')->name('home');
// Route::get ('/login', [App\Http\Controllers::class,'index']);

// CONTACTS ROUTES
Route:: post('/save-contact',[App\Http\Controllers\ContactController::class,'saveContacts']);
Route::get('/contact',[App\Http\Controllers\ContactController::class,'showdata']);
Route:: get('/delete-contact/{id}',[App\Http\Controllers\ContactController::class,'deleteContact']);
// Get specific contact
Route::get('edit-page/{id}',[App\Http\Controllers\ContactController::class,'getSpecificContact']);
// Update specific contact
Route::get('update-contact/{id}',[App\Http\Controllers\ContactController::class,'updateContact']);
// GROUP ROUTES
Route::post ('/save-group', [App\Http\Controllers\GroupController::class,'createGroups']);
Route::get('/group',[App\Http\Controllers\GroupController::class,'showgroupdata']);
Route::get ('/delete-group/{id}', [App\Http\Controllers\GroupController::class,'deleteGroups']);
//Get specific group
Route::get ('/edit-group/{id}', [App\Http\Controllers\GroupController::class,'getSpecificGroup']);
//Update Specific group
Route::get ('/update-group/{id}', [App\Http\Controllers\GroupController::class,'updategroup']);
//Quick Message 
Route::view('quickmessage','message');
Route::post('/send-message',[App\Http\Controllers\MessageController::class,'sendmessage']);
//Campaing Routes
Route::get ('/campaing', [App\Http\Controllers\CampaingController::class,'getData']);
Route::get ('/campaing', [App\Http\Controllers\CampaingController::class,'showdata']);
