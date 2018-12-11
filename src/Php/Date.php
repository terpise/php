<?php
namespace Ridoz\Php;
/**
 * Author: anhnt
 * Email: anhnt.Jr@gmail.com
 */
class Date
{
    public static function getDateBetweenTwoDate($from, $to){
        $from = new \DateTime($from);
        $to = (new \DateTime($to))->modify('+1 day');
        $interval = new \DateInterval('P1D'); /*Object to represent the increment of one day*/
        return new \DatePeriod($from, $interval, $to); /*Object to contain it all*/
    }

    public static function getNumberDayOfMonth($date){
        return date('t', strtotime($date));
    }
}