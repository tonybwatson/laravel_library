<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rolesArr = ['Superuser', 'Librarian', 'Cardholder'];
        for ($i = 0; $i < count($rolesArr); $i++) {
            $role_name = new Role;
            $role_name->role_name = $rolesArr[$i];
            $role_name->save();
        }
    }
}
