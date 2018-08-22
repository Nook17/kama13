<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class shTab extends Command
{
 /**
  * The name and signature of the console command.
  *
  * @var string
  */
 protected $signature = 'nook:shTab';

 /**
  * The console command description.
  *
  * @var string
  */
 protected $description = 'Choice table to show';

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
   $tab[] = $table->Tables_in_kama13;
  }
  $choice_table = $this->choice('Indicate the table to display', $tab);

  $header       = DB::getSchemaBuilder()->getColumnListing($choice_table);
  $table_select = DB::table($choice_table)->get();
  if ($table_select->first()) {
   foreach ($table_select as $row) {
    $rows[] = (array) $row;
   }
   $this->question($choice_table, $this->comment('Teble :'));
   $this->table($header, $rows);
  } else {
   $this->info('Table ' . $choice_table . ' is empty !!!');
  }

 }
}
