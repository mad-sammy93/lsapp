<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Post;
use Carbon\Carbon;

class sendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:deleteoldposts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete old posts';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $postscount = Post::whereDate('created_at','<', Carbon::now()->subMinutes(10))->count();
        $posts = Post::whereDate('created_at','<', Carbon::now()->subMinutes(10))->delete();

        echo "Deleted ".$postscount." Posts\n";
        
    }
}
