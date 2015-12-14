<?php

namespace Iapps\Common;

class Helper
{
    /**
     * Get value from an array by checking the key
     *
     * @param  array        $array   the array
     * @param  string       $key     the key you want to check
     * @param  string       $default default value if key doesnt exists
     * @return mixed|string
     */
    public static function getFromArray(array $array = array(), $key = '', $default = '')
    {
        if (isset($array[$key]) && !empty($array[$key])) {
            return $array[$key];
        } else {
            return $default;
        }
    }
}
