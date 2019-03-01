<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/27 0027
 * Time: 11:00
 */

namespace App\Contents\Http\Controllers\Admin;


use App\Contents\Services\HomeService;

class HomeController
{


    /**
     * 首页
     * @param HomeService $homeService
     * @return array
     */
    public function getCount(HomeService $homeService): array
    {
        return ['code'=>'0','message'=>'操作成功','data'=>$homeService->getNum()];
    }
}