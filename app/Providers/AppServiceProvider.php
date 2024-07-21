<?php

namespace App\Providers;

use App\Events\FireEvent;
// use Illuminate\Console\Scheduling\Event;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Event;

use Illuminate\Support\Facades\Route;


use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades;
use Illuminate\View\View;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\WelcomeMailListener;

Use App\Models\User;


// dump ('3  from AppServiceProvider');

class AppServiceProvider extends ServiceProvider
{


    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        Relation::morphMap([
            'employees'=>'App\Models\employee',
             'customers'=>'App\Models\customer',
             'thread'=>'App\Models\thread',
             'article'=>'App\Models\article',
        ]);



        




        // ------------ sheduling  2 methods

        // Schedule::command("change-the-expire-of-users")->everyMinute();

        // or using  call back function

        // Schedule::call(function(){
        //     $users=User::where("expire",0)->get();
        //     foreach ($users as $user) {
        //         $user->expire=1;
        //         $user->save();
        //     }
        // })->everyMinute();





        // -----------------sharing data for all views
        // $settings = [
        //     'name' => 'Company name',
        //     'address' => 'Company address',
        // ];
        // Facades\View::share('settings', $settings);


        //--------------------sharaing data for specific view
        // Facades\View::composer('home', function (View $view) {
        //     return $view->with('myName', 'Mahmoud');
        // });




        // --------------Event::listen(
        //     FireEvent::class,
        // );



        //---------------------- creating a global constraing for routing
        // Route::pattern('id','[0-9]+');


        // ------------------------routing Rate limiting
        // RateLimiter::for('watching', function (Request $request) {
        //     return Limit::perMinute(3)->by($request->user()?->id ?: $request->ip());
        // });


        // creating
        // Collection::macro('toUpper', function () {
        //     return $this->map(function (string $value) {
        //         return Str::upper($value);
        //     });
        // });



    }
}
