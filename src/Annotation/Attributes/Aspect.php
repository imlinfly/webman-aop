<?php

/**
 * Created by PhpStorm.
 * User: LinFei
 * Created time 2022/10/10 10:08:45
 * E-mail: fly@eyabc.cn
 */
declare (strict_types=1);

namespace LinFly\WebmanAop\Annotation\Attributes;

use Attribute;
use LinFly\Annotation\AbstractAnnotationAttribute;
use LinFly\WebmanAop\Annotation\Parser\AopAnnotationParser;

/**
 * @Annotation
 */
#[Attribute(Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
class Aspect extends AbstractAnnotationAttribute
{
    /**
     * 要切入的类，支持多个类和通配符
     * @param array $classes
     * 只允许切入的方法 格式：['类名' => ['方法名1', '方法名2']] 与except互斥 only优先
     * @param array $only
     * 排除的方法，除了这些方法，其他方法都会切入 和only互斥
     * 格式：['类名' => ['方法名1', '方法名2']]
     * @param array $except
     * 排序 (默认为 0，越大越靠前)
     * @param int $sort
     */
    public function __construct(protected array $classes, protected array $only = [], protected array $except = [], protected int $sort = 0)
    {
        $this->setArguments(func_get_args());
    }

    public static function getParser(): string
    {
        return AopAnnotationParser::class;
    }
}
