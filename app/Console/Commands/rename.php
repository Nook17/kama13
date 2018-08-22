<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class rename extends Command
{
 /**
  * The name and signature of the console command.
  *
  * @var string
  */
 protected $signature = 'nook:rename {from : Old name table} {to : New new table}';

 /**
  * The console command description.
  *
  * @var string
  */
 protected $description = 'Rename table';

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
  $from = $this->argument('from');
  $to   = $this->argument('to');
  DB::statement("ALTER TABLE $from RENAME TO $to");

  $this->info("Table $from rename to $to");
 }
}
