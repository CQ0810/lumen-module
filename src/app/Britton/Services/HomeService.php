<?php

namespace App\Britton\Services;

class HomeService
{
    /**
     * 首页
     * @return array
     */
    public function getData(): array
    {
        return ['name' => 'britton', 'age' => 123];
    }
}
