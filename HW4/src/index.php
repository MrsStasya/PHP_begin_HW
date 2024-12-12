<?php

require_once 'DigitalBook.php';
require_once 'PaperBook.php';
require_once 'Shelf.php';
require_once 'Room.php';

$pBook1 = new PaperBook('Сто лет одиночесства', ['Маркес Г.Г.'], 'Фантастика', 1967, 1);
$pBook2 = new PaperBook('Будущее', ['Глуховский Д.А.'], 'Фантастика', 2009, 1);
$pBook3 = new PaperBook('Черный обелиск', ['Ремарк Э.М.'], 'Драма', 1956, 1);
$dBook1 = new DigitalBook('Сумерки', ['Глуховский Д.А.'], 'Фантастика', 2007, 'https://ru.wikipedia.org/wiki/Сумерки_(роман_Глуховского)');
$dBook2 = new DigitalBook('Дюна', ['Фрэнк Герберт'], 'Фантастика', 1965, 'http://www.digital-book.com/dune.mp3');

//Создаем помещение №1 по адресу ул.Баумана, 56, в которое поместим шкаф №1 с объемом в 2 книги
$room1 = new Room(1, 'ул.Баумана, 56', new Shelf(1, 1, 2, []));  
//Поместим $pBook1 и $pBook2 в шкаф №1
$room1->getBookShelf()->placeBookInShelf($pBook1);  
$room1->getBookShelf()->placeBookInShelf($pBook3);  
// Получим данные по помещению (номер, адрес)
echo $room1 . PHP_EOL;    
// Выдаем книгу на руки                             
echo $pBook2->takeBook('Иванов И.И.') . PHP_EOL;    
echo 'Количество книг в шкафу №' . $room1->getBookShelf()->getShelfId() . ': ' . $room1->getBookShelf()->getCountBooks() . PHP_EOL;

// Возврат книги от читателя
echo $pBook2->returnBook('Иванов И.И') . PHP_EOL;   
echo $pBook2->takeBook('Петров П.П.') . PHP_EOL;
echo $pBook3->takeBook('Чучмеков В.К.') . PHP_EOL;
echo $dBook2->takeBook('Федоренко А.П.') . PHP_EOL;

