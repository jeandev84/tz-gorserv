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
      * @return void
      * @throws StreamException
     */
     public function read(int $length, string $mode = 'r')
     {
           $fp = @fopen($this->path, $mode);

           if (! feof($fp)) {
               throw new StreamException();
           }

           $content = fgets($fp, 4096)
           fclose($fp);
     }


     public function write() {}
}