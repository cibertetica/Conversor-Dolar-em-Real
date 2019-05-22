<?php
class Dinheiro { // class dinheiro armazana os dólares. Eu poderia ter usado class Dolar para simplificar, mas não queria que o código ficasse muito confuso.
    private $dolar; // variável dolar -> valor que vai ser convertido em reais
    private $dolarhoje; // variável dolarhoje -> cotação do dólar utilizada

    public function setDolar($dolar) {
        $this->dolar = $dolar;
    }

    public function getDolar() {
        return $this->dolar;
    }

    public function setDolarhoje($dolarhoje) {
        $this->dolarhoje = $dolarhoje;
    }

    public function getDolarhoje() {
        return $this->dolarhoje;
    }
}


class Conversao extends Dinheiro {
    private $real; // variável real -> o resultado do valor em reais do valor em dólares especificado

    public function setReal($real) {
        $this->real = $real;
    }

    public function getReal() {
        return $this->real;
    }

    public function getDetalhes() {
        echo "O dólar hoje está U$$ {$this->getDolarhoje()}.<br> O valor em dólares para ser convertido em reais declarado é U$$ {$this->getDolar()}.<br>";
    }

    public function ConverteDolarReal() {
        $valor = $this->getDolar() * $this->getDolarhoje();
        echo "U$$ {$this->getDolar()} hoje equivale a R$ $valor.";
    }
}

$valor = new Conversao;
$valor->setDolar(10.50);
$valor->setDolarhoje(4.00);

echo $valor->getDetalhes(); // imprime os detalhes iniciais, o dólar passado.
echo $valor->ConverteDolarReal(); // imprime o resultado da conversão.
?>