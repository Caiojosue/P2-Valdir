<?php
require_once ('inventario.php');
require_once ('player.php');
require_once ('itemataque.php');
require_once ('itemdefesa.php');
require_once ('itemmagia.php');

$player1 = new Player('CaioSando');
$player2 = new Player('Magrinho');

$ataque1 = new Ataque('Espada');
$ataque2 = new Ataque('Machado');
$defesa1 = new Defesa('Escudo');
$defesa2 = new Defesa('Armadura');
$magia1 = new Magia('Bola de Fogo');
$magia2 = new Magia('Relâmpago');

echo"<h2>Bem vindo ao nosso Jogo</h2>";

echo "<h3>Players do Game</h3>";
echo "{$player1->getNickname()}:\n Nível: {$player1->getNivel()}, Capacidade do Inventário: {$player1->getInventario()->getCapacidadeMaxima()}<br>";
echo "{$player2->getNickname()}:\n Nível: {$player2->getNivel()}, Capacidade do Inventário: {$player2->getInventario()->getCapacidadeMaxima()}<br><br>";
//player1 atualmente no nivel 1 e com 20 de capacidade no inventario
//player2 atualmente no nivel 2 e com 20 de capacidade no inventario

echo "<strong>{$player1->getNickname()} coletando itens:</strong><br><br>";
if ($player1->coletarItem($ataque1)) {
    echo "Coletou: {$ataque1->getNome()}<br>";
} else {
    echo "Não conseguiu coletar: {$ataque1->getNome()}<br>";
}
if ($player1->coletarItem($defesa1)) {
    echo "Coletou: {$defesa1->getNome()}<br>";
} else {
    echo "Não conseguiu coletar: {$defesa1->getNome()}<br>";
}
if ($player1->coletarItem($magia1)) {
    echo "Coletou: {$magia1->getNome()}<br>";
} else {
    echo "Não conseguiu coletar: {$magia1->getNome()}<br>";
}
if ($player1->coletarItem($ataque2)) {
    echo "Coletou: {$ataque2->getNome()}<br><br>";
} else {
    echo "Não conseguiu coletar: {$ataque2->getNome()}<br><br>";
}
echo "<br>";

echo "<strong>Falta de espaço</strong><br>";
if ($player1->coletarItem($defesa2)) {
    echo "Coletou: {$defesa2->getNome()}<br>";
} else {
    echo "Não conseguiu coletar: {$defesa2->getNome()}<br>";
}
if ($player1->coletarItem($magia2)) {
    echo "Coletou: {$magia2->getNome()}<br><br>";
} else {
    echo "Não conseguiu coletar: {$magia2->getNome()}<br><br>";
}

echo "Capacidade restante do inventário do {$player1->getNickname()}: {$player1->getInventario()->capacidadeLivre()}<br><br>";

echo "<--------------------------------------------------------------------------------><br><br>";

echo "<strong>{$player2->getNickname()} coletando itens:</strong><br><br>";

if ($player2->coletarItem($defesa2)) {
    echo "Coletou: {$defesa2->getNome()}<br><br>";
} else {
    echo "Não conseguiu coletar: {$defesa2->getNome()}<br><br>";
}
if ($player2->coletarItem($magia2)) {
    echo "Coletou: {$magia2->getNome()}<br>";
} else {
    echo "Não conseguiu coletar: {$magia2->getNome()}<br>";
}
if ($player2->coletarItem($defesa1)) {
    echo "Coletou: {$defesa1->getNome()}<br>";
} else {
    echo "Não conseguiu coletar: {$defesa1->getNome()}<br>";
}
echo "<br>";

echo "Capacidade restante do inventário do {$player2->getNickname()}: {$player2->getInventario()->capacidadeLivre()}<br><br>";

echo "<-------------------------------------------------------------------------------->";

echo "<h3>{$player1->getNickname()} soltando um item</h3>";
if ($player1->soltarItem($defesa1)) {
    echo "Soltou: {$defesa1->getNome()}<br>";
} else {
    echo "Não conseguiu soltar: {$defesa1->getNome()}<br>";
}
echo "Capacidade restante do inventário do {$player1->getNickname()}: {$player1->getInventario()->capacidadeLivre()}<br><br>";

echo "<-------------------------------------------------------------------------------->";

echo "<h3>{$player1->getNickname()} e\n {$player2->getNickname()} subindo de nível</h3>";
$player1->subirNivel();
$player2->subirNivel();
$player1->subirNivel();

echo "<strong>{$player2->getNickname()}</strong> \n Nivel: {$player2->getNivel()}<br>";
echo "Nova capacidade do inventário: {$player2->getInventario()->getCapacidadeMaxima()}<br><br>";
echo "Capacidade restante do inventario do {$player2->getNickname()}: {$player2->getInventario()->capacidadeLivre()}<br><br>";

echo "<strong>{$player1->getNickname()}</strong> \n Nivel: {$player1->getNivel()}<br>";
echo "Nova capacidade do inventário: {$player1->getInventario()->getCapacidadeMaxima()}<br><br>";
echo "Capacidade restante do inventario do {$player1->getNickname()} {$player1->getInventario()->capacidadeLivre()}<br><br>";