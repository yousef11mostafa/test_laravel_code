<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Make:View {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create view';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $arg=$this->argument('name');
        $path=$this->checkfolder($arg);
        if(file_exists($path)){
            $this->error("this file is arleardy exists");
        }
        else{
           fopen($path,'w');
           $this->info("file ".$arg." has created succfully.");
        }

    }
    public function checkfolder($arg){
        $arg=str_replace('.','/',$arg);
        $path="resources/views/$arg".".blade.php";
        $directory=dirname($path);

        if(!file_exists($directory)){
            mkdir($directory,0777,true);
            $this->info($directory);
        }
        return $path;
    }
}
