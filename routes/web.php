<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CatalogController;

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::match(['post', 'get'], '/search', [SearchController::class, 'index'])->name('search');

Route::post('/import', [TableController::class, 'import'])->name('import');
Route::post('/export', [TableController::class, 'export'])->name('export');

Route::post('/order', [FeedbackController::class,'order'])->name('order');
Route::post('/question', [FeedbackController::class,'question'])->name('question');
Route::post('/write', [FeedbackController::class,'write'])->name('write');

Route::group(['prefix' => 'articles'], function() {
    Route::get('/',[ArticleController::class,'index'])->name('articles');
    Route::get('/{article}',[ArticleController::class,'show'])->name('articles.show');
});

Route::group(['prefix' => 'catalogs'], function() {
    Route::get('/',[CatalogController::class,'index'])->name('catalogs');
    Route::get('/{catalog}',[CatalogController::class,'show'])->name('catalogs.catalog');
    Route::get('/{catalog}/{tovar}',[CatalogController::class,'showTovar'])->name('catalogs.catalog.tovar');
    Route::get('/{catalog}/{tovar}/{table}',[CatalogController::class,'showTable'])->name('catalogs.catalog.tovar.table');
});

Route::get('/{page?}',[PagesController::class,'getPage'])->name('pages.get');

Route::get('/{page?}',[PagesController::class,'getPage'])->name('pages.get');