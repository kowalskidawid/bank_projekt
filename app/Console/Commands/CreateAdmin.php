<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdmin extends Command
{
    protected $signature = 'site:create-admin';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $login = $this->ask('Login:', 'admin');
        $password = $this->ask('Hasło:', 'demo');
        User::create([
            'login' => $login,
            'password' => Hash::make($password)
        ]);
        $this->info('Użytkownik ' . $login . ' został dodany!');
    }
}
