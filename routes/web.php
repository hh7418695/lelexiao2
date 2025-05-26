<?php



$routesDir = ['common'];

foreach ($routesDir as $dir) {
    // 加载所有分类路由
    foreach (glob(__DIR__ . '/' . $dir . '/*.php') as $routerFile) {
        require_once $routerFile;
    }
}
