<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use App\Mail\firstmail;
use App\Mail\ThirdMail;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Models\User;
use App\notifications\testnotification;
use Illuminate\Support\Facades\Notification;






// dump(' 4  from  web file for routing and it also come from routingservice provider ');

Route::get('/', function () {
    return view('welcome');
})->middleware('expmiddleware');


// Route::get("/home",[HomeController::class,'index'])->middleware('IsAdmin')->name('homepage');
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...

        Route::get("/home",[HomeController::class,'index'])->name('homepage');

        Route::get("/comments",[CommentsController::class,'index']);
        Route::post("/comments",[CommentsController::class,'create'])->middleware('IsAdmin')->name('homepage');

 });




////////---------------- mail and notification

Route::get("/send-mail",function(){
    Mail::to("yousefmostafanawar@gmail.com")->send(new ThirdMail("yousef"));
    return redirect("/home");
});
Route::get("/send-notification",function(){
         $user=User::where("id",'24')->get();
        // $user->notify(new testnotification());
        Notification::send($user, new testnotification());
    return redirect("/home");
});

Route::get("mark-ar-read",[AdminController::class,'mark'])->name("markasread");


// ---------------------- slugs

Route::get('posts/{posts}',[PostsController::class,'index']);

//------------------------auth

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Route::fallback(function(){
//   return  to_route('homepage');
// });


// route rate limiting
// Route::get("/home",[HomeController::class,'index'])->middleware('throttle:watching')->name('homepage');



require __DIR__ .'/auth.php';
require __DIR__ .'/admin.php';






