<?php

namespace App\Jobs;


use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use App\Queue;

class SendTest implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $massege;
    public function __construct($w)
    {
        $this->massege = $w;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {//Artisan::call('queue:work');

        //$o = $this->massege.'<hr>';
        //echo $o;
        $user = new Queue();

        $user->name = $this->massege;

        $user->save();
        
    }
    
    public function failed()
  {
        $o = 'error failed';
    return view('queue')->with(['q' => $o]);
  }
}
