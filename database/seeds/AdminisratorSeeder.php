<?php

use Illuminate\Database\Seeder;

class AdminisratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User;
        $admin->name = "User";
        $admin->email = "user@gmail.com";
        $admin->password = \Hash::make("admin123");
        $admin->roles = "User";
        $admin->gambar="img/Admin1.jpg";
        $admin->save();
        $this->command->info("Admin berhasil ditambah");
    }
}
