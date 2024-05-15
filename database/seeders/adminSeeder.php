<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //
         $admins = [
            [
                'nama_admin' => 'admin1',
                'password' => Hash::make(123456),
            ],
            [
                'nama_admin' => 'admin2',
                'password' => Hash::make(123456),
            ],
        ];
        foreach ($admins as $admin) {
            DB::table('admins')->insert($admin);
        }
    }
}
