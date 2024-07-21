<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class PrintEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'print:email {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'print my email';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //

        $email=$this->argument("email");

        $this->info("your email is ".$email);



    }
}
