<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home',[UserController::class, "index"])->name("homepage");
    // $contacts = [];
    // $faker = Faker::create();
    // for ($i = 1; $i <= 10; $i++){
    //     $contacts[]= [
    //         'name' => $faker->name,
    //         'email' => $faker->unique()->safeEmail,
    //         'phone' => $faker->phoneNumber
    //     ];
    // };

Route::get("/create-user", [UserController::class, "create"])->name("create-user");
Route::post("/create-user", [UserController::class, "store"])->name("store-user");
