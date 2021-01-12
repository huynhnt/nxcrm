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
