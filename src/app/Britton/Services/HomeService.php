<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/27 0027
 * Time: 9:50
 */

namespace App\Contents\Services;


use App\Edu\Services\CourseService;
use App\Edu\Services\OrderService;
use App\Users\Services\UserService;

class HomeService
{
    private $userService;
    private $contentsService;
    private $orderService;
    private $courseService;

public function __construct(CourseService $courseService,UserService $userService, ContentsService $contentsService, OrderService $orderService)
    {
        $this->userService = $userService;
        $this->contentsService = $contentsService;
        $this->orderService = $orderService;
        $this->courseService=$courseService;
    }


    /**
     * 首页
     * @return array
     */
    public function getNum(): array
    {
        $data = [];
        $data['order'] = $this->orderService->getCount();
        $data['user'] = $this->userService->getNum();
        $data['contents'] = $this->contentsService->getNum();
        $data['course']=$this->courseService->getCount();
        return $data;
    }

}