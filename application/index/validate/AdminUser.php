<?php
namespace app\index\validate;

use think\console\command\make\Validate as MakeValidate;

class AdminUser extends MakeValidate {
    protected $rule = [
        'login_name' => 'require',
        'password' => 'require|max:20'
    ];
    protected $message = [
        'login_name.require' => '登录账号不能为空',
        'password.require' => '密码不能为空',
        'password.max' => '密码长度不能超过20位',
    ];
}