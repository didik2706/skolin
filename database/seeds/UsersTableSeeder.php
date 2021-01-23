<?php

use Illuminate\Database\Seeder;
use App\Models\Skolin\AdminSkolin;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new AdminSkolin();
        $admin->nama = "Admin Skolin";
        $admin->email = "admin@skolin.com";
        $admin->password = bcrypt("password");
        $admin->no_whatsapp = "08997799900039";
        $admin->save();
    }
}
