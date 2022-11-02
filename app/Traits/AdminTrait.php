<?php

namespace App\Traits;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

trait AdminTrait {

    function storeAdmin()
    {
        $admin = $this->getAdminData();
        Admin::Create($admin);
    }


    function getAdminData()
    {
        return [

                'id' => 1,
                'name' => 'Super Admin',
                'email' => 'admin@gmail.com',
                'type' => 'Super Admin',
                'password' =>  Hash::make("password"),
                'status'=> 1,

        ];
    }
}
