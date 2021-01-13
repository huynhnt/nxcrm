<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedAdminPermissionsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('admin_role_menu')->truncate();
        $admin_role_menu = [
            [
                'role_id' => '1',
                'menu_id' => '9',
            ],
            [
                'role_id' => '2',
                'menu_id' => '9',
            ],
            [
                'role_id' => '1',
                'menu_id' => '10',
            ],
            [
                'role_id' => '2',
                'menu_id' => '10',
            ],
            [
                'role_id' => '1',
                'menu_id' => '8',
            ],
            [
                'role_id' => '2',
                'menu_id' => '8',
            ],
            [
                'role_id' => '1',
                'menu_id' => '2',
            ],
            [
                'role_id' => '1',
                'menu_id' => '3',
            ],
            [
                'role_id' => '1',
                'menu_id' => '4',
            ],
            [
                'role_id' => '1',
                'menu_id' => '6',
            ]
        ];//
        DB::table('admin_role_menu')->insert($admin_role_menu);
        DB::table('admin_roles')->truncate();
        $admin_role_menu = [
            [
                'id' => '1',
                'name' => '创始人',
                'slug' => 'administrator',
            ],
            [
                'id' => '2',
                'name' => '职员',
                'slug' => 'staff',
            ]
        ];//
        DB::table('admin_roles')->insert($admin_roles);
        DB::table('admin_role_users')->truncate();
        $admin_role_menu = [
            [
                'role_id' => '1',
                'user_id' => '1',
            ],
            [
                'role_id' => '2',
                'user_id' => '2',
            ]
        ];//
        DB::table('admin_role_users')->insert($admin_role_users);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
