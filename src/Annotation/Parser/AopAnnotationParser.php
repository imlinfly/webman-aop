<?php

/**
 * Created by PhpStorm.
 * User: LinFei
 * Created time 2023/03/22 22:51:31
 * E-mail: fly@eyabc.cn
 */
declare (strict_types=1);

namespace LinFly\WebmanAop\Annotation\Parser;

use LinFly\Annotation\Contracts\IAnnotationParser;
use LinFly\Aop\FacadeAop;
use LinFly\WebmanAop\Annotation\Attributes\Aspect;

class AopAnnotationParser implements IAnnotationParser
{
    protected static array $aspects = [];

    /**
     * 注解处理
     * @access public
     * @param array $item
     * @return void
     */
    public static function process(array $item): void
    {
        switch ($item['annotation']) {
            case Aspect::class:
                self::setAspectRule($item);
                break;
        }
    }

    protected static function setAspectRule(array $item)
    {
        $parameters = $item['parameters'];
        $parameters['aspect'] = [$item['class']];
        FacadeAop::setAspects([$parameters]);
    }
}
