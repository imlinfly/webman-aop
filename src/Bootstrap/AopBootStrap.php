<?php

/**
 * Created by PhpStorm.
 * User: LinFei
 * Created time 2023/03/13 13:35:50
 * E-mail: fly@eyabc.cn
 */
declare (strict_types=1);

namespace LinFly\WebmanAop\Bootstrap;


use LinFly\Annotation\Bootstrap\AnnotationBootstrap;
use LinFly\Aop\FacadeAop;
use LinFly\WebmanAop\Annotation\Parser\AopAnnotationParser;
use Webman\Bootstrap;
use Workerman\Worker;

class AopBootStrap implements Bootstrap
{

    /**
     * onWorkerStart
     *
     * @param Worker|null $worker
     * @return mixed
     */
    public static function start(?Worker $worker)
    {
        AnnotationBootstrap::event(function () {
            FacadeAop::sort();
        });

        FacadeAop::getInstance((array)config('plugin.linfly.webman-aop.aop'));
    }
}
