<?php

namespace App\Exceptions;

use Exception;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserNotFoundException extends Exception
{

    public $message;

    public function __construct( $message){

        $this->message=$message;
    }
    //
    public function report(): void
    {
        // ...
    }

    /**
     * Render the exception into an HTTP response.
     */
    public function render(Request $request): Response
    {
        return response()->view('errors.usernotfound',['message'=>$this->message]);
    }
}
