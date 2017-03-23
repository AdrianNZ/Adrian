<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 22/3월/17
 * Time: 오전 11:32
 */

if (!function_exists('markdown')) {
    function markdown($path = null)
    {
        return app(ParsedownExtra::class)->text($path);
    }
}