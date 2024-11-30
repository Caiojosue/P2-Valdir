<?php
class Inventario {
    private int $capacidadeMaxima;
    private array $itens;//itens definida como lista

    public function __construct(int $capacidadeInicial = 20) {
        $this->capacidadeMaxima = $capacidadeInicial;
        $this->itens = []; 
    }

    public function getCapacidadeMaxima(): int {
        return $this->capacidadeMaxima;
    }//um get para podermos chamar a função CapacidadeMax no index

    public function capacidadeLivre(): int {
        $ocupado = array_reduce($this->itens, function ($total, $item) {
            return $total + $item->getTamanho();
        }, 0);
        return $this->capacidadeMaxima - $ocupado;
    }
// no adicionar a função adicionará um itemmenor ou igual a capacidade livre no invetario do player e se caso essa capacidade se exceder retornará falso
    public function adicionar(Item $item): bool {
        if ($item->getTamanho() <= $this->capacidadeLivre()) {
            $this->itens[] = $item;
            return true;
        }
        return false;
    }

//na finção remover item
// array_values
 
    public function remover(Item $item): bool { // bool para retornar um valor verdadeiro ou falso
        foreach ($this->itens as $key => $i) { //procura itens dentro do array
            if ($i === $item) {// verificação se o item atual é igual ao parâmetro passado anteriormente
                unset($this->itens[$key]);// removendo o item da lista
                $this->itens = array_values($this->itens);
                return true;// se a remoção der certo retornará como true(verdadeiro)
            }
        }
        return false;// se a remoção falhar retornará como falso
    }


    /*aumentar capacidade o metodo aumentar capacidade deverá receber o incremento como int 
    para adicionar sendo ele maior ou igual a capacidade Maxima*/
    public function aumentarCapacidade(int $incremento): void {
        $this->capacidadeMaxima += $incremento;
    }
}