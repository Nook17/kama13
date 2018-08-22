<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class sh extends Command
{
 /**
  * The name and signature of the console command.
  *
  * @var string
  */
 protected $signature = 'nook:sh';

 /**
  * The console command description.
  *
  * @var string
  */
 protected $description = 'Show All exists tables';

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
  $tables = DB::select("SHOW TABLES");
  foreach ($tables as $table) {
   $this->info("$table->Tables_in_kama13");
  }
 }
}
