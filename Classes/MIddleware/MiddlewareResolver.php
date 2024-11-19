<?php

namespace Classes\MIddleware;

class MiddlewareResolver
{
    private const MIDDLEWARES_MAP = [
        'auth' => Auth::class,
        'guest' => Guest::class
    ];
    public static function resolve($key)
    {
        if (!$key){
            return;
        }

        $middleware = static::MIDDLEWARES_MAP[$key] ?? false;

        if (!$middleware) {
            throw new \Exception("No matching middleware of keyL: {$key}");
        }

        (new $middleware)->handle();
    }
}