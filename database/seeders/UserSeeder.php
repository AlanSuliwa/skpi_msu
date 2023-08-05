<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('adminskpi2023')
        ]);

        $role = Role::create(['name' => 'Super Admin']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

        /* Mahasiswa & Admin Jurusan */
        $roles = [
            [
                'name' => 'Mahasiswa',
            ],
            [
                'name' => 'Mahasiswa MSU',
            ],
            [
                'name' => 'Akademik'
            ]
        ];

        foreach ($roles as $item) {
            Role::create($item);
        }
    }
}
