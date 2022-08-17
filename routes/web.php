<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\QuestionController;

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
    return view('pages.welcome');
});

Route::get('/dashboard', function () {
    return view('pages.admin.dashboard');
})->name('dashboard');

// Route::get(
//     '/question/package/{id}',
//     [QuestionController::class, 'renderPackage']
// )->name('/question/Package/');

Route::prefix('package/section')->group(function () {

    Route::get('/renderSection/{id}', [QuestionController::class, 'renderSection']);
    Route::post('/newSection', [QuestionController::class, 'newSection']);
    Route::post('/editSection', [QuestionController::class, 'editSection']);
    Route::get('/deleteSection/{id}', [QuestionController::class, 'deleteSection']);

    Route::prefix('subsection')->group(function () {

        Route::get('/renderSubSection/{id}', [QuestionController::class, 'renderSubSection']);
        Route::post('/newSubSection', [QuestionController::class, 'newSubSection']);
        Route::post('/editSubSection', [QuestionController::class, 'editSubSection']);
        Route::get('/deleteSubSection/{id}', [QuestionController::class, 'deleteSubSection']);

        Route::prefix('question')->group(function () {

            Route::get('/renderQuestion/{id}', [QuestionController::class, 'renderQuestion']);
            Route::post('/newQuestion', [QuestionController::class, 'newQuestion']);
            Route::post('/editQuestion', [QuestionController::class, 'editQuestion']);
            Route::get('/deleteQuestion/{id}', [QuestionController::class, 'deleteQuestion']);
        });
    });
});

require __DIR__ . '/auth.php';
