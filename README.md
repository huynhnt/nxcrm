<p align="center"><img src="https://wyz.xyz/assets/files/2020-08-13/1597295447-873997-nxcrm.png" width="400"></p>
<h1 align="center"> NXCRM客户管理系统</h1> 
<p align="center">
<a href="https://www.nxcrm.vip"><img src="https://img.shields.io/badge/version-1.12.29-green" alt="Build Status"></a>
<a href="https://www.nxcrm.vip"><img src="https://img.shields.io/badge/laravel-8.0-%23ef3b2d" alt="Total Downloads"></a>
<a href="http://www.dcatadmin.com/"><img src="https://img.shields.io/badge/dcatadmin-2.0.14-%234c5ec2" alt="Latest Stable Version"></a>
<a href="https://www.nxcrm.vip"><img src="https://img.shields.io/badge/MYSQL-8.0-%2300758f" alt="License"></a>
<a href="https://www.nxcrm.vip">
        <img src="https://img.shields.io/badge/Licence-GPL3.0-green.svg?style=flat" />
    </a>
</p>
<p align="center">    
    <b>如果对您有帮助，您可以点右上角 "Star" 支持一下 谢谢！</b>
</p>

## 项目介绍

NXCRM 是宁夏南相开发的客户管理系统，包含了线索，商机，合同，收款，客户，附件，联系人，跟进动态等功能。囊括可客户管理所需的大多数功能。后期版本我们将增加小程序功能。敬请期待。 

系统采用LARAVEL8+Mysql核心技术，系统功能介绍[[查看]](https://www.nxcrm.vip)，企业微信交流群，专业售后服务团队，让您使用无忧。有着详细文档地址：https://doc.nxcrm.vip

## 联系
![](https://wyz.xyz/assets/files/2020-12-29/1609212045-909182-1.jpeg)


## 演示：
https://www.nxcrm.vip

## 环境要求

`git`，用于管理版本，部署和升级必要工具。

`PHP 7.3 +`

`MySQL 5.6+`，数据库。

`ext-zip` 扩展，注意和 PHP 版本相同。

`ext-json` 扩展，注意和 PHP 版本相同。

`ext-fileinfo` 扩展，注意和 PHP 版本相同。


## 部署

### Git部署

> 注意：使用过程中，必须避免直接修改数据库数据，Laravel 拥有强大的 Eloquent ORM 模型层，Chemex 中的所有逻辑交互都由模型关联完成，直接修改数据库数据将会导致未知的错误。应用脱离数据库直接交互是现在最流行的做法。

生产环境下为遵守安全策略，非常建议在服务器本地进行部署，暂时不提供相关线上初始化安装的功能。因此，虽然前期部署的步骤较多，但已经为大家自动化处理了很大部分的流程，只需要跟着下面的命令一步步执行，一般是不会有部署问题的。

1：创建一个数据库，命名任意，但记得之后填写配置时需要对应正确，并且数据库字符集为 `utf8-general-ci`。

2：在你想要的目录中，执行 `git clone https://gitee.com/nxtt/nxcrm.git` 完成下载。

3：在项目根目录中，复制 `.env.example` 文件为一份新的，并重命名为 `.env`。

4：在 `.env` 中配置数据库信息以及 `APP_URL` 信息。

5：进入项目根目录，执行 `php artisan nxcrm:install` 进行安装。

6：你可能使用的web服务器为 `nginx` 以及 `apache`，无论怎样，应用的起始路径在 `/public` 目录，请确保指向正确，同时程序的根目录权限应该调整为：拥有者和你的 Web
服务器运行用户一致，且根目录权限为 `755`。

7：修改web服务器的伪静态规则为：`try_files $uri $uri/ /index.php?$args;`。

8：此时可以通过访问 `http://your_domain` 来使用 NXCRM。管理员账号密码为：`admin / admin`。


## 白色主题
 ---
 ![](https://wyz.xyz/assets/files/2020-08-13/1597299703-929541-15.jpeg)
![](https://wyz.xyz/assets/files/2020-08-13/1597299702-1812-1.jpeg)
![](https://wyz.xyz/assets/files/2020-08-13/1597299702-275937-3.jpeg)
![](https://wyz.xyz/assets/files/2020-08-13/1597299702-547261-5.jpeg)
![](https://wyz.xyz/assets/files/2020-08-13/1597299702-956460-8.jpeg)
![](https://wyz.xyz/assets/files/2020-08-13/1597299703-90334-9.jpeg)
![](https://wyz.xyz/assets/files/2020-08-13/1597299703-366323-11.jpeg)
![](https://wyz.xyz/assets/files/2020-08-13/1597299703-765415-14.jpeg)

## 深色主题
 ---
 ![](https://wyz.xyz/assets/files/2020-08-13/1597299704-84760-16.jpeg)
![](https://wyz.xyz/assets/files/2020-08-13/1597299703-498686-12.jpeg)
![](https://wyz.xyz/assets/files/2020-08-13/1597299702-144606-2.jpeg)
![](https://wyz.xyz/assets/files/2020-08-13/1597299702-405472-4.jpeg)
![](https://wyz.xyz/assets/files/2020-08-13/1597299702-686011-6.jpeg)
![](https://wyz.xyz/assets/files/2020-08-13/1597299702-820414-7.jpeg)
![](https://wyz.xyz/assets/files/2020-08-13/1597299703-227817-10.jpeg)
![](https://wyz.xyz/assets/files/2020-08-13/1597299703-630113-13.jpeg)


## 功能特性
 ---
- [x] 线索
- [x] 商机
- [x] 客户
- [x] 合同
- [x] 联系人
- [x] 跟进
- [x] 收款
- [x] 附件
- [x] 合同电子档备份
- [x] 主题切换
- [x] 数据统计
- [ ] 小程序版本
- [ ] 对接宝塔API
- [ ] 对接微擎客户数据


## 鸣谢
 ---
`Nxcrm` 基于以下组件:

+ [Laravel](https://laravel.com/)
+ [Dact Admin](http://www.dcatadmin.com/)
+ [Laravel Admin](https://www.laravel-admin.org/)
+ [AdminLTE3](https://github.com/ColorlibHQ/AdminLTE)
+ [bootstrap4](https://getbootstrap.com/)
+ [jQuery3](https://jquery.com/)
+ [Eonasdan Datetimepicker](https://github.com/Eonasdan/bootstrap-datetimepicker/)
+ [font-awesome](http://fontawesome.io)
+ [jquery-form](https://github.com/jquery-form/form)
+ [moment](http://momentjs.com/)
+ [webuploader](http://fex.baidu.com/webuploader/)
+ [bootstrap-fileinput](https://github.com/kartik-v/bootstrap-fileinput)
+ [jquery-pjax](https://github.com/defunkt/jquery-pjax)
+ [Nestable](http://dbushell.github.io/Nestable/)
+ [toastr](http://codeseven.github.io/toastr/)
+ [editor-md](https://github.com/pandao/editor.md)
+ [fontawesome-iconpicker](https://github.com/itsjavi/fontawesome-iconpicker)
+ [layer弹出层](http://layer.layui.com/)
+ [waves](https://github.com/fians/Waves)
+ [bootstrap-duallistbox](https://www.virtuosoft.eu/code/bootstrap-duallistbox/)
+ [char.js](https://www.chartjs.org)
+ [nprogress](https://ricostacruz.com/nprogress/)
+ [bootstrap-validator](https://github.com/1000hz/bootstrap-validator)
+ [Google map](https://www.google.com/maps)
+ [Tencent map](http://lbs.qq.com/)
