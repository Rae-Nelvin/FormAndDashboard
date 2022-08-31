<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\KuesionerController;

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

Route::prefix('user/')->name('user.')->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'render'])->name('renderDashboard');
    Route::get('/package', function () {
        return view('pages.user.kuesioner.dashboard');
    });
    Route::get('/package/kuesioner', function () {
        return view('pages.user.kuesioner.kuesioner');
    });
});

Route::prefix('admin/')->name('admin.')->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'renderDashboard'])->name('renderDashboard');
    Route::post('/newGroup', [AdminDashboardController::class, 'createGroup'])->name('newGroup');
    Route::get('/deletePackage/{id}', [AdminDashboardController::class, 'deletePackage'])->name('deletePackage');
});

Route::prefix('package/section')->group(function () {

    Route::get('/{id}', [QuestionController::class, 'renderSection'])->name('renderSection');
    Route::post('/newSection', [QuestionController::class, 'newSection'])->name('newSection');
    Route::post('/editSection', [QuestionController::class, 'editSection'])->name('editSection');
    Route::get('/deleteSection/{id}', [QuestionController::class, 'deleteSection'])->name('deleteSection');

    Route::prefix('subsection')->group(function () {

        Route::get('/{id}', [QuestionController::class, 'renderSubSection'])->name('renderSubSection');
        Route::post('/newSubSection', [QuestionController::class, 'newSubSection'])->name('newSubSection');
        Route::post('/editSubSection', [QuestionController::class, 'editSubSection'])->name('editSubSection');
        Route::get('/deleteSubSection/{id}', [QuestionController::class, 'deleteSubSection'])->name('deleteSubSection');

        Route::prefix('question')->group(function () {

            Route::get('/{id}', [QuestionController::class, 'renderQuestion'])->name('renderQuestion');
            Route::post('/newQuestion', [QuestionController::class, 'newQuestion'])->name('newQuestion');
            Route::post('/editQuestion', [QuestionController::class, 'editQuestion'])->name('editQuestion');
            Route::get('/deleteQuestion/{id}', [QuestionController::class, 'deleteQuestion'])->name('deleteQuestion');
        });
    });
});

require __DIR__ . '/auth.php';
