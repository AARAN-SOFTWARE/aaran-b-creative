<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class S03_UserSeeder extends Seeder
{
    public static function run(): void
    {
        User::create([
            'username' => 'AB0001ADMIN',
            'name' => 'admin',
            'email' => 'admin@aaran.com',
            'usertype' => 'admin',
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '1',
            'position' => '',

        ]);
        User::create([
            'username' => 'SUNDAR',
            'name' => 'sundar',
            'email' => 'sundar@sundar.com',
            'password' => bcrypt('kalarani'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '2',
            'position' => '',
        ]);

        User::create([
            'username' => 'AB0002',
            'name' => 'Developer',
            'email' => 'developer@aaran.org',
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '2',
            'position' => '',
        ]);

        User::create([
            'username' => 'AB0003',
            'name' => 'audit',
            'email' => 'audit@aaran.org',
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB0004',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 3,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB0005',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 3,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB0006',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 4,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '23',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB0007',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 4,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB0008',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 5,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB0009',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 5,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB00010',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 6,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB00011',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 6,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB00012',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 7,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB00013',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 7,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB00014',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 8,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB00015',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 9,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB00016',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 9,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB00017',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 10,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB00018',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 10,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB00019',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 2,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB00020',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 2,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB00021',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 11,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB00022',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 11,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB00023',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 12,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
        User::create([
            'username' => 'AB00024',
            'name' => fake()->word,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'parent_id' => 12,
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'level' => '3',
            'position' => '',
        ]);
//        User::create([
//            'name' => 'Jagadeesh',
//            'email' => 'Jagadeesh@aaran.org',
//            'password' => bcrypt('123456789'),
//            'email_verified_at' => now(),
//            'remember_token' => Str::random(10),
//            'tenant_id' => '1',
//            'role_id' => '1'
//        ]);
//
//        User::create([
//            'name' => 'Divya',
//            'email' => 'divya@aaran.org',
//            'password' => bcrypt('123456789'),
//            'email_verified_at' => now(),
//            'remember_token' => Str::random(10),
//            'tenant_id' => '1',
//            'role_id' => '1'
//        ]);
//
//        User::create([
//            'name' => 'Alagiri Sankar',
//            'email' => 'alagiri@aaran.org',
//            'password' => bcrypt('123456789'),
//            'email_verified_at' => now(),
//            'remember_token' => Str::random(10),
//            'tenant_id' => '1',
//            'role_id' => '1'
//        ]);
    }
}
