<?php

namespace App\Britton\Aspects;

use App\Contents\Annotations\TestAnnotation;
use Go\Aop\Aspect;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\Before;

/**
 * 用于处理TestAnnotation的处理组件,该主键必须是Aspect接口的实现类
 *
 * Class TestAspect
 * @package App\Britton\Aspects
 */
class TestAspect implements Aspect
{
    /**
     * @param MethodInvocation $invocation
     *
     * @Before("@execution(App\Britton\Annotations\TestAnnotation)")
     */
    public function testAnnotation(MethodInvocation $invocation): void
    {
        $params = $invocation->getMethod()->getAnnotation(TestAnnotation::class);
        print_r($params->msg);
    }
}