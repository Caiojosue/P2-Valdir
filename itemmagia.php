<?php
require_once ('Item.php');

class Magia extends Item {
    public function __construct(string $nome) {
        parent::__construct($nome, 2, 'Magia');
    }
}

//tamanho dos itens e classe definidas já no construct de cada item
// e o nome definiremos no index