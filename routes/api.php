<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BinLocationController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SharingPostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\WarningPostController;
use App\Http\Controllers\AppointmentController;

use Illuminate\Support\Facades\Route;


Route::get('/listUser', 'App\Http\Controllers\UserController@getList');
Route::get('/listBinLocation', 'App\Http\Controllers\BinLocationController@getList');

Route::get('/countLocationByMonth', 'App\Http\Controllers\HistoryReportController@getLocationHandled');
Route::post("/auth/signin", [LoginController::class, "login"]);
Route::post("/auth/signup", [RegisterController::class, "store"]);
Route::post("/auth/logout", [LoginController::class, "logout"]);
Route::get("/user/getProfile", [ProfileController::class, "getProfile"]);

// Users
Route::get("/users/getListUser", [UserController::class, "getList"]);
Route::get("/users/viewProfile/{id}", [UserController::class, "viewProfile"]);
Route::get("/users/editProfile/{id}", [UserController::class, "editProfile"]);
Route::post("/users/updateProfile/{id}", [UserController::class, "updateProfile"]);
Route::post("/users/changePassword/{id}", [UserController::class, "changePassword"]);
Route::delete("/users/deleteUser/{id}", [UserController::class, "deleteUser"]);

// CountPosts
Route::get("/users/countPosts", [UserController::class, "countPosts"]);

// Bin
Route::get("/trash/getListTrash", [BinLocationController::class, "getList"]);
Route::get("/trash/viewTrash/{id}", [BinLocationController::class, "viewTrash"]);

// SharingPosts
Route::get("/posts/getListPosts", [SharingPostController::class, "getList"]);
Route::get("/posts/viewPosts/{id}", [SharingPostController::class, "viewPost"]);
Route::post("/posts/addPost/{id}", [SharingPostController::class, "addPost"]);
Route::delete("/posts/deletePost/{id}", [SharingPostController::class, "deletePost"]);

// WarningPost
Route::get("/reports/getListPosts", [WarningPostController::class, "getList"]);
Route::get("/reports/viewPosts/{id}", [WarningPostController::class, "viewPost"]);
Route::post("/reports/addPost/{id}", [WarningPostController::class, "addPost"]);
Route::delete("/reports/deletePost/{id}", [WarningPostController::class, "deletePost"]);
Route::get("/reports/getPostMonth", [WarningPostController::class, "getPostMonth"]);

// Notifications
Route::get("/notifications/getListNotifications", [NotificationController::class, "getList"]);
Route::get("/notifications/viewNotification/{id}", [NotificationController::class, "viewNotification"]);
Route::delete("/notifications/deleteNotification/{id}", [NotificationController::class, "deleteNotification"]);

// Appointment
Route::get("/appointment/getListAppoint", [AppointmentController::class, "getListAppoint"]);
Route::post("/appointment/addAppointment", [AppointmentController::class, "addAppointment"]);
