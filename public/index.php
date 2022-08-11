<?php


require_once __DIR__.'/../vendor/autoload.php';

echo "<h3>Количество вхождений в книге каждого слова из словаря </h3>";

try {


    $book = new \Gorserv\Library\Book(stream(__DIR__.'/data/book.txt')->read());

    $dictionaryWords = explode("\n", stream(__DIR__.'/data/dictionary.txt')->read());

    $dictionary = new \Gorserv\Library\Dictionary($dictionaryWords);

    foreach (wordService()->getCountListOfMatchedWords($book, $dictionary) as $word => $count) {
         echo sprintf('%s : %d <br>', $word, $count);
    }


} catch (Exception $e) {

    echo $e->getMessage();
}