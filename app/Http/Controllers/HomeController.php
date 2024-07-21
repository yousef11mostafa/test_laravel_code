<?php

namespace App\Http\Controllers;

use App\ConvertPriceToUsd;
use App\ConvertPricetoUsdServices;
use App\ConvertPriceToUsdTrait;
use Illuminate\Support\Facades\Notification;
use App\Notifications\testnotification;
use App\Notifications\testdatabase;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\posts;
use App\Models\comments;
use App\Models\Phone;
use App\Models\group;
use App\MOdels\car;
use App\Models\customer;
use App\Models\Service;
use App\Models\employee;
use App\Models\article;
use App\Models\thread;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\note;
use App\Models\collect;
use App\Models\transition;
use App\Models\testfactory;
use App\Events\FireEvent;
use App\Exceptions\UserNotFoundException;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use App\Mail\ThirdMail;
use Exception;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Symfony\Component\Clock\Test\ClockSensitiveTrait;

use App\Models\Scopes\UserScope;

use function Laravel\Prompts\select;

// use Illuminate\Auth\Events\Registered;

// dump('6 this is the controller');

class HomeController extends Controller
{
    //



    use ConvertPriceToUsdTrait;  // an example of traits;


    // an example of services
    public function __construct(public ConvertPricetoUsdServices $priceservices){

    }

    public function userdashboard(){
        $admin=Admin::find(3);

        $notifications= $admin->unreadNotifications;

        return view('admin.dashboard',get_defined_vars());
    }


    public function index(Request $request)
    {

         //   cd "E:\program\php xampp\htdocs\elzero\laravel\github"
         //   https://themewagon.com/theme-price/free/  => this free templates website




         /// accessors and mutuators



         //------------------ laravel scopes   local and global
         // local
        //  return User::valid()->first();

        // global it applyed  alone if calling the model
        // return User::first();
        // to stop the global scope
        // return User::withoutGlobalScope(UserScope::class)->first();




         // --------------- commands and shedule



         // --------------------  ajax



         // ------------email verfications
         //  implements MustVerifyEmail  in the modle
         // add middlewaere verified in the dashboard



         ///-----------------packages-----------------
         // spatie laravel sluggable
        // macamar laravel localization
         // laravel iseed package
         // laravel  schema designer website
        //  laravel spatie transtable  => the column type is "json"
        // alkoumi laravel arabic tafqeet
        // laravel socialite   // socialite providers
        // larvel log viewer  => on "arunas.dev" website
        // spatie larave backup
        // laravel debugger
        // fortify =>youtube =>https://www.youtube.com/watch?v=CLsyHP7x0N0&list=PL1TrjkMQ8UbU2BrO6ubfXio3OG4t6Oqpz



        //-----------------laravel socialite---------------
        // using artisan serve link not localhost
        //there an example in magazine project of google login
        // youtube video =>https://www.youtube.com/watch?v=j-lVevL_72E
        // youtube video =>https://www.youtube.com/watch?v=AoF9ducMsP0




        //--------------- laravel transtable package -------------
        // first create column of type json
        // write column name in fillable and transatable in the model
        // appplying on model transition
        // to create
        //       transition::create([
        //            'name'=>[
        //             'ar'=>'arabic name',
        //             'en'=>'englis name'
        //            ],
        //         ]);
        //

        //  $transition=transition::find(1);
        //  return $transition->name;  // will return according to locale










        //------------ Helpers----------------------
        // it is functions
        // mkdir app/helper
        // mkfile helper.php
        // add files in composer.json => autoload ->"files":{"App/Helpers/pricehelper.php"}
        // run command "composer dump-autoload"
        // call the function in any file it will work even blades
        //ex)
        // return priceconvert(400);
        // return priceconverttest(300);





         // ---------- Servieces ----------------------
         //itis class file to write functions in it and call it in any file like controller,Model,middleware
         // make:class
         // we call it by injection in the construct method
         // ex)
        //  return $this->priceservices->convertprice(400);


         //-------------traits--------------------------
         // itis trait  file to write functions in it and call it in any file like controller,Model,middleware
         // make:trait
         // we call it by ( add name space , use trait name)
         // we call the function by using this->methodname
         // ex)
        //  return $this->convertprice(5024);





         //--------------localization and multilanguage------------
         // first lang:publish
         // second download package (macamora laravel localization)
         // third set the middleware
         // set up the routing
         // finally make the switcher





         //----------- laravel stubs---------
         // stub publish


         //---------- error handling-----------
         // vendor public
         // the files of erros found at resources > views > errors
         // to call error page use function abort()


        //------------ views-------------------
        // sharing data for all views
        // view composer of specific view




        // ----------------tinker --------------
        // ther are pacage called sptie web tinke insteda of normal tinker
        // we can run the conde of web tinker Ctrl+enter


         //-----------Request (has many function in the documentations ) -----------------------

        //---------- Middleware parameter-----------


         //-----------------    Routing ------------------------
        // slugs  (manual , semiautomated,fullautomated using a pacakge "spatie laravel slugabble")
        // Route Model Binding
        // route rate limiting             => at appServicesprovider
        // route fallback
        // accessing the current route       =>   ex)  dump(Route::current());
        // global constraint of routin       => we write it in the AppServiceProvider file
        // regular expressin in the routing  => we write it in the web.php






        //------------------------ components {static and dynamic}---------------------
        // dynamic (class,view) and the static(view only)
        // best practise to name the component is PageTitle adn for the view page-title
        // dynamic can work as static without passing any parameter
        // php artisan make:component AlerComponent          => this is for create dynamic
        // php artisan make:component AlerComponent --view   => this is for create static'
        // <x-Name></x-Name>  ex) <x-page-title></x-page-title>




        // exceptions   {normal and advanced method}


        // this is the advanced methods

        // $user=User::find(100);
        // if(!$user){
        //     throw new UserNotFoundException('this user is not found id');
        // }

        // try{
        //     $user=User::findOrFail(100);
        //     dd($user);
        // }
        // catch (Exception $e){
        //     throw new UserNotFoundException('this user is not found id');
        // }


        // this is the normal methods

        // $user=User::find(100);
        // if(!$user){
        //     throw new Exception("this user not found");
        // }

        // try{
        //     $user=User::findOrFail(100);
        //     dd($user);
        // }
        // catch (Exception $e){
        //     dd($e->getMessage());
        // }






        //----------- mails

        // 1 local mail
        // Mail::to('yousefmostafanawar@gmail.com')->locale('es')->send(
        //     new ThirdMail('yousef')
        // );

        // normal mail
        // Mail::to("yousefmostafanawar@gmail.com")->send(new ThirdMail("yousef"));
        // return redirect("/home");


        //-----------notifications
        // $user=User::find(39);
        // $admin=Admin::find(3);
        // $user->notify(new testnotification());

        // Notification::send($user, new testnotification());
        // Notification::send($admin, new testdatabase($user));

        // return $admin->unreadNotifications;





        // EVENTS AND LISTENER
        //   $user=User::findOrFail(1);
        //   FireEvent::dispatch($user);
        // making register mail message after registeration





        // collection
        // there are three topics in collection { userdefined collection ,,  macro collection ,, lazy collection }

        // ---------------------this example for lazy collection
        // $collection=testfactory::take(6000)->get()->filter(function($ele){
        //     return $ele->id >500;
        // });
        // return view("home",['arr'=>$collection]);



        // ----------------defined collections like each ,filter

        // $customers=Customer::paginate(10);
        // return $customers;


        // $customers->each(function($item){
        //       unset($item->name); //to remove element
        //       $item->age=1;        // to add element
        // });
        // return $customers;



    //    $res= $customers->filter(function($value,$key){
    //            return $value["id"]>5;
    //     });
    //     return $res;



        // $res= $customers->transform(function($value,$key){
        //     return $value['name'];
        // });
        // return $res;




        //---------------------calling macro collection function from service provider
        // $collection=collect(['ali','yousef','mohamed'])->toUpper();
        // dd($collection);




        // cache

        // $value = Cache::get('cars', function () {
        //     return DB::table('users')->get();
        // });
        // return $value;


        // $value = Cache::remember('cars', 50, function () {
        //     return  DB::table('cars')->get();
        // });
        // return $value;

        // $val=User::all();
        // Cache::put("users",$val,30);
        // $value=Cache::get('users');

        // return view("home",['arr'=>$value]);






       // factory
        // $x=testfactory::factory()->count(3)->state(new Sequence(
        //     ['name' => 'Y'],
        //     ['name' => 'N'],
        // )) ->make();
        //   return $x;

        // $x= User::factory(5)->make();
        // dd($x);

        // $x= Phone::factory(5)->create();
        // dd($x);






         // polymorphism one to many as between threead and articles and [notes=commetns]
         // as thread can has many notes and article can have many notes
        //  return thread::first()->notes->first();
        //  return thread::first()->notes;
        //  return article::first()->notes;
        //  return article::first()->notes->first();


        //  polymorphin one to one relation ship between customer and employee and car
        // as employee can have one car and customer can have one car
        // customer::find(10)->car()->create(['name'=>'ferrary']);
        // return customer::find(10)->car;
        // return employee::find(1)->car;
        //  return customer::find(5)->car;



        // many to many relationships   between user and group and usergroup
        // return return view('home',compact('group'));
        // return User::find(2)->group;
        // return group::find(1)->User;
        // $group=return view('home',compact('group'));
        // return view('home',compact('group'));





        // hasonethrough hasmanythrough   between user and comment the intermediate is post
        // return User::find(53)->comments;
        // return User::find(53)->comment;
        //   return User::find(53)->posts;
        // return comments::find(1)->User;



        // one to many   between posts and comments
        // return posts::find(1)->comments;
        // return comments::find(1)->posts;



        // one to many  between  user and comments
        // return posts::find(1)->User;
        // return User::find(1)->posts;


        //--------------------------many to many relationship between doctor and service and doctor_service

        // return Doctor::find(7)->services;
        //  return Doctor::with("services")->find(7);
        // return Service::find(9)->doctors;
        //  return Doctor::wherehas("services")->get();
        //  return Doctor::with("services")->wherehas("services")->get();
        //  return Doctor::whereDoesntHave("services")->get();

        //insert data using attach method  allow repeat the same record
        // Doctor::find(5)->services()->attach(3);
        // Doctor::find(5)->services()->attach(3);
        // Doctor::find(5)->services()->attach(4);
        // return Doctor::with("services")->find(5);

        // sync used to update this record take the last update only
        // Doctor::find(5)->services()->sync(7);
        // Doctor::find(5)->services()->sync(7);
        // Doctor::find(5)->services()->sync(8);
        // return Doctor::with("services")->find(5);

        // insert without detaching used to insert without repeating the same record
        // Doctor::find(5)->services()->syncWithoutDetaching(7);
        // Doctor::find(5)->services()->syncWithoutDetaching(7);
        // Doctor::find(5)->services()->syncWithoutDetaching(8);
        // return Doctor::with("services")->find(5);




        //-------------------------one to many  hospital and doctor

        // return Hospital::find(10)->doctors;
        //    return Hospital::with("doctors")->find(10);
        // return Doctor::with("hospital")->find(5);
        //    return Hospital::wherehas("doctors")->get();
        //    return Hospital::with("doctors")->wherehas("doctors")->get();
        //    return Hospital::whereDoesntHave("doctors")->get();

        // learn delete

        // $hospital=HOspital::find(8);
        // $hospital->doctors()->delete();
        // $hospital->delete();




        //--------------- ----------one to one relationship betwween user and phone

        //   return User::find(43)->phone;

        //   return User::with("phone")->find(43);

        // return User::with('phone:number,code,user_id')->find(43);


        // $user= User::with(['phone'=>function($q){
        //     $q->select("number",'code','user_id'); // dont forget the foriegn key
        // }])->find(43);

        // return $user;
        // return $user->phone->number;

        // $phone=Phone::find(1);
        // return $phone;

        // if you need to not return the user_id put it in the model hidden array or use makeHidden

        // $phone=Phone::find(1);
        // $phone->makeVisible(['user_id']);
        // return $phone;

        // $phone=Phone::find(1);
        // $phone->makeHidden(['user_id']);
        // return $phone;


        // wherehas
        // return User::wherehas("phone")->get();

        // return User::wherehas("phone",function($q){
        //      $q->where("code",11);
        // })->get();

        // return User::with("phone")->wherehas("phone",function($q){
        //      $q->where("code",11);
        // })->get();



        // whereDoesntHave
        // return User::whereDoesntHave("phone")->get();



        // chanel on youtube anjel jay academy





        $post=posts::find(2);
        return view('home',['post'=>$post]);

    }




    public function create(){
        return testfactory::factory()->count(5000)->create();
    }
}

