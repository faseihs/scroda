<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class InitialSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'id'=>Uuid::uuid4(),
            'name' =>'Admin Test',
            'email' => 'admin@test.com',
            'password' => bcrypt('admin123'),
            'role_id'=>1
        ]);

        DB::table('users')->insert([
            'id'=>Uuid::uuid4(),
            'name' =>'Client Test',
            'email' => 'client@test.com',
            'password' => bcrypt('client123'),
            'role_id'=>2
        ]);

        DB::table('roles')->insert([
            'name' =>'Admin',
        ]);

        DB::table('roles')->insert([
            'name' =>'Client',
        ]);
    }
}
