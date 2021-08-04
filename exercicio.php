<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <title>Exercício</title>
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?="{$_GET['dir']}/{$_GET['file']}.php"  ?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
         <div class="conteudo">
             <?php

             //include($_GET['dir'] . "/" . $_GET['file'] . ".php");
             //include("teste/{$_GET['file']}.php"); 
             include("{$_GET['dir']}/{$_GET['file']}.php");

             ?>
         </div>
    </main>

    <footer class="rodape">
        COD3R & ALUNOS <?= date('Y') ?>
    </footer>
</body>

</html>