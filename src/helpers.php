<?php

use Gorserv\FileSystem\Stream;
use Gorserv\Library\Contract\BookInterface;
use Gorserv\Library\Contract\DictionaryInterface;
use Gorserv\Service\WordService;


if (! function_exists('stream')) {


    /**
     * @param string $path
     * @return Stream
    */
    function stream(string $path): Stream
    {
        return new Stream($path);
    }

}



if (! function_exists('wordService')) {

    /**
     * @return WordService
    */
    function wordService(): WordService
    {
         return new WordService();
    }
}



/**
 * @param array $countLists
 * @return void
*/
function displayCountList(array $countLists)
{
    foreach ($countLists as $word => $count) {
        echo sprintf('%s : %d <br>', $word, $count);
    }
}