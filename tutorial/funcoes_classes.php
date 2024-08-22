<?php
// ========================
// FUNÇÕES EM PHP
// ========================

// 1. Definindo uma função simples
function saudacao() {
    echo "Olá, mundo!\n";
}

saudacao(); // Chama a função saudacao

// Em Python, seria:
// def saudacao():
//     print("Olá, mundo!")
// saudacao()

// 2. Funções com parâmetros
function somar($a, $b) {
    return $a + $b;
}

echo somar(5, 3) . "\n"; // Imprime 8

// Em Python, seria:
// def somar(a, b):
//     return a + b
// print(somar(5, 3))

// 3. Funções com parâmetros padrão
function cumprimentar($nome = "Visitante") {
    echo "Olá, $nome!\n";
}

cumprimentar(); // Usa o valor padrão "Visitante"
cumprimentar("Alice"); // Usa "Alice" como argumento

// Em Python, seria:
// def cumprimentar(nome="Visitante"):
//     print(f"Olá, {nome}!")
// cumprimentar()
// cumprimentar("Alice")

// 4. Funções com número variável de argumentos
function somar_tudo(...$numeros) {
    $soma = 0;
    foreach ($numeros as $numero) {
        $soma += $numero;
    }
    return $soma;
}

echo somar_tudo(1, 2, 3, 4) . "\n"; // Imprime 10

// Em Python, seria:
// def somar_tudo(*numeros):
//     return sum(numeros)
// print(somar_tudo(1, 2, 3, 4))

// ========================
// CLASSES EM PHP
// ========================

// 1. Criando uma classe simples
class Animal {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function falar() {
        echo "$this->nome faz algum som.\n";
    }
}

$animal = new Animal("Genérico");
$animal->falar(); // Imprime "Genérico faz algum som."

// Em Python, seria:
// class Animal:
//     def __init__(self, nome):
//         self.nome = nome
//
//     def falar(self):
//         print(f"{self.nome} faz algum som.")
// animal = Animal("Genérico")
// animal.falar()

// 2. Herança
class Cachorro extends Animal {
    public function falar() {
        echo "$this->nome diz: Au Au!\n";
    }
}

$cachorro = new Cachorro("Rex");
$cachorro->falar(); // Imprime "Rex diz: Au Au!"

// Em Python, seria:
// class Cachorro(Animal):
//     def falar(self):
//         print(f"{self.nome} diz: Au Au!")
// cachorro = Cachorro("Rex")
// cachorro.falar()

// 3. Modificadores de acesso
class Gato {
    private $nome; // Propriedade privada

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function falar() {
        echo "$this->nome diz: Miau!\n";
    }

    // Getter para acessar o nome
    public function getNome() {
        return $this->nome;
    }

    // Setter para modificar o nome
    public function setNome($novoNome) {
        $this->nome = $novoNome;
    }
}

$gato = new Gato("Mimi");
$gato->falar(); // Imprime "Mimi diz: Miau!"

// Acessando e modificando a propriedade privada através dos métodos
echo "Nome do gato: " . $gato->getNome() . "\n"; // Imprime "Nome do gato: Mimi"
$gato->setNome("Felix");
echo "Nome do gato atualizado: " . $gato->getNome() . "\n"; // Imprime "Nome do gato atualizado: Felix"

// Em Python, seria:
// class Gato:
//     def __init__(self, nome):
//         self.__nome = nome  # Propriedade privada
//
//     def falar(self):
//         print(f"{self.__nome} diz: Miau!")
//
//     # Getter
//     def get_nome(self):
//         return self.__nome
//
//     # Setter
//     def set_nome(self, novo_nome):
//         self.__nome = novo_nome
// gato = Gato("Mimi")
// gato.falar()
// print(f"Nome do gato: {gato.get_nome()}")
// gato.set_nome("Felix")
// print(f"Nome do gato atualizado: {gato.get_nome()}")

// 4. Métodos e Propriedades Estáticas
class Matematica {
    public static $pi = 3.14159;

    public static function areaCirculo($raio) {
        return self::$pi * ($raio ** 2);
    }
}

echo "Valor de PI: " . Matematica::$pi . "\n"; // Imprime "Valor de PI: 3.14159"
echo "Área do círculo: " . Matematica::areaCirculo(5) . "\n"; // Imprime "Área do círculo: 78.53975"

// Em Python, seria:
// class Matematica:
//     pi = 3.14159
//
//     @staticmethod
//     def area_circulo(raio):
//         return Matematica.pi * (raio ** 2)
// print(f"Valor de PI: {Matematica.pi}")
// print(f"Área do círculo: {Matematica.area_circulo(5)}")

// Explicação do Conteúdo
// Funções em PHP:

// Funções Simples: Declaração de funções em PHP usa a palavra-chave function, semelhante ao uso de def em Python.
// Funções com Parâmetros: Você pode passar parâmetros como em Python, e também definir valores padrão.
// Número Variável de Argumentos: Em PHP, usa-se ...$variavel para indicar que a função pode receber um número variável de argumentos, semelhante a *args em Python.
// Classes em PHP:

// Declaração de Classes: Similar a Python, mas em PHP, as variáveis e métodos da classe usam public, private, ou protected para definir a visibilidade.
// Construtor (__construct): PHP usa __construct como método construtor, que é equivalente ao __init__ em Python.
// Herança: Implementada de forma parecida em ambas as linguagens, mas a chamada de métodos da classe pai em PHP usa parent::metodo().
// Modificadores de Acesso: PHP utiliza public, private, e protected para controlar a visibilidade, enquanto Python usa convenções (como _nome para indicar privado).
// Métodos e Propriedades Estáticas: PHP usa static para métodos e propriedades que pertencem à classe em vez de instâncias individuais, similar ao @staticmethod e atributos de classe em Python.
