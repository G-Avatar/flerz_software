<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'HR',
            'Strategic',
            'Operations'
        ];

        foreach ($roles as $role) {
            Role::create([
                'role_id' => Str::uuid(),
                'role_name' => $role
            ]);
        }
    }
}
