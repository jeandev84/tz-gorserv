<?php
namespace Gorserv\FileSystem;


use Gorserv\FileSystem\Exception\StreamException;


/**
 * @Stream
*/
class Stream
{

     /**
      * @var string
     */
     protected $path;



     /**
      * @param string $path
     */
     public function __construct(string $path)
     {
          $this->path = $path;
     }



     /**
      * @param int $length
      * @param string $mode
      * @return string|false
     */
     public function read(int $length = 4096, string $mode = 'r')
     {
           $stream = fopen($this->path, $mode);

           $content = fread($stream, $length);

           fclose($stream);

           return $content;
     }



     public function write() {}
}