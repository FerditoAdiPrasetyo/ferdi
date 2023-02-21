<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
        $admin = factory(User::class)->create([
            'name'     => 'ADMIN',
            'email'    => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),    
            
        ]);

        $admin->assignRole('admin');

        $this->command->info('>_ Here is your admin details to login:');
        $this->command->warn($admin->email);
        $this->command->warn('Password is "123456"');

        $Customer = factory(User::class)->create([
           
            'name'     => 'CUSTOMER',
            'email'    => 'Customer@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),            
           
        ]);

        $Customer->assignRole('Customer');

        $this->command->info('>_ Here is your Customer details to login:');
        $this->command->warn($Customer->email);
        $this->command->warn('Password is "123456"');

        // bersihkan cache
        $this->command->call('cache:clear');
    }
}
