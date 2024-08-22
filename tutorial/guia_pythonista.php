<?php
// ========================
// 1. Comentários
// ========================

// Comentário de linha única em PHP
// Equivalente ao # em Python

/*
   Comentário de múltiplas linhas em PHP
   Equivalente a """ ... """ em Python
*/

// ========================
// 2. Declaração de Variáveis
// ========================

$variavel = "Olá, PHP!"; // Declaração de variável em PHP
// Nota: Em PHP, todas as variáveis começam com o símbolo $
// Diferente de Python, onde não é necessário um prefixo

// ========================
// 3. Tipagem
// ========================

$inteiro = 42;          // Tipo integer
$flutuante = 3.14;      // Tipo float
$string = "Texto";      // Tipo string
$booleano = true;       // Tipo boolean

// Em Python, as variáveis são dinamicamente tipadas (e.g., `x = 10`)
// Em PHP, elas também são, mas as variáveis sempre começam com `$`

// ========================
// 4. Funções
// ========================

function soma($a, $b) {
    return $a + $b;
}

echo soma(5, 10); // Chamando a função soma e imprimindo o resultado

// Em Python: 
// def soma(a, b):
//     return a + b

// ========================
// 5. Estruturas de Controle
// ========================

// Condicionais IF/ELSE
$idade = 20;

if ($idade >= 18) {
    echo "Maior de idade\n";
} else {
    echo "Menor de idade\n";
}

// Em Python:
// if idade >= 18:
//     print("Maior de idade")
// else:
//     print("Menor de idade")

// ========================
// 6. Loops
// ========================

// Loop FOR
for ($i = 0; $i < 5; $i++) {
    echo "Iteração $i\n";
}

// Em Python:
// for i in range(5):
//     print(f"Iteração {i}")

// Loop WHILE
$contador = 0;

while ($contador < 5) {
    echo "Contador: $contador\n";
    $contador++;
}

// Em Python:
// contador = 0
// while contador < 5:
//     print(f"Contador: {contador}")
//     contador += 1

// ========================
// 7. Arrays (Listas em Python)
// ========================

$numeros = array(1, 2, 3, 4, 5); // Declaração de um array (lista)

foreach ($numeros as $numero) {
    echo "Número: $numero\n";
}

// Em Python:
// numeros = [1, 2, 3, 4, 5]
// for numero in numeros:
//     print(f"Número: {numero}")

// ========================
// 8. Dicionários (Associative Arrays em PHP)
// ========================

$idades = array(
    "Alice" => 25,
    "Bob" => 30,
    "Carol" => 35
);

foreach ($idades as $nome => $idade) {
    echo "$nome tem $idade anos\n";
}

// Em Python:
// idades = {"Alice": 25, "Bob": 30, "Carol": 35}
// for nome, idade in idades.items():
//     print(f"{nome} tem {idade} anos")

// ========================
// 9. Classes e Objetos
// ========================

class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar() {
        echo "Meu nome é $this->nome e eu tenho $this->idade anos.\n";
    }
}

$pessoa = new Pessoa("Alice", 30);
$pessoa->apresentar();

// Em Python:
// class Pessoa:
//     def __init__(self, nome, idade):
//         self.nome = nome
//         self.idade = idade
//     
//     def apresentar(self):
//         print(f"Meu nome é {self.nome} e eu tenho {self.idade} anos")
// 
// pessoa = Pessoa("Alice", 30)
// pessoa.apresentar()

// ========================
// 10. Conclusão
// ========================

/*
 * A principal diferença entre PHP e Python está na sintaxe:
 * - PHP exige ponto e vírgula (;) ao final de cada linha, enquanto Python usa indentação.
 * - Em PHP, variáveis começam com $, e a tipagem é dinâmica, mas é necessário prestar atenção às convenções.
 * - PHP tem uma forte orientação a web, por isso o uso de `echo` para imprimir diretamente no navegador.
 * - Em Python, o uso de `print` é comum para a saída de dados em consoles.
 */

//  Resumo do Conteúdo
// Comentários:

// PHP usa // para comentários de uma linha e /* ... */ para comentários de múltiplas linhas, similar ao # e """ ... """ em Python.
// Declaração de Variáveis:

// PHP usa $ antes do nome da variável, enquanto Python não exige nenhum símbolo prefixado.
// Tipagem:

// Ambas as linguagens são dinamicamente tipadas, mas PHP tem um prefixo $ nas variáveis.
// Funções:

// Declarações de funções em PHP são feitas com function, assim como em Python com def.
// Estruturas de Controle:

// Muito semelhantes, mas lembre-se do ponto e vírgula ; e das chaves {} em PHP.
// Loops:

// Estruturas de loop são quase idênticas, com diferenças na sintaxe.
// Arrays e Dicionários:

// Arrays em PHP são como listas em Python, e "Associative Arrays" em PHP são equivalentes a dicionários em Python.
// Classes e Objetos:

// A sintaxe de classes é similar, mas PHP exige o uso do $this-> para acessar atributos da classe, diferente de self. em Python.
