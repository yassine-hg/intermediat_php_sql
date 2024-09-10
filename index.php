<?php
require 'setup.php';

$id = $_POST['id'];
$userQuery = $db->query('SELECT * FROM users WHERE id = ' . $id);
$userQuery = $db->prepare('SELECT * FROM users WHERE id = :id ');
$userQuery->execute(['id'=> $id]);
$user = $userQuery->fetch(PDO::FETCH_ASSOC);

$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT );


$author = 'Jane Austen';

$bookQuery = $db->prepare('SELECT * FROM books WHERE author = :author');

$books = $bookQuery->execute(['author'=>$author]);

$books = $bookQuery->fetchAll(PDO::FETCH_ASSOC);


$title = 'Invisible Man';
$author = 'Ralph Ellison';
$year = 1953;

$newBookQuery = $db->prepare('INSERT INTO books (title, author, year) VALUES (:title, :author, :year)');

$bookqa = $newBookQuery->execute(['title'=> $title, 'author' => $author, 'year' => $year]);


$author = 'Charles Dickens';
$title = 'David Copperfield';
$year = 1850;
$updateBookQuery = $db->prepare('UPDATE books SET title = :title, year = :year WHERE author = :author');

$update = $updateBookQuery->execute(['title'=>$title, 'year'=>$year, 'author'=>$author]);


$id = 1;

$deleteBookQuery = $db->prepare('DELETE FROM books WHERE id = :id');
$delet = $deleteBookQuery->execute(['id' => $id]);
