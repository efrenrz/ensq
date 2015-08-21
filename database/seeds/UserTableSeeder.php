<?php
use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        factory(ensq\User::class)->create([
            'name'  => 'Efren',
            'username' => 'efren',
            'email' => 'erodriguezr@queretaro.gob.mx',
            'role'  => 'admin',
            'password' => bcrypt('efren1'),
        ]);

        factory(ensq\User::class)->create([
            'name'  => 'Campa',
            'username' => 'campa',
            'email' => 'ecampa@queretaro.gob.mx',
            'role'  => 'coordinator',
            'active' => '0',
            'password' => bcrypt('campa1'),
        ]);

        factory(ensq\User::class)->create([
            'name'  => 'Maru',
            'username' => 'maru',
            'email' => 'mlopez@ensq.edu.mx',
            'role'  => 'attendance_office',
            'password' => bcrypt('maru1'),
        ]);

        factory(ensq\User::class)->create([
            'name'  => 'Lolita',
            'username' => 'lolita',
            'email' => 'doloresmora0@gmail.com',
            'role'  => 'administration',
            'password' => bcrypt('lolita1'),
        ]);

        factory(ensq\User::class, 50)->create();
    }
}