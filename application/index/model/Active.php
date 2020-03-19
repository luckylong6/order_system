<?php

namespace app\index\model;

class Active extends Common
{
    // 两个排好序的数组重新组合成一个新的
    public function arrayMerge($arr1, $arr2, $orderType)
    {
        $res = [];

        // 冒泡法
        // $res = array_merge($arr1, $arr2);
        // for ($i = 0; $i < count($res); $i++) {
        //     for ($j = $i + 1; $j < count($res); $j++) {
        //         if ($res[$j] > $res[$i]) {
        //             $tem = $res[$j];
        //             $res[$j] = $res[$i];
        //             $res[$i] = $tem;
        //         }
        //     }
        // }
        // if ($orderType === 'desc') {
        //     krsort($res);
        // } else {
        //     ksort($res);
        // }
        dump($arr1);
        dump($arr2);
        echo "---------";
        // 普通
        for ($i = 0; $i < count($arr1); $i++) {
            for ($j = 0; $j < count($arr2); $j++) {
                if ($arr1[$i] > $arr2[$j]) {
                    dump($arr1[$i]);
                    dump($arr2[$j]);
                    array_push($res, $arr2[$j]);
                    
                    array_splice($arr2, $j, 1); 
                    // unset($arr2[$j]);
                    // dump($arr2);exit();
                }
                //  else {
                //     break;
                // }'
            }
            dump($arr2);
            dump($res);
            array_push($res, $arr1[$i]);
        }
        return $res;
    }
}
