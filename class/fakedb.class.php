<?php

require_once('livro.class.php');
class fakeDB
{
    public function recuperarTodosLivros()
    {

        $autor1 = new Autor();
        $autor1->nome = 'Taylor Jenkins Reid';

        $editora1 = new Editora();
        $editora1->nome = 'Editora Paralela';

        $autor2 = new Autor();
        $autor2->nome = 'Oliver Bowden';

        $editora2 = new Editora();
        $editora2->nome = 'Galera';

        $autor3 = new Autor();
        $autor3->nome = 'Miguel de Cervantes Saavedra';

        $editora3 = new Editora();
        $editora3->nome = 'Livraria José Olympio Editora';
        /*
        public $codigo;
        public $titulo;
        public $descricao;
        public $autor;
        public $editora;
        public $edicao;
        public $paginas;
        public $ano;
        public $lancamento;
        public $preco;
        public $avaliacao; */
        $book1 = new Livro();
        $book1->fillData([
            1,
            'Os sete maridos de Evelyn Hugo',
            'Lendária estrela de Hollywood, Evelyn Hugo sempre esteve sob os holofotes — seja estrelando uma produção vencedora do Oscar, protagonizando algum escândalo ou aparecendo com um novo marido... pela sétima vez. Agora, prestes a completar oitenta anos e reclusa em seu apartamento no Upper East Side, a famigerada atriz decide contar a própria história — ou sua "verdadeira história" —, mas com uma condição: que Monique Grant, jornalista iniciante e até então desconhecida, seja a entrevistadora. Ao embarcar nessa misteriosa empreitada, a jovem repórter começa a se dar conta de que nada é por acaso — e que suas trajetórias podem estar profunda e irreversivelmente conectadas.',
            [$autor1],
            $editora1,
            1,
            360,
            2019,
            false,
            31.40,
            [0 , 0, 0, 0, 400]
        ]);

        $book2 = new Livro();
        $book2->fillData([
            2,
            'Assassin’s Creed: Renascença',
            'Traído pelas famílias que governam as cidades-estado italianas, um jovem embarca em uma jornada épica em busca de vingança. Para erradicar a corrupção e restaurar a honra de sua família, ele irá aprender a Arte dos Assassinos.
            Ao longo do caminho, Ezio terá de contar com a sabedoria de grandes mentores, como Leonardo da Vinci e Nicolau Maquiavel, sabendo que sua sobrevivência depende inteiramente de sua perícia e habilidade.
            Para os aliados, Ezio se tornará uma força de mudança, lutando por liberdade e justiça. Para os inimigos, ele se tornará uma ameaça, dedicado de corpo e alma à destruição dos tiranos que oprimem o povo italiano.
            Assim começa uma épica história de poder, vingança e conspiração. Embarque nessa aventura cheia de mistérios e lutas pelo poder, e faça parte também do Credo dos Assassinos.',
            [$autor2],
            $editora2,
            2,
            378,
            2011,
            true,
            57.6,
            [0, 0, 0, 300, 400]
        ]);

        $book3 = new Livro();
        $book3->fillData([
            3,
            'Dom Quixote',
            'O protagonista da obra é Dom Quixote, um pequeno fidalgo castelhano que perdeu a razão por muita leitura de romances de cavalaria e pretende imitar seus heróis preferidos. O romance narra as suas aventuras em companhia de Sancho Pança, seu fiel amigo e companheiro, que tem uma visão mais realista. A ação gira em torno das três incursões da dupla por terras da Mancha, de Aragão e da Catalunha. Nessas incursões, ele se envolve em uma série de aventuras, mas suas fantasias são sempre desmentidas pela dura realidade. O efeito é altamente humorístico.',
            [$autor3],
            $editora3,
            1,
            1328,
            1952,
            false,
            39.9,
            [2, 2, 78, 250, 400]
        ]);
 
        return [

            $book1->codigo => $book1,
            $book2->codigo => $book2,
            $book3->codigo => $book3,

        ];
    }
    public function recuperarLivro($codigo)
    {
        $inBook = $this->recuperarTodosLivros();
        return $inBook[$codigo];
    }
}
