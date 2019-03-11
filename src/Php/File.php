<?php

namespace Ridoz\Php;
/**
 * Author: anhnt
 * Email: anhnt.Jr@gmail.com
 */
class File
{
    /**
     * Extracting function names from a file
     * @param $path
     * @param string $regex
     * regex
     * - '/public function[\s\n]+(\S+)[\s\n]*\(/'
     * - '/private function[\s\n]+(\S+)[\s\n]*\(/'
     * @return array|mixed
     */
    public static function getFunctionWithFile($path, $regex = '/function[\s\n]+(\S+)[\s\n]*\(/')
    {
        $result = [];
        $fileContents = file_get_contents($path);
        preg_match_all($regex, $fileContents, $result); /*Apply the Regular Expression to the PHP File Contents*/
        if (count($result) > 1) /*If we have a Result, Tidy It Up*/
            $result = $result[1];
        return $result;
    }
}