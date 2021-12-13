<?php

use Illuminate\Database\Seeder;
use App\Mail;

class MailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(Mail::class, 10)->create();
    }
}
