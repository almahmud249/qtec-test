<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FormSubmissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('layouts.user.home');
})->name('home');

Route::middleware(['auth.check'])->group(function () {


    Route::group(['as' => 'user.'], function () {
        Route::get('/user/dashboard', [UserController::class, 'userDashboard'])->name('dashboard');
        Route::post('/user/submit-form', [UserController::class, 'submitForm'])->name('submit.form');
        Route::get('/user/get-form-template/{id}', [UserController::class, 'formTemplate'])->name('form.template');
        Route::get('/user/data-list', [UserController::class, 'list'])->name('list');

    });
    Route::group(['as' => 'admin.'], function () {
        Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('dashboard');

        Route::get('/admin/client-create', [CategoryController::class, 'categoryCreate'])->name('category.create');
        Route::get('/admin/client-store', [CategoryController::class, 'categoryStore'])->name('category.store');
        Route::get('/admin/client-store/{id}', [CategoryController::class, 'categoryDelete'])->name('category.delete');

        Route::get('/admin/gallery-create', [CategoryController::class, 'galleryCreate'])->name('gallery.create');
        Route::post('/admin/gallery-store', [CategoryController::class, 'galleryStore'])->name('gallery.store');

        Route::get('/admin/form-create', [FormController::class, 'formCreate'])->name('form.create');
        Route::get('/admin/form-store', [FormController::class, 'formStore'])->name('form.store');

        Route::get('/admin/form-fields-create', [FormSubmissionController::class, 'formFieldCreate'])->name('form.field.create');
        Route::post('/admin/form-fields-store', [FormSubmissionController::class, 'formFieldStore'])->name('form.field.store');
        Route::get('/admin/view-form/{id}', [FormSubmissionController::class, 'viewForm'])->name('view.form');
        Route::get('/admin/users/list', [FormSubmissionController::class, 'userList'])->name('user.list');

        Route::get('/user/view-user/{id}', [FormSubmissionController::class, 'viewUser'])->name('view.user');

    });
});
Route::get('/clients', [UserController::class, 'clients'])->name('clients');
Route::get('/license', [UserController::class, 'license'])->name('license');
Route::get('/gallery', [UserController::class, 'gallery'])->name('gallery');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::post('/contact-store', [UserController::class, 'contactStore'])->name('contact.store');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
