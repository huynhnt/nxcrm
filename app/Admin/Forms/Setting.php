<?php

namespace App\Admin\Forms;

use Dcat\Admin\Widgets\Form;
use Symfony\Component\HttpFoundation\Response;

class Setting extends Form
{
    /**
     * Handle the form request.
     *
     * @param array $input
     *
     * @return Response
     */
    public function handle(array $input)
    {

        // dump($input);

        foreach ($input as $key => $value) {
            app()->settings->set($key, $value);
        }

        // return $this->error('Your error message.');

        return $this->location();
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $settings = app()->settings->all();
        // dd($settings);
        // Since v1.6.5 弹出确认弹窗
        $this->confirm('您确定要提交表单吗', 'content');
        foreach ($settings as $key => $value) {
            if ($key == 'crmname') {
                $this->text($key, '网站名称')->default($value)->required();
            } elseif ($key == 'crmurl') {
                $this->url($key, '网站地址')->default($value)->required();
            } elseif ($key == 'logo') {
                $this->image($key, '网站LOGO')->accept('jpg,png,gif,jpeg')->maxSize(512)->required()->autoUpload()->help('大小不要超过512K');
            } elseif ($key == 'color') {
                $this->radio($key, '网站配色')->options(['indigo' => '靛蓝', 'blue' => '蓝色', 'blue-light' => '天蓝', 'green' => '深绿', 'blue-dark' => '藏蓝']);
            } elseif ($key == 'body_class') {
                $this->switch($key, '暗色模式')
                    ->customFormat(function ($v) {
                    return $v == '打开' ? 1 : 0;
                })
                    ->saving(function ($v) {
                        return $v ? 'dark-mode' : '';
                    });
            } else {
                $this->text($key)->default($value);
            }
        }
    }


    public function
    default()
    {
        if (app()->config->get('settings.body_class')){
            $body_class = 0;
        }else {
            $body_class = 1;
        }
        return [
            'logo' => app()->config->get('settings.logo'),
            'color' => app()->config->get('settings.color'),
            'body_class' => $body_class,
        ];
    }
}
