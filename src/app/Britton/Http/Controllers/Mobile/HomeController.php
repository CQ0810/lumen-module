<?php

namespace App\Britton\Http\Controllers\Mobile;

use App\Common\Controller\Controller;

class HomeController extends Controller
{
    /**
     *
     * @version  2019年03月01日
     * @author   zj chen <britton@126.com>
     * @license  PHP Version 7.x.x {@link http://www.php.net/license/3_0.txt}
     *
     * @param ExpertService $expertService
     * @param Request       $request
     *
     * @return array
     *
     */
    public function getData(Request $request): array
    {
        return ['code' => 0, 'msg' => '操作成功', 'data' => ['name' => 'jack', 'age' => 23]];
    }
}
