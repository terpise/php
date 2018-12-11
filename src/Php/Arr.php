<?php
namespace Ridoz\Php;
/**
 * Author: anhnt
 * Email: anhnt.Jr@gmail.com
 */
class Arr
{

    /**
     * Sort associative array by value of a given key
     * https://joshtronic.com/2013/09/23/sorting-associative-array-specific-key/
     * @param array $array
     * @param string $field
     * @param string $direction
     * @return bool
     */
    public static function sortBy(&$array, $field, $direction = 'asc')
    {
        usort($array,
            create_function('$a, $b', '
                $a = $a["' . $field . '"];
                $b = $b["' . $field . '"];
                if ($a == $b) 
                    return 0;
                return ($a ' . ($direction == 'desc' ? '>' : '<') . ' $b) ? -1 : 1;'));
        return true;
    }

    /**
     * Paging an array
     *
     * @param array $array
     * @param int $page
     * @param int $limit
     * @return array
     */
    public static function paging($array, $page, $limit)
    {
        $skip = ($page - 1) * $limit;
        $total = count($array);
        $rows = array_slice($array, $skip, $limit);
        return [
            'rows' => $rows,
            'total' => $total
        ];
    }
}