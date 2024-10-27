<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class admiseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tbl_admin')->insert([
            'name'      => 'Admin', 
            'role'      => 'admin',
            'mobile'    => '1234567890',
            'email'     => 'admin@gmail.com',
            'adress'    => null,
            'fax'       => null,
            'city'      => null,
            'zip'       => null,
            'password'  => Hash::make('password'), // Hashing the password
            'status'    => 'active',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
