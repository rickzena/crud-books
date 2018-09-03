<?php

/**
 * @author Ricardo Dantas
 * @copyright 2018
 */

require_once ('../config.php');
require_once (DBAPI);

$books = null;
$book = null;

/**
 * Listagem de Livros
 */
function index() {
    global $books;
    $books = find_all('books');
}

/**
 * Visualização de um Livro
 */
function view($id=null) {
    global $book;
    $book = find('books', $id);
}

/**
 *  Cadastro de Livro
 */
function add() {
    if (!empty($_POST['book'])) {
        $book = $_POST['book'];
        
        save('books', $book);
        header('location: index.php');
    }
}

/**
 *	Atualização/Edição de Livro
 */
function edit() {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['book'])) {
            $book = $_POST['book'];
            update('books', $id, $book);
            header('location: index.php');
        } else {
          global $book;
          $book = find('books', $id);
        } 
    } else {
        header('location: index.php');
    }
}

/**
 * Exclusão de um Livro
 */
function delete($id=null) {
    global $book;
    $book = remove('books', $id);
    
    header('location: index.php');
}

?>