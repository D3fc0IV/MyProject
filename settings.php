<?php
/**
 * Created by PhpStorm.
 * User: fredericd
 * Date: 28-09-16
 * Time: 12:21
 */
// Include files required for initialization.
//require(ABSPATH.'/autoload.php' );
//require(ABSPATH.'/default-constants.php' );
//require_once(ABSPATH.'/plugin.php' );

/**
 * Start the micro-timer
 * @return float|null
 */
function getTime() {
    static $timer = false, $start;
    if ($timer === false) {
        $start = array_sum(explode(' ',microtime()));
        $timer = true;
        return NULL;
    } else {
        $timer = false;
        $end = array_sum(explode(' ',microtime()));
        return round(($end - $start) * 1000, 3);
    }
}
//Start loading timer.
getTime();

/**
 * Set PHP error reporting
 * Uses three constants: `MODE_DEBUG`, `MODE_DEBUG_DISPLAY`, and `MODE_DEBUG_LOG`.
 * All three can be defined in settings.php. By default, `MODE_DEBUG` and
 * `MODE_DEBUG_LOG` are set to false, and `MODE_DEBUG_DISPLAY` is set to true.
 * When `MODE_DEBUG` is true, all PHP notices are reported.
 */
function debug_mode(){
    if (MODE_DEBUG){
        error_reporting(E_ALL);
        if(MODE_DEBUG_DISPLAY)
            ini_set('display_errors', 1);
        elseif (null !== MODE_DEBUG_DISPLAY)
            ini_set('display_errors', 0);
        if (MODE_DEBUG_LOG){
            ini_set('log_errors', 1);
            ini_set('error_log', ABSPATH.'/log/debug.log');
        }
    }else{
        error_reporting(0);
    }
}
//Set debug mode.
debug_mode();