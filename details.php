<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/details.css">
    <title>Document</title>
</head>
<body>
    <?php
        require_once('class/fakedb.class.php');
    ?>
        <main>
            <div class="conteudo">
                <?php
                    $boxHTML = <<<DETAIL
                <div class="info">
                    <img src="img/livro/%d.png" class="capa">
                    <div class="txtinfo">
                        <h2>%s</h2>
                        <div class="stars">
                            <img src="img/5-star-grey.png" class="star1">
                            <img src="img/5-star-gold.png" class="star2" style="clip: rect( 0px, %fpx, %fpx, 0px);">
                            <p style="margin-left:20px">%.1f</p>
                        </div>
                        <p><b>Autor(a):</b> %s</p>
                        <p><b>Editora:</b> %s</p>
                        <p><b>Edição:</b> %d</p>
                        <p><b>Páginas:</b> %d</p>
                        <p><b>Ano de Publicação:</b> %d</p>
                    </div>
                </div>
                <div class="descricao">
                    <h3>Descrição</h3>
                    <p>%s</p>
                </div>

DETAIL;
                $database = new fakeDB();
                $textoAutor = '';
                $code = $_GET['code'];
                $array = $database->recuperarLivro($code);
                $clipStar = $array->calcularAvaliacaoMedia() * 24;

                foreach ($array->autor as $key => $value) {
                    $textoAutor .= ' ' . $value . '';
                }

                printf($boxHTML, $array->codigo, $array->titulo, $clipStar, $clipStar,$array->calcularAvaliacaoMedia(), $textoAutor, $array->editora, $array->edicao, $array->paginas, $array->ano, $array->descricao, $array->calcularPorcentagemAvaliacao(4) * 100, $array->calcularPorcentagemAvaliacao(4) * 100,$array->calcularPorcentagemAvaliacao(3) * 100,
                $array->calcularPorcentagemAvaliacao(3) * 100,$array->calcularPorcentagemAvaliacao(2) * 100,
                $array->calcularPorcentagemAvaliacao(2) * 100,$array->calcularPorcentagemAvaliacao(1) * 100,
                $array->calcularPorcentagemAvaliacao(1) * 100,$array->calcularPorcentagemAvaliacao(0) * 100,$array->calcularPorcentagemAvaliacao(0) * 100);
                ?>
            </div>
        </main>
        <footer> <button><a href="index.php">Voltar</a></button></footer>
</body>
</html>