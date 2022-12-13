<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords=[
        ['id'=>1,'name'=>'Super Admin','type'=>'superadmin','vendor_id'=>0,'mobile'=>'0912651113','email'=>'superadmin@gmail.com','password'=>'$2a$12$/mVXfKL5AW3yt.NGweAhde4/7pn5iA.UEoZk7zK2HmQVkg8/sBUle
        ','image'=>'','status'=>1],
        ];
        Admin::insert($adminRecords);
        //
    }
}
