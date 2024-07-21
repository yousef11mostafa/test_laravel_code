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
use App\Models\Admin;
use App\notifications\testnotification;
use Illuminate\Support\Facades\Notification;





Route::prefix('admin')->name('admin.')->group(function(){

       Route::middleware('IsAdmin')->group(function(){

            Route::get('/dashboard', [HomeController::class,'userdashboard'])->name('dashboard');

            Route::get('/marknotification/{id}/{$notifiable_id}',function($id, $notifiable_id){
               $admin=Admin::find($notifiable_id);
               $not=$admin->unreadNotifications()->where('id',$id);
            })->name('marknotification');

            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

            Route::post("mark-ar-read",[AdminController::class,'mark'])->name("markasread");

       });


        require __DIR__ .'/admin-auth.php';



});








