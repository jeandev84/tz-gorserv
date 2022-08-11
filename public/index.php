<?php


require_once __DIR__.'/../vendor/autoload.php';

echo "<h3>Количество вхождений в книге каждого слова из словаря </h3>";

try {


    $book = new \Gorserv\Library\Book(stream(__DIR__.'/data/book.txt')->read());

    $dictionaryWords = explode("\n", stream(__DIR__.'/data/dictionary.txt')->read());

    $dictionary = new \Gorserv\Library\Dictionary($dictionaryWords);

    $matchedWords = wordService()->getCountListOfMatchedWords($book, $dictionary);

    displayCountList($matchedWords);


} catch (Exception $e) {

    echo $e->getMessage();
}