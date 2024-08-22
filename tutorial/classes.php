<?php
// ========================
// CLASSES EM PHP: UM GUIA COMPLETO
// ========================

// 1. DEFINIÇÃO DE UMA CLASSE
class Carro {
    // Propriedades (ou atributos)
    public $marca;
    public $modelo;
    private $ano;

    // Construtor - Inicializa a classe
    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->setAno($ano); // Usando o setter para proteger a lógica
    }

    // Método para definir o ano do carro
    public function setAno($ano) {
        if ($ano > 1885) { // O primeiro carro foi inventado em 1886
            $this->ano = $ano;
        } else {
            $this->ano = null;
        }
    }

    // Método para obter o ano do carro
    public function getAno() {
        return $this->ano;
    }

    // Método para exibir informações sobre o carro
    public function exibirInfo() {
        echo "Marca: $this->marca\n";
        echo "Modelo: $this->modelo\n";
        echo "Ano: " . ($this->ano ?: "Desconhecido") . "\n";
    }
}

// Instanciando um objeto da classe Carro
$meuCarro = new Carro("Toyota", "Corolla", 2020);
$meuCarro->exibirInfo(); // Imprime informações do carro

// ========================
// 2. HERANÇA
// ========================

class Veiculo {
    public $marca;
    public $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function exibirInfo() {
        echo "Marca: $this->marca, Modelo: $this->modelo\n";
    }
}

// Carro agora herda de Veiculo
class CarroEsportivo extends Veiculo {
    private $velocidadeMaxima;

    public function __construct($marca, $modelo, $velocidadeMaxima) {
        parent::__construct($marca, $modelo); // Chama o construtor da classe pai
        $this->velocidadeMaxima = $velocidadeMaxima;
    }

    // Sobrescrita de método
    public function exibirInfo() {
        parent::exibirInfo(); // Chama o método da classe pai
        echo "Velocidade Máxima: $this->velocidadeMaxima km/h\n";
    }
}

$carroEsportivo = new CarroEsportivo("Ferrari", "F8", 340);
$carroEsportivo->exibirInfo(); // Imprime informações do carro esportivo

// ========================
// 3. POLIMORFISMO
// ========================

class Motocicleta extends Veiculo {
    public function exibirInfo() {
        echo "Esta é uma motocicleta.\n";
        parent::exibirInfo();
    }
}

$veiculos = [
    new CarroEsportivo("Lamborghini", "Aventador", 350),
    new Motocicleta("Harley-Davidson", "Iron 883")
];

foreach ($veiculos as $veiculo) {
    $veiculo->exibirInfo(); // Mostra as informações corretas para cada tipo de veículo
}

// ========================
// 4. ENCAPSULAMENTO
// ========================

class ContaBancaria {
    private $saldo = 0;

    public function depositar($quantia) {
        if ($quantia > 0) {
            $this->saldo += $quantia;
        }
    }

    public function sacar($quantia) {
        if ($quantia > 0 && $quantia <= $this->saldo) {
            $this->saldo -= $quantia;
            return true;
        }
        return false;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$minhaConta = new ContaBancaria();
$minhaConta->depositar(1000);
$minhaConta->sacar(500);
echo "Saldo atual: " . $minhaConta->getSaldo() . "\n"; // Imprime 500

// ========================
// 5. MÉTODOS E PROPRIEDADES ESTÁTICAS
// ========================

class Calculadora {
    public static $pi = 3.14159;

    public static function areaCirculo($raio) {
        return self::$pi * ($raio ** 2);
    }
}

echo "Valor de PI: " . Calculadora::$pi . "\n"; // Imprime 3.14159
echo "Área do círculo: " . Calculadora::areaCirculo(10) . "\n"; // Imprime 314.159

// ========================
// 6. INTERFACES
// ========================

interface VeiculoInterface {
    public function acelerar();
    public function frear();
}

class CarroNovo implements VeiculoInterface {
    public function acelerar() {
        echo "Carro está acelerando.\n";
    }

    public function frear() {
        echo "Carro está freando.\n";
    }
}

$carroNovo = new CarroNovo();
$carroNovo->acelerar(); // Imprime "Carro está acelerando."
$carroNovo->frear(); // Imprime "Carro está freando."

// ========================
// 7. CLASSES ABSTRATAS
// ========================

abstract class Forma {
    abstract public function calcularArea();
}

class Quadrado extends Forma {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

$quadrado = new Quadrado(4);
echo "Área do quadrado: " . $quadrado->calcularArea() . "\n"; // Imprime 16

// ========================
// 8. TRAITS
// ========================

trait Aceleracao {
    public function acelerar() {
        echo "Acelerando...\n";
    }
}

trait Frenagem {
    public function frear() {
        echo "Freando...\n";
    }
}

class Moto {
    use Aceleracao, Frenagem;
}

$moto = new Moto();
$moto->acelerar(); // Imprime "Acelerando..."
$moto->frear(); // Imprime "Freando..."

// ========================
// 9. NAMESPACES
// ========================

// namespace Veiculos\Terrestres;

// class Caminhao {
//     public function exibirInfo() {
//         echo "Este é um caminhão.\n";
//     }
// }

// // Uso de namespaces
// $meuCaminhao = new \Veiculos\Terrestres\Caminhao();
// $meuCaminhao->exibirInfo(); // Imprime "Este é um caminhão."

// Explicação do Conteúdo
// Definição de uma Classe:

// Classes em PHP são definidas com a palavra-chave class, e atributos podem ser públicos (public), privados (private), ou protegidos (protected).
// O construtor é definido com __construct, e acessamos atributos e métodos da classe usando $this->.
// Herança:

// PHP suporta herança única, onde uma classe pode herdar de outra. A classe filha pode sobrescrever métodos da classe pai usando parent::metodo() para acessar a versão original.
// Polimorfismo:

// Em PHP, polimorfismo é implementado permitindo que diferentes classes implementem o mesmo método de maneiras diferentes.
// Encapsulamento:

// Atributos privados só podem ser acessados ou modificados através de métodos públicos, conhecidos como getters e setters.
// Métodos e Propriedades Estáticas:

// Métodos e propriedades que pertencem à classe, e não a instâncias individuais, são declarados com a palavra-chave static.
// Interfaces:

// Interfaces em PHP definem métodos que devem ser implementados por uma classe. Uma classe pode implementar várias interfaces.
// Classes Abstratas:

// Classes abstratas não podem ser instanciadas diretamente e podem conter métodos abstratos que devem ser implementados por subclasses.
// Traits:

// Traits em PHP permitem o reuso de métodos em várias classes, evitando limitações da herança única.
// Namespaces:

// Namespaces em PHP organizam e agrupam classes, funções e constantes para evitar colisões de nomes.
