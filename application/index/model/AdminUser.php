<?php

namespace app\index\model;

use think\facade\Validate as FacadeValidate;
use think\validate;

class AdminUser extends Common
{
    public function login($param)
    {
        $validate = new FacadeValidate('AdminUser');
        if(!$validate->check($param)) {
            return json(['code' => 403, 'msg' => $validate->getError()]);
        }
    }
}
