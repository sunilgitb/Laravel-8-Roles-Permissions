<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mailsetting;

class MailsettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mailsetting::create([
            'mail_transport'            =>'smtp',
            'mail_host'                 =>'sandbox.smtp.mailtrap.io',
            'mail_port'                 =>'25',
            'mail_username'             =>'a82a042b5efaf2',
            'mail_password'             =>'fabbc78aad2874',
            'mail_encryption'           =>'tls',
            'mail_from'                 => 'sunilbesra2691@gmail.com',
        ]);
    }
}
