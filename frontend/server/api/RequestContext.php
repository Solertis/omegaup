<?php


class RequestContext
{
    public static $params = array();                    
    
    public static function set($key, $value)
    {
        self::$params[$key] = $value;
    }
    
    public static function get($key)
    {        
        return isset(self::$params[$key]) ? self::$params[$key] : null;
    }
}

// Set params referencing to $_REQUEST
RequestContext::$params = &$_REQUEST;
?>