<?php
$this->app->routeMiddleware(['test' => \App\Contents\Http\Middleware\ExampleMiddleware::class]);

$this->app->router->group([
    'namespace' => 'App\Britton\Http\Controllers'
], function ($router) {
    (function (\Laravel\Lumen\Routing\Router $router, \Laravel\Lumen\Application $app) {
        $baseDir = [__DIR__ . '/Routes/admin', __DIR__ . '/Routes/mobile', __DIR__ . '/Routes/pcweb'];
        foreach ($baseDir as $dir) {
            if (!file_exists($dir)) {
                continue;
            }
            $directory = new DirectoryIterator($dir);
            foreach ($directory as $fileInfo) {
                if ($fileInfo->isDot()) {
                    continue;
                }
                require_once $dir . '/' . $fileInfo->getFilename();
            }
        }
    })($router, $this->app);
});