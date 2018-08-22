<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class shDes extends Command
{
 /**
  * The name and signature of the console command.
  *
  * @var string
  */
 protected $signature = 'nook:shDes';

 /**
  * The console command description.
  *
  * @var string
  */
 protected $description = 'Show structure table';

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
  $header = ['Field', 'Type', 'Null', 'Key', 'Default', 'Extra'];
  $name   = $this->ask('write the name of the table to show');
  if (Schema::hasTable($name)) {
   $tables = DB::select("DESCRIBE $name");
   foreach ($tables as $table) {
    $rows[] = (array) $table;
   }
   $this->question($name, $this->comment('Teble :'));
   $this->table($header, $rows);
  } else {
   $this->comment('Tabel :');
   $this->error($name);
   $this->comment('Does not exist !!!');
  }
 }
}
