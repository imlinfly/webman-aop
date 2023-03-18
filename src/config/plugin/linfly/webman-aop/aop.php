<?php
return [
    // 是否开启内存缓存
    'cache' => false,
    // 最大缓存数量
    'max_cache_number' => 100,
    // 切入点列表
    'aspects' => [
        /*[
            // 需要切入的类
            'classes' => ['app\controller\*'],
            // 切入的类
            'aspect' => [\app\aop\aspect\LogAspect::class],
        ],
        [
            // 需要切入的类
            'classes' => ['app\controller\*'],
            // 只有在这些方法中才会切入
            'allows' => [],
            // 除了这些方法，其他方法都会切入 (allows 和 ignores 不能同时存在，优先 allows)
            'ignores' => [
                \app\controller\IndexController::class => ['login'],
            ],
            // 切入的类
            'aspect' => [\app\aop\aspect\IndexAspect::class],
        ],*/
    ],
];
