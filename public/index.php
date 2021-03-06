<?php
require  __DIR__."/../bootstrap/app.php";

$harmony
    ->addMiddleware(new WoohooLabs\Harmony\Middleware\HttpHandlerRunnerMiddleware(new Zend\HttpHandlerRunner\Emitter\SapiEmitter()))
    ->addMiddleware(new   \Middlewares\Whoops())
    ->addMiddleware(new \App\Http\Middleware\TrailingSlashMiddleware())
    ->addMiddleware(new \App\Http\Middleware\NotFoundMiddleware($router))
    ->addMiddleware(new \Grafikart\Csrf\CsrfMiddleware($session))
    ->addMiddleware(new WoohooLabs\Harmony\Middleware\FastRouteMiddleware($router))
    ->addMiddleware(new WoohooLabs\Harmony\Middleware\DispatcherMiddleware())



;$harmony();




