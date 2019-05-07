<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/5/7
 * Time: 17:03
 */
if ( !function_exists('user') ) {
    /**
     * @param null $driver
     * @return mixed
     */
    function user($driver = null)
    {
        if ( $driver ) {
            return app('auth')->guard($driver)->user();
        }
        return app('auth')->user();
    }
}