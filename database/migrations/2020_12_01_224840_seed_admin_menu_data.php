<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedAdminMenuData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
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
                'name' => '授权管理',
                'slug' => 'auth-management',
                'http_method' => '',
                'http_path' => '',
                'order' => '1',
                'parent_id' => '0',
            ],
            [
                'id' => '2',
                'name' => '用户管理',
                'slug' => 'users',
                'http_method' => '',
                'http_path' => '/auth/users*',
                'order' => '3',
                'parent_id' => '1',
            ],
            [
                'id' => '3',
                'name' => '角色管理',
                'slug' => 'roles',
                'http_method' => '',
                'http_path' => '/auth/roles*',
                'order' => '4',
                'parent_id' => '1',
            ],
            [
                'id' => '4',
                'name' => '权限管理',
                'slug' => 'permissions',
                'http_method' => '',
                'http_path' => '/auth/permissions*',
                'order' => '5',
                'parent_id' => '1',
            ],
            [
                'id' => '5',
                'name' => '菜单管理',
                'slug' => 'menu',
                'http_method' => '',
                'http_path' => '/auth/menu*',
                'order' => '6',
                'parent_id' => '1',
            ],
            [
                'id' => '6',
                'name' => '操作日志',
                'slug' => 'operation-log',
                'http_method' => '',
                'http_path' => '/auth/logs*',
                'order' => '7',
                'parent_id' => '1',
            ],
            [
                'id' => '7',
                'name' => '销售管理',
                'slug' => 'sale',
                'http_method' => '',
                'http_path' => '',
                'order' => '8',
                'parent_id' => '0',
            ],
            [
                'id' => '8',
                'name' => '客户',
                'slug' => 'customers',
                'http_method' => '',
                'http_path' => '/customers*',
                'order' => '9',
                'parent_id' => '7',
            ],
            [
                'id' => '9',
                'name' => '联系人',
                'slug' => 'contacts',
                'http_method' => '',
                'http_path' => '/contacts*',
                'order' => '10',
                'parent_id' => '7',
            ],
            [
                'id' => '10',
                'name' => '跟进',
                'slug' => 'events',
                'http_method' => '',
                'http_path' => '/events*',
                'order' => '11',
                'parent_id' => '7',
            ],
            [
                'id' => '11',
                'name' => '合同',
                'slug' => 'contract',
                'http_method' => '',
                'http_path' => '/contracts*',
                'order' => '12',
                'parent_id' => '7',
            ],
            [
                'id' => '12',
                'name' => '收款',
                'slug' => 'receipts',
                'http_method' => '',
                'http_path' => '/receipts*',
                'order' => '13',
                'parent_id' => '7',
            ],
            [
                'id' => '13',
                'name' => '线索',
                'slug' => 'leads',
                'http_method' => '',
                'http_path' => '/leads*',
                'order' => '14',
                'parent_id' => '7',
            ],
            [
                'id' => '14',
                'name' => '商机',
                'slug' => 'opportunitys',
                'http_method' => '',
                'http_path' => '/opportunitys*',
                'order' => '15',
                'parent_id' => '7',
            ],
            [
                'id' => '15',
                'name' => '系统设置',
                'slug' => 'settings',
                'http_method' => '',
                'http_path' => '/settings*',
                'order' => '2',
                'parent_id' => '1',
            ]
        ];//
        DB::table('admin_permissions')->insert($admin_permissions);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
