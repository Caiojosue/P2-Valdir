<?php
class Item {
    private string $nome;
    private int $tamanho;
    private string $classe;

    public function __construct(string $nome, int $tamanho, string $classe) {
        $this->setNome($nome);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setTamanho($tamanho){
        $this->tamanho = $tamanho;
    }

    public function getTamanho(): int {
        return $this->tamanho;
    }

    public function setClasse($classe){
        $this->classe = $classe;
    }

    public function getClasse(): string {
        return $this->classe;
    }
}