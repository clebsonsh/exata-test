<?php

namespace Database\Seeders;

use Bouncer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = 'admin@exata.it';
        $password = Str::password(10);
        $admin = User::create([
            'name' => 'Admin',
            'email' => $email,
            'password' => bcrypt($password),
        ]);

        $this->command->info('===============================');
        $this->command->info("Admin Email is: {$email}");
        $this->command->info("Admin Password is: {$password}");
        $this->command->info('===============================');

        Bouncer::assign('superadmin')->to($admin);
    }
}
