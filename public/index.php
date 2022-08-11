<?php


require_once __DIR__.'/../vendor/autoload.php';


try {


    $book = new \Gorserv\Library\Book(stream(__DIR__.'/data/book.txt')->read());

    $dictionaryWords = explode("\n", stream(__DIR__.'/data/dictionary.txt')->read());

    $dictionary = new \Gorserv\Library\Dictionary($dictionaryWords);

    echo sprintf('Количество вхождений в книге каждого слова из словаря : %d',
         wordService()->getCountOfMatchedWords($book, $dictionary)
    );


} catch (Exception $e) {

    echo $e->getMessage();
}