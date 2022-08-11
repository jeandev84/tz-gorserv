<?php
namespace Gorserv\Library;


use Gorserv\Library\Contract\BookInterface;

/**
 * @Book
*/
class Book implements BookInterface
{

      /**
       * @var
      */
      protected $text;




      /**
       * Book constructor.
       *
       * @param string $text
      */
      public function __construct(string $text)
      {
           $this->text = $text;
      }



      /**
       * @inheritDoc
      */
      public function getText(): string
      {
          return $this->text;
      }
}