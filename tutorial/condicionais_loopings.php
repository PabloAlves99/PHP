<?php

// ========================
// CONDICIONAIS EM PHP
// ========================


// ELSEIF - Adiciona uma nova condição se a primeira for falsa.
$nota = 75;

if ($nota >= 90) {
    echo "Você tirou A.\n";
} elseif ($nota >= 80) {
    echo "Você tirou B.\n";
} elseif ($nota >= 70) {
    echo "Você tirou C.\n";
} else {
    echo "Você precisa estudar mais.\n";
}

// SWITCH - Uma alternativa para múltiplos IFs quando se compara a mesma variável.
$diaDaSemana = 3;

switch ($diaDaSemana) {
    case 1:
        echo "Hoje é Segunda-feira.\n";
        break;
    case 2:
        echo "Hoje é Terça-feira.\n";
        break;
    case 3:
        echo "Hoje é Quarta-feira.\n";
        break;
    case 4:
        echo "Hoje é Quinta-feira.\n";
        break;
    case 5:
        echo "Hoje é Sexta-feira.\n";
        break;
    case 6:
        echo "Hoje é Sábado.\n";
        break;
    case 7:
        echo "Hoje é Domingo.\n";
        break;
    default:
        echo "Dia inválido.\n";
}

// ========================
// LOOPINGS EM PHP
// ========================

// FOR - Loop usado quando você sabe o número exato de iterações.
for ($i = 1; $i <= 5; $i++) {
    echo "Iteração número $i no loop FOR.\n";
}

// WHILE - Loop que continua enquanto uma condição é verdadeira.
$contador = 1;

while ($contador <= 5) {
    echo "Iteração número $contador no loop WHILE.\n";
    $contador++;
}

// DO-WHILE - Semelhante ao WHILE, mas a condição é verificada após a execução do loop, garantindo que o loop execute pelo menos uma vez.
$contador = 1;

do {
    echo "Iteração número $contador no loop DO-WHILE.\n";
    $contador++;
} while ($contador <= 5);

// FOREACH - Usado para iterar sobre arrays.
$nomes = ["Alice", "Bob", "Carol"];

foreach ($nomes as $nome) {
    echo "Olá, $nome! Bem-vindo ao loop FOREACH.\n";
}

// FOREACH com chave e valor.
$idades = [
    "Alice" => 25,
    "Bob" => 30,
    "Carol" => 35
];

foreach ($idades as $nome => $idade) {
    echo "$nome tem $idade anos.\n";
}


// DO-WHILE: Similar ao WHILE, mas garante que o código dentro do loop seja executado pelo menos uma vez.
// FOREACH: Específico para percorrer arrays, simplifica a iteração ao não precisar de um contador manual.
