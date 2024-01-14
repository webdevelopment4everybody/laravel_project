<?php

namespace Database\Seeders;

use App\Enums\UserRoles;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userRole = UserRole::all();
        if ($userRole->isEmpty()) {
            foreach (UserRoles::toArray() as $key => $value) {
                UserRole::create([
                    'name'=>$value
                ]);
            }
        }
    }
}
