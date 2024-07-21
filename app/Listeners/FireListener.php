<?php

namespace App\Listeners;

use App\Events\FireEvent;
use App\Notifications\FireNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\secondmail;
class FireListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(FireEvent $event):void
    {
        //
         echo 'hellow world<br>from firelistener one';
        //  echo $event->user->name;  to acces the variable passed form event;
         Mail::to("yousefmostafanawar@gmail.com")->send(new secondmail());

    }
}
