<?php

namespace app\index\controller;
use app\index\model\Active as ActiveModel;

class Active extends Common{
    
    // 活动详情信息
    public function read() {
        $url = web_url('active/read/1', ['active_id' => 1]);
        
        $ActiveModel = new ActiveModel();
        $arr1 = [0,3,4,6,7];
        $arr2 = [1,2,4,5,9];
        $res = $ActiveModel->arrayMerge($arr1, $arr2, 'desc');
        dump($res);exit();
    }

    // 活动编辑页面信息展示
    public function edit() {

    }

    // 活动详情信息更新
    public function update() {

    } 
}