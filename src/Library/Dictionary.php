<?php
namespace Gorserv\Library;


use Gorserv\Library\Contract\DictionaryInterface;



/**
 * @Dictionary
*/
class Dictionary implements DictionaryInterface
{

    /**
     * @var array
    */
    protected $words;



    /**
     * Dictionary constructor.
     *
     * @param array $words
    */
    public function __construct(array $words)
    {
         $this->words = $words;
    }



    /**
     * @return array|mixed
    */
    public function getWords()
    {
        return $this->words;
    }
}