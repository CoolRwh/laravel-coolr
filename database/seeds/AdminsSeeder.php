<?php

use Illuminate\Database\Seeder;
use App\Model\Admin;
class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Admin::class, 5)->create();
        $user          = Admin::find(1);
        $user->username    = '小小';
        $user->email   = '959598110@qq.com';
        $user->password = bcrypt('123456');
        $user->save();
    }
}
