<?php

/**
 * @author Ricardo Dantas
 * @copyright 2018
 */

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Arquivo de Livros</title>
    <meta name="description" content="Arquivo simples de livros adquiridos">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <style>
        body
        {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>	
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	<div class="container">
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
    				<span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">LOGO</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">          
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        	Livros <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASEURL; ?>books">Gerenciar Livros</a></li>
                            <li><a href="<?php echo BASEURL; ?>books/add.php">Novo Livro</a></li>
                        </ul>
                    </li>
                </ul>
			</div>
		</div>
	</nav>

    <main class="container">
    