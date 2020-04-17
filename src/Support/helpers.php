<?php

/** Helper functions to provide better Lumen-Laravel compatibility for the package */

if (! function_exists('resolve')) {
    /**
     * Resolve a service from the container.
     *
     * @param  string  $name
     * @param  array  $parameters
     * @return mixed
     */
    function resolve($name, array $parameters = [])
    {
        return app($name, $parameters);
    }
}

//if (! function_exists('app_path')) {
//    /**
//     * Get the path to the application folder.
//     *
//     * @param  string  $path
//     * @return string
//     */
//    function app_path($path = '')
//    {
//        return app()->basePath() . '/app' . ($path ? '/' . $path : $path);
//    }
//}
//
//if ( ! function_exists('config_path'))
//{
//    /**
//     * Get the configuration path.
//     *
//     * @param  string $path
//     * @return string
//     */
//    function config_path($path = '')
//    {
//        return app()->basePath() . '/config' . ($path ? '/' . $path : $path);
//    }
//}


if (! function_exists('public_path')) {
    /**
     * Get the path to the public folder.
     *
     * @param  string  $path
     * @return string
     */
    function public_path($path = '')
    {
        return app()->basePath('public').($path ? DIRECTORY_SEPARATOR.ltrim($path, DIRECTORY_SEPARATOR) : $path);
    }
}

if (! function_exists('app_path')) {
    /**
     * Get the path to the application folder.
     *
     * @param  string  $path
     * @return string
     */
    function app_path($path = '')
    {
        return app()->path($path);
    }
}

if (! function_exists('config_path')) {
    /**
     * Get the configuration path.
     *
     * @param  string  $path
     * @return string
     */
    function config_path($path = '')
    {
        return app()->configPath($path);
    }
}
