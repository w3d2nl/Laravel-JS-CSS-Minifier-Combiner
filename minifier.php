<?php

/**
* Minifier
*
* @uses     
*
* @category Category
* @package  Package
* @author   JUST BV
* @link     http://wearejust.com/
*/
class Minifier
{
    /**
     * Create a new min-URL for files or a group.
     * @param  array   $files array of the files to minify and combine
     * @param  boolean Optional parameter to get a group url
     * @return string  The source for combined url
     */
    public static function make( $files, $group=false )
    {
        require_once 'libraries/min/utils.php';

        if ( (! is_bool( $group ) ) || $group === false ) {
            // cast to array
            if(! is_array( $files ) ) $files = array( $files );
        }

        $uri = Minify_getUri($files);
        $uri = str_replace('/min/', '/min/?', $uri);

        return $uri;
    }
}
