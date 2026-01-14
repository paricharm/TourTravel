<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

// all frontend routes here
Route::get("/",[frontendController::class,'home'])->name('home');
Route::get("/about",[frontendController::class,'about'])->name('about');
Route::get("/destination",[frontendController::class,'destination'])->name('destination');
Route::get("/hotel",[frontendController::class,'hotels'])->name('hotel');
Route::get("/gallery",[frontendController::class,'gallery'])->name('gallery');
Route::get("/contact",[frontendController::class,'contact'])->name('contact');
Route::get("/details/{id}",[frontendController::class,'details'])->name('details');
Route::get("/membership",[frontendController::class,'membership'])->name('membership');
Route::get('/register',[frontendController::class,'register'])->name('register');
Route::get('/payment',[userController::class,'payment'])->name('payment');
Route::post('/register',[userController::class,'register'])->name('signup');



// admin routes here
Route::prefix('admin')->group(function(){
    Route::get("/login",[adminController::class,'login'])->name('admin.login');
    Route::post("/signin",[adminController::class,'signin'])->name("admin.signin");
    Route::middleware('admin.auth')->group(function(){
        Route::get('/dashboard',[adminController::class,'dashboard'])->name('admin.dashboard');
        // tourist places routes
        Route::prefix('/tourist')->group(function(){
            Route::get('/tourist-places',[adminController::class,'places'])->name('admin.tourist.places');
            Route::get('/add-places',[adminController::class,'add_place'])->name('admin.add.places');
            Route::post('/add-places',[adminController::class,'add_new_place'])->name('admin.add.new.places');
            Route::get('/edit-places/{id}',[adminController::class,'edit_place'])->name('admin.edit.places');
            Route::post('/update-places/{id}',[adminController::class,'update_place'])->name('admin.update.places');
            Route::get('/delete-places/{id}',[adminController::class,'delete_place'])->name('admin.delete.places');
        });
        // hotels routes
        Route::prefix('/hotels')->group(function(){
            Route::get('/all-hotels',[adminController::class,'hotels'])->name('admin.tourist.hotels');
            Route::get('/add-hotels',[adminController::class,'add_hotels'])->name('admin.add.hotels');
            Route::post('/add-hotels',[adminController::class,'add_new_hotels'])->name('admin.add.new.hotels');
            Route::get("/edit-hotels/{id}",[adminController::class,'edit_hotels'])->name('admin.edit.hotels');
            Route::post("/update-hotels/{id}",[adminController::class,'update_hotels'])->name('admin.update.hotels');
            Route::get("/delete-hotels/{id}",[adminController::class,'delete_hotels'])->name('admin.delete.hotels');
        });
        // users routes
        Route::prefix('/users')->group(function(){
            Route::get('/all-users',[userController::class,'users'])->name('admin.all.users');
            Route::get('/detail-user/{id}',[userController::class,'detail_user'])->name('admin.detail.user');
            Route::get('/edit-users/{id}',[userController::class,'edit_users'])->name('admin.edit.users');
            Route::post('/update-users/{id}',[userController::class,'update_users'])->name('admin.update.users');
            Route::get('/delete-users/{id}',[userController::class,'delete_users'])->name('admin.delete.users');
            Route::get('/download-card/{id}',[userController::class,'card_download'])->name('admin.download.card');
        });
        // payment routes
        Route::prefix("/payments")->group(function(){
            Route::get("/all-payments",[userController::class,'all_payments'])->name("admin.all.payments");
            Route::get("/edit-payments/{id}",[userController::class,'edit_payments'])->name("admin.edit.payments");
            Route::post("/update-payments/{id}",[userController::class,'update_payments'])->name("admin.update.payments");
            Route::get('/download-receipt/{id}',[userController::class,'download'])->name('admin.download.receipt');
        });
        // bookings routes
        Route::prefix('/bookings')->group(function(){
            Route::get('all-bookings',[userController::class,'bookings'])->name("admin.all.bookings");
            Route::get("add-bookings/{id}",[userController::class,'add_booking'])->name('admin.add.bookings');
            Route::post("insert-bookings/{id}",[userController::class,'insert_booking'])->name('admin.insert.bookings');
            Route::post("update-bookings/{id}",[userController::class,'update_booking'])->name('admin.update.booking');
            Route::get("delete-bookings/{id}",[userController::class,'delete_booking'])->name('admin.delete.booking');
        });
        Route::get('/logout',[adminController::class,'logout'])->name('logout');
    });
});