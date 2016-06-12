<?php
/**
 * @author Axoford12
 * @see QQ: 847072154
 * @version 1.0.0
 * @since 2016.6.12 15:02
 * Start 2016.6.12 (15:02)
 * End 2016.6.12 15:30
 */

namespace ForMaggie\ID1;

class Checker
{
    /**
     * @todo This function used to check VAR
     * Is VAR a HttpURl?
     */
    public static function isHttpUrl($url){
        if (!preg_match('/http:\/\/[\w.]+[\w\/]*[\w.]*\??[\w=&\+\%]*/is', $url)){
            return false;
        } else {
            return true;
        }
    }
}

?>