<?php
require_once ('inventario.php');

class Player {
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;// class e variavel

    public function __construct(string $nickname) {
        $this->nickname = $nickname;
        $this->nivel = 1;
        $this->inventario = new Inventario();
    }

    public function setNickname($nickname){
        $this->nickname = $nickname;
    }

    public function getNickname(): string {
        return $this->nickname;
    }

    public function setNivel($nivel){
        $this->nivel = $nivel;
    }

    public function getNivel(): int {
        return $this->nivel;
    }

    public function setInventario($inventario){
        $this->inventario = $inventario;
    }

    public function getInventario(): Inventario {
        return $this->inventario;
    }

    public function coletarItem(Item $item): bool {
        return $this->inventario->adicionar($item);
    }

    public function soltarItem(Item $item): bool {
        return $this->inventario->remover($item);
    }

    public function subirNivel(): void {
        $this->nivel++;
        $incremento = $this->nivel * 3;
        $this->inventario->aumentarCapacidade($incremento);
    }
// quando o metodo subir nivel é usado é incrementado mais 1 nivel ao player e o incremento multiplicado por 3 aumentado a capacidade do inventario
// e cada vez que ele for subindo de nivel sua capacidade vai aumentando
// por enquanto não decidimos um nivel maximo
}