<?php

/**
 * @author Ricardo Dantas
 * @copyright 2018
 */

require_once('functions.php'); 
edit();
include(HEADER_TEMPLATE);

?>

<h2>Atualizar Livro</h2>

<form action="edit.php?id=<?php echo $book['id']; ?>" method="post">
    <hr />
    <div class="row">
        <div class="form-group col-md-7">
            <label for="name">Título</label>
            <input type="text" class="form-control" name="book['titulo_books']" value="<?php echo $book['titulo_books']; ?>">
        </div>
        <div class="form-group col-md-3">
            <label for="campo2">Autor</label>
            <input type="text" class="form-control" name="book['autor_books']" value="<?php echo $book['autor_books']; ?>">
        </div>
        <div class="form-group col-md-2">
            <label for="campo3">Páginas</label>
            <input type="text" class="form-control" name="book['paginas_books']" value="<?php echo $book['paginas_books']; ?>">
        </div>
    </div>
    
    <div class="row">
        <div class="form-group col-md-5">
            <label for="campo1">Editora</label>
            <input type="text" class="form-control" name="book['editora_books']" value="<?php echo $book['editora_books']; ?>">
        </div>
        <div class="form-group col-md-5">
            <label for="campo2">Linguagem</label>
            <input type="text" class="form-control" name="book['linguagem_books']" value="<?php echo $book['linguagem_books']; ?>">
        </div>
        <div class="form-group col-md-2">
            <label for="campo3">Valor</label>
            <input type="text" class="form-control" name="book['valor_books']" value="<?php echo $book['valor_books']; ?>">
        </div>
    </div>
    
    <div id="actions" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="index.php" class="btn btn-default">Cancelar</a>
        </div>
    </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>