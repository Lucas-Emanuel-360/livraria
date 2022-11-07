<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">

    <title>Bookshop</title>
</head>

<body>
    <?php
    require_once('class/fakedb.class.php');
    ?>
    <main>
        <div class="conteudo">
            <div class="lista">
                <?php

                $database = new fakeDB();
                foreach ($database->recuperarTodosLivros() as $key => $value) {
                    $contador = 0;
                    $clipStar = $value->calcularAvaliacaoMedia() * 24;

                    $boxBook = <<<BOOK
            <div class="livro">
            <img src="img/livro/%d.png" style="width: 120px;"  >
            <h3>%s</h3>
            <div class="stars">
            <img src="img/5-star-grey.png" class="star1">
            <img src="img/5-star-gold.png" class="star2" style="clip: rect( 0px, %fpx, %fpx, 0px);">
 
BOOK;

                    foreach ($value->avaliacao as $j => $avaliacao) {
                        $contador += $avaliacao;
                    }

                    if ($contador != 0) {
                        $boxBook .= '<p class="contador" style="margin-left: 10px">' . $contador . '</p></div>';
                    } else {
                        $boxBook .= '</div>';
                    }
                    $boxBook .= '<p class="preco">R$ %.2f</p><a href="details.php?code=%d" class="link";">Detalhes</a>';
                    if ($value->lancamento == true) {
                        $boxBook .= '<p class="release"> Lançamento </p></div>';
                    } else {
                        $boxBook .= '</div>';
                    }
                    printf($boxBook, $value->codigo, $value->titulo, $clipStar, $clipStar, $value->preco, $value->codigo, $value->codigo);
                }
                ?>
            </div>
        </div>
    </main>

</body>

</html>