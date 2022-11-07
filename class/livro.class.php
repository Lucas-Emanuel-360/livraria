<?php

    require_once 'autor.class.php';
    require_once 'editora.class.php';
    class Livro 
    {

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
        public $avaliacao; 

        public function calcularPorcentagemAvaliacao($index){
            $quantidadeTotal = 0;
            $array = $this->avaliacao; 
            foreach ($this->avaliacao as $key => $value) {
                $quantidadeTotal += $value;
            }
            return $array[$index] / $quantidadeTotal;
        }
        
        public function calcularAvaliacaoMedia()
        {
            $media = 0;
            
            foreach ($this->avaliacao as $key => $value) {
                $media += $this->calcularPorcentagemAvaliacao($key) * ($key + 1);
            }
            return $media;
        }

        public function fillData(array $data)
        {
            $this->codigo = $data[0];
            $this->titulo = $data[1];
            $this->descricao = $data[2];
            $this->autor = $data[3];
            $this->editora = $data[4];
            $this->edicao = $data[5];
            $this->paginas = $data[6];
            $this->ano = $data[7];
            $this->lancamento = $data[8];
            $this->preco = $data[9];
            $this->avaliacao = $data[10];
        }

        public function __toString()
        {
            $textoautor = '';
            foreach ($this->autor as $key => $value) {
                $textoautor .= ' ' . $value . '';
            }
            $textoavaliacao = '';
            foreach ($this->avaliacao as $key => $value) {
                $textoavaliacao .= '' . $key . ': ' . $value . '</br>';
            }
            return 
            array($this->codigo, $this->titulo, $this->descricao, $textoautor, $this->editora, $this->edicao, $this->paginas, $this->ano, $this->lancamento, $this->preco, $textoavaliacao);
        }
    }

