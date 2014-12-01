s<?php

$books = [
    'The Hobbit' => [
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ],
    'Game of Thrones' => [
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ],
    'The Catcher in the Rye' => [
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ],
    'A Tale of Two Cities' => [
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    ]
];

foreach($books as $title => $info) {
    if( $info['published'] >= 1950) {
        echo 'Book: ' . $title . PHP_EOL;
        echo 'Author: ' . $author . "{$info['author']}" . PHP_EOL;
        echo 'Year: ' . $published . "{$info['published']}" . PHP_EOL;
        echo 'Pages: ' . $pages . "{$info['pages']}" . PHP_EOL;
        echo PHP_EOL;
    }
   
    
}
  