<?php
namespace Gorserv\Service;


use Gorserv\Library\Contract\BookInterface;
use Gorserv\Library\Contract\DictionaryInterface;



/**
 * @WordService
*/
class WordService
{

      /**
       * @param BookInterface $book
       * @param DictionaryInterface $dictionary
       * @return array
      */
      public function getCountListOfMatchedWords(BookInterface $book, DictionaryInterface $dictionary): array
      {
           $wordCountCollection = [];

           foreach ($dictionary->getWords() as $searchWord) {
               preg_match_all('/'. $searchWord . '/', $book->getText(), $matches);
               $wordCountCollection[$searchWord] = count($matches[0]);
           }

           return $wordCountCollection;
      }




      /**
       * @param BookInterface $book
       * @param DictionaryInterface $dictionary
       * @return int
     */
     public function getAllCountOfMatchedWords(BookInterface $book, DictionaryInterface $dictionary): int
     {
        $searchWords = $this->getPatternOfSearchWords($dictionary->getWords());

        preg_match_all($searchWords, $book->getText(), $matches);

        return (! empty($matches[1]) ? count($matches[1]) : 0);
    }


      /**
       * @param array $words
       * @return string
      */
      protected function getPatternOfSearchWords(array $words): string
      {
          $searchWords = array_map(function ($value) {
                 return preg_quote(trim($value));
          }, $words);


          // например '/word1|word2|word3.../i'
          return '/(' . implode('|', $searchWords) . ')/i';
      }
}