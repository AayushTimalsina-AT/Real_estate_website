<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('', function () {
    return view('welcome');
});
Route::get('/home',[UserController::class, 'homepage'])->name('homepage');
Route::get('/about',[UserController::class, 'aboutpage']) ->name('aboutpage');
Route::get('/property',[UserController::class, 'propertypage']) ->name('propertypage');
Route::get('/blog',[UserController::class, 'blogpage']) ->name('blogpage');
Route::get('/contact',[UserController::class, 'contactpage']) ->name('contactpage');
Route::get('/property-single',[UserController::class, 'propertysinglepage']) ->name('propertysinglepage');
Route::get('/blogsingle',[UserController::class, 'blogsinglepage']) ->name('blogsinglepage');
Route::get('/agents',[UserController::class, 'agentspage']) ->name('agentspage');
Route::get('/agentsdetail',[UserController::class, 'agentsdetailpage']) ->name('agentsdetailpage');

