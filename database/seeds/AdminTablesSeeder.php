<?php

use Illuminate\Database\Seeder;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_menu')->truncate();
        $admin_menu = [
            [
                'id' => '1',
                'parent_id' => '0',
                'order' => '1',
                'title' => 'Index',
                'icon' => 'feather icon-bar-chart-2',
                'uri' => '/',
                'extension' => '',
                'show' => '1',
            ],
            [
                'id' => '2',
                'parent_id' => '0',
                'order' => '11',
                'title' => 'Admin',
                'icon' => 'feather icon-settings',
                'uri' => null,
                'extension' => '',
                'show' => '1',
            ],
            [
                'id' => '3',
                'parent_id' => '2',
                'order' => '13',
                'title' => 'Users',
                'icon' => null,
                'uri' => 'auth/users',
                'extension' => '',
                'show' => '1',
            ],
            [
                'id' => '4',
                'parent_id' => '2',
                'order' => '14',
                'title' => 'Roles',
                'icon' => null,
                'uri' => 'auth/roles',
                'extension' => '',
                'show' => '1',
            ],
            [
                'id' => '8',
                'parent_id' => '0',
                'order' => '2',
                'title' => 'sale',
                'icon' => 'fa-bar-chart',
                'uri' => null,
                'extension' => '',
                'show' => '1',
            ],
            [
                'id' => '9',
                'parent_id' => '8',
                'order' => '4',
                'title' => 'customers',
                'icon' => 'fa-ship',
                'uri' => '/customers',
                'extension' => '',
                'show' => '1',
            ],
            [
                'id' => '10',
                'parent_id' => '8',
                'order' => '5',
                'title' => 'contacts',
                'icon' => 'fa-user-circle',
                'uri' => '/contacts',
                'extension' => '',
                'show' => '1',
            ],
            [
                'id' => '11',
                'parent_id' => '8',
                'order' => '7',
                'title' => 'events',
                'icon' => 'fa-commenting',
                'uri' => '/events',
                'extension' => '',
                'show' => '1',
            ],
            [
                'id' => '12',
                'parent_id' => '0',
                'order' => '8',
                'title' => 'contract',
                'icon' => 'fa-diamond',
                'uri' => null,
                'extension' => '',
                'show' => '1',
            ],
            [
                'id' => '13',
                'parent_id' => '12',
                'order' => '9',
                'title' => 'contract',
                'icon' => 'fa-trophy',
                'uri' => '/contracts',
                'extension' => '',
                'show' => '1',
            ],
            [
                'id' => '14',
                'parent_id' => '12',
                'order' => '10',
                'title' => 'receipt',
                'icon' => 'fa-credit-card',
                'uri' => '/receipts',
                'extension' => '',
                'show' => '1',
            ],
            [
                'id' => '15',
                'parent_id' => '8',
                'order' => '3',
                'title' => 'leads',
                'icon' => 'fa-flag',
                'uri' => '/leads',
                'extension' => '',
                'show' => '1',
            ],
            [
                'id' => '16',
                'parent_id' => '8',
                'order' => '6',
                'title' => 'opportunitys',
                'icon' => 'fa-cc',
                'uri' => '/opportunitys',
                'extension' => '',
                'show' => '1',
            ],
            [
                'id' => '17',
                'parent_id' => '2',
                'order' => '12',
                'title' => 'settings',
                'icon' => 'fa-gear',
                'uri' => '/settings/setting',
                'extension' => '',
                'show' => '1',
            ]
        ];//
        DB::table('admin_menu')->insert($admin_menu);
        DB::table('admin_permissions')->truncate();
        $admin_permissions = [
            [
                'id' => '1',
                'name' => '??????',
                'slug' => 'auth-management',
                'http_method' => '',
                'http_path' => '',
                'order' => '10',
                'parent_id' => '0',
            ],
            [
                'id' => '2',
                'name' => '??????',
                'slug' => 'users',
                'http_method' => '',
                'http_path' => '/auth/users*',
                'order' => '12',
                'parent_id' => '1',
            ],
            [
                'id' => '3',
                'name' => '??????',
                'slug' => 'roles',
                'http_method' => '',
                'http_path' => '/auth/roles*',
                'order' => '13',
                'parent_id' => '1',
            ],
            [
                'id' => '4',
                'name' => '??????',
                'slug' => 'permissions',
                'http_method' => '',
                'http_path' => '/auth/permissions*',
                'order' => '14',
                'parent_id' => '1',
            ],
            [
                'id' => '5',
                'name' => '??????',
                'slug' => 'menu',
                'http_method' => '',
                'http_path' => '/auth/menu*',
                'order' => '15',
                'parent_id' => '1',
            ],
            [
                'id' => '7',
                'name' => '??????',
                'slug' => 'sale',
                'http_method' => '',
                'http_path' => '',
                'order' => '1',
                'parent_id' => '0',
            ],
            [
                'id' => '8',
                'name' => '??????',
                'slug' => 'customers',
                'http_method' => '',
                'http_path' => '/customers*',
                'order' => '2',
                'parent_id' => '7',
            ],
            [
                'id' => '9',
                'name' => '?????????',
                'slug' => 'contacts',
                'http_method' => '',
                'http_path' => '/contacts*',
                'order' => '3',
                'parent_id' => '7',
            ],
            [
                'id' => '10',
                'name' => '??????',
                'slug' => 'events',
                'http_method' => '',
                'http_path' => '/events*',
                'order' => '4',
                'parent_id' => '7',
            ],
            [
                'id' => '11',
                'name' => '??????',
                'slug' => 'contract',
                'http_method' => '',
                'http_path' => '/contracts*',
                'order' => '8',
                'parent_id' => '16',
            ],
            [
                'id' => '12',
                'name' => '??????',
                'slug' => 'receipts',
                'http_method' => '',
                'http_path' => '/receipts*',
                'order' => '9',
                'parent_id' => '16',
            ],
            [
                'id' => '13',
                'name' => '??????',
                'slug' => 'leads',
                'http_method' => '',
                'http_path' => '/leads*',
                'order' => '5',
                'parent_id' => '7',
            ],
            [
                'id' => '14',
                'name' => '??????',
                'slug' => 'opportunitys',
                'http_method' => '',
                'http_path' => '/opportunitys*',
                'order' => '6',
                'parent_id' => '7',
            ],
            [
                'id' => '15',
                'name' => '??????',
                'slug' => 'settings',
                'http_method' => '',
                'http_path' => '/settings*',
                'order' => '11',
                'parent_id' => '1',
            ],
            [
                'id' => '16',
                'name' => '??????',
                'slug' => 'contracts',
                'http_method' => '',
                'http_path' => '',
                'order' => '7',
                'parent_id' => '0',
            ]
        ];//
        DB::table('admin_permissions')->insert($admin_permissions);
    }
}
