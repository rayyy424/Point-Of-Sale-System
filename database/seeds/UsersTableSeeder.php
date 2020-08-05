<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\Conf;
use App\Model\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Amri Mursyid Bin Mohd Zaini',
            'email' => 'amrimursyid424@gmail.com',
            'password' => bcrypt('amri2468'),
            'type' => Conf::ROLE_ADMIN,
        ]);
    }
}
