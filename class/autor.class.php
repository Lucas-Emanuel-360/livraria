<?php
    class Autor{
        public $nome;

        public function __toString()
        {
            return '' . $this->nome . '';
        }
    }

