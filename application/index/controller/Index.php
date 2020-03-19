<?php

namespace app\index\controller;

use app\index\model\AdminUser;
use think\Request;

class Index extends Common
{
    public function login()
    {
        $param = Request::param();
        $AdminUser = new AdminUser();
        $res = $AdminUser->login($param);
        return \json(['code' => $res['code'], 'msg' => $res['msg']]);
    }
}
