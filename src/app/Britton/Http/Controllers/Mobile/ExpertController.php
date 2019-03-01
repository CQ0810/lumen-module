<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/19 0019
 * Time: 14:41
 */

namespace App\Contents\Http\Controllers\Mobile;


use App\Common\Controller\Controller;
use App\Contents\Services\ExpertService;
use Illuminate\Http\Request;

class ExpertController extends Controller
{

    /**
     * 查询专家详情
     * @param ExpertService $expertService
     * @param Request $request
     * @return array
     */
    public function getDetail(ExpertService $expertService, Request $request): array
    {
        return ['code' => 0, 'msg' => '操作成功', 'data' => $expertService->getMobileDetail($request->post())];
    }

}