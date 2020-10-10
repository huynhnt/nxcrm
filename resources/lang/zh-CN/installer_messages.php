<?php

return [

    /*
     *
     * Shared translations.
     *
     */
    'title' => 'NXCRM安装程序',
    'next' => 'Next Step',
    'back' => 'Previous',
    'finish' => 'Install',
    'forms' => [
        'errorTitle' => '发生以下错误:',
    ],

    /*
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'templateTitle' => 'NXCRM安装程序',
        'title'   => 'NXCRM安装程序',
        'message' => '跟随我们的脚步，您即将拥有一个功能完善体验舒适的客户管理系统',
        'next'    => '检测环境',
    ],

    /*
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'templateTitle' => '第一步 | 服务器环境检测',
        'title' => '安装环境检测',
        'next'    => '检测权限',
    ],

    /*
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'templateTitle' => '第二部 | 文件夹权限',
        'title' => '文件夹权限',
        'next' => '环境配置',
    ],

    /*
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'menu' => [
            'templateTitle' => '第三步 | 环境设置',
            'title' => '环境设置',
            'desc' => '请选择你想配置应用程序<code>.env</code>文件 的方式。',
            'wizard-button' => '通过表单向导配置',
            'classic-button' => '直接编辑代码配置',
        ],
        'wizard' => [
            'templateTitle' => '第三步 | 环境设置 | 配置向导',
            'title' => '配置 <code>.env</code> 向导',
            'tabs' => [
                'environment' => '网站信息',
                'database' => '数据库',
                'application' => '其他配置',
            ],
            'form' => [
                'name_required' => 'An environment name is required.',
                'app_name_label' => '系统名称',
                'app_name_placeholder' => 'NXCRM客户管理系统',
                'app_environment_label' => '应用环境',
                'app_environment_label_local' => '本地',
                'app_environment_label_developement' => '开发环境',
                'app_environment_label_qa' => '测试环境',
                'app_environment_label_production' => '生产环境',
                'app_environment_label_other' => '其他',
                'app_environment_placeholder_other' => '进入你的环境...',
                'app_debug_label' => '开发模式',
                'app_debug_label_true' => '打开',
                'app_debug_label_false' => '关闭',
                'app_log_level_label' => '日志级别',
                'app_log_level_label_debug' => 'debug',
                'app_log_level_label_info' => 'info',
                'app_log_level_label_notice' => 'notice',
                'app_log_level_label_warning' => 'warning',
                'app_log_level_label_error' => 'error',
                'app_log_level_label_critical' => 'critical',
                'app_log_level_label_alert' => 'alert',
                'app_log_level_label_emergency' => 'emergency',
                'app_url_label' => '系统网址',
                'app_url_placeholder' => 'http://nx.tt',
                'db_connection_failed' => 'Could not connect to the database.',
                'db_connection_label' => '数据库连接',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => '数据库主机',
                'db_host_placeholder' => '数据库主机IP地址，一般为loclahost',
                'db_port_label' => '数据库端口',
                'db_port_placeholder' => '数据库端口，一般为3306',
                'db_name_label' => '数据库名称',
                'db_name_placeholder' => '数据库名称',
                'db_username_label' => '数据库用户名',
                'db_username_placeholder' => '数据库用户名',
                'db_password_label' => '数据库密码',
                'db_password_placeholder' => '数据库密码',

                'app_tabs' => [
                    'more_info' => 'More Info',
                    'broadcasting_title' => '广播、缓存、会话和队列。',
                    'broadcasting_label' => '广播驱动',
                    'broadcasting_placeholder' => '广播驱动',
                    'cache_label' => '缓存驱动',
                    'cache_placeholder' => '缓存驱动',
                    'session_label' => 'Session 驱动',
                    'session_placeholder' => 'Session 驱动',
                    'queue_label' => '队列驱动',
                    'queue_placeholder' => '队列驱动',
                    'redis_label' => 'Redis 驱动',
                    'redis_host' => 'Redis 主机',
                    'redis_password' => 'Redis 密码',
                    'redis_port' => 'Redis 端口',

                    'mail_label' => '邮箱配置',
                    'mail_driver_label' => 'Mail Driver',
                    'mail_driver_placeholder' => 'Mail Driver',
                    'mail_host_label' => 'Mail Host',
                    'mail_host_placeholder' => 'Mail Host',
                    'mail_port_label' => 'Mail Port',
                    'mail_port_placeholder' => 'Mail Port',
                    'mail_username_label' => 'Mail Username',
                    'mail_username_placeholder' => 'Mail Username',
                    'mail_password_label' => 'Mail Password',
                    'mail_password_placeholder' => 'Mail Password',
                    'mail_encryption_label' => 'Mail Encryption',
                    'mail_encryption_placeholder' => 'Mail Encryption',

                    'pusher_label' => 'Pusher',
                    'pusher_app_id_label' => 'Pusher App Id',
                    'pusher_app_id_palceholder' => 'Pusher App Id',
                    'pusher_app_key_label' => 'Pusher App Key',
                    'pusher_app_key_palceholder' => 'Pusher App Key',
                    'pusher_app_secret_label' => 'Pusher App Secret',
                    'pusher_app_secret_palceholder' => 'Pusher App Secret',
                ],
                'buttons' => [
                    'setup_database' => '设置数据库',
                    'setup_application' => '其他配置项',
                    'install' => '开始安装',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => '第三步 | 环境设置 | 编辑配置代码',
            'title' => '编辑配置代码',
            'save' => '保存为 .env',
            'back' => '通过表格向导配置',
            'install' => '保存并安装',
        ],
        'success' => '您的 .env 文件设置已被保存。',
        'errors' => '无法保存.env文件，请手动创建。',
    ],

    'install' => '安装',

    /*
     *
     * Installed Log translations.
     *
     */
    'installed' => [
        'success_log_message' => '成功安装NXCRM客户管理系统',
    ],

    /*
     *
     * Final page translations.
     *
     */
    'final' => [
        'title' => '安装完成',
        'templateTitle' => '安装完成',
        'finished' => 'NXCRM客户管理系统已成功安装',
        'migration' => '数据库执行日志:',
        'console' => '应用执行日志:',
        'log' => '安装过程日志显示:',
        'env' => '最终的 .env 文件:',
        'exit' => '点击这里退出',
    ],

    /*
     *
     * Update specific translations
     *
     */
    'updater' => [
        /*
         *
         * Shared translations.
         *
         */
        'title' => 'Laravel Updater',

        /*
         *
         * Welcome page translations for update feature.
         *
         */
        'welcome' => [
            'title'   => 'Welcome To The Updater',
            'message' => 'Welcome to the update wizard.',
        ],

        /*
         *
         * Welcome page translations for update feature.
         *
         */
        'overview' => [
            'title'   => 'Overview',
            'message' => 'There is 1 update.|There are :number updates.',
            'install_updates' => 'Install Updates',
        ],

        /*
         *
         * Final page translations.
         *
         */
        'final' => [
            'title' => 'Finished',
            'finished' => 'Application\'s database has been successfully updated.',
            'exit' => 'Click here to exit',
        ],

        'log' => [
            'success_message' => 'Laravel Installer successfully UPDATED on ',
        ],
    ],
];
