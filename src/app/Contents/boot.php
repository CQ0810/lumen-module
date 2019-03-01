<?php
$app->routeMiddleware(['test' => \App\Contents\Http\Middleware\ExampleMiddleware::class]);

$app->router->group([
    'namespace' => 'App\Contents\Http\Controllers'
], function ($router) use ($app) {
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
    })($router, $app);
});