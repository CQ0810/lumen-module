<?php

namespace App\Britton\Http\Controllers\Admin;

use App\Britton\Services\HomeService;

class HomeController
{
    /**
     *
     * @version  2019年03月01日
     * @author   zj chen <britton@126.com>
     * @license  PHP Version 7.x.x {@link http://www.php.net/license/3_0.txt}
     *
     * @param HomeService $homeService
     *
     * @return array
     *
     */
    public function getCount(HomeService $homeService): array
    {
        return ['code'=>'0','message'=>'操作成功','data'=>$homeService->getNum()];
    }
}