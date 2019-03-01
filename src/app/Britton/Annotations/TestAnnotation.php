<?php

namespace App\Britton\Annotations;

use Doctrine\Common\Annotations\Annotation;

/**
 * 实例注解，用于演示基本的使用
 * Class TestAnnotation
 * @package App\Britton\Annotation
 *
 * @Annotation
 * @Annotation\Target("METHOD")
 */
class TestAnnotation extends Annotation
{
    public $msg = '这个是默认值';
}