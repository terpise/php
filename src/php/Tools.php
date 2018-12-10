<?php
namespace Ridoz\Php;
/**
 * Author: anhnt
 * Email: anhnt.Jr@gmail.com
 */
class Tools
{
    private static $performanceTimeStart = 0;

    /**
     * Tracking the script execution time in PHP
     */
    public static function performance()
    {
        if(self::$performanceTimeStart === 0)
            self::$performanceTimeStart = microtime(true);
        else{
            $performanceTimeEnd = microtime(true);
            $totalTime = ($performanceTimeEnd - self::$performanceTimeStart);
            echo 'Total time: ' . $totalTime . 's';
            die;
        }

    }
}