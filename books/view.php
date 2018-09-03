<?php

/**
 * @author Ricardo Dantas
 * @copyright 2018
 */

require_once ('functions.php');
view($_GET['id']);
include (HEADER_TEMPLATE);

?>

<h2>Livro <?php echo $book['id']; ?></h2>
<hr />

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Título:</dt>
	<dd><?php echo $book['titulo_books']; ?></dd>

	<dt>Autor:</dt>
	<dd><?php echo $book['autor_books']; ?></dd>

	<dt>Páginas:</dt>
	<dd><?php echo $book['paginas_books']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Editora:</dt>
	<dd><?php echo $book['editora_books']; ?></dd>

	<dt>Linguagem:</dt>
	<dd><?php echo $book['linguagem_books']; ?></dd>

	<dt>Valor:</dt>
	<dd><?php echo $book['valor_books']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $book['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include (FOOTER_TEMPLATE); ?>