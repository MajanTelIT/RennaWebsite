<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    **
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'country_code' => '+91',
            'mobile' => '9971326607'
        ]);
    }
}
