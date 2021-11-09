<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role;
        $adminRole -> name = "admin";
        $adminRole -> display_name = "Admin Larapus";
        $adminRole -> save();

        $memberRole = new Role;
        $memberRole -> name = "member";
        $memberRole -> display_name = "Member Larapus";
        $memberRole -> save();
        //membuat sample admin
        $admin = new User;
        $admin -> name = "Admin Larapus";
        $admin -> email = "Admin@gmail.com";
        $admin -> password = bcrypt("Rahasia");
        $admin -> save();
        $admin -> attachRole($adminRole);
        //membuat sample member
        $member = new User;
        $member -> name = "Member Larapus";
        $member -> email = "member@gmail.com";
        $member -> password = bcrypt("Rahasia");
        $member -> save();
        $member -> attachRole($memberRole);
    }
}
