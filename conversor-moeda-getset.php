<?php
class Dinheiro {
    private $dolar;
    private $dolarhoje;

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
    private $real;

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
$valor->setDolar(3.50);
$valor->setDolarhoje(4.00);

echo $valor->getDetalhes();
echo $valor->ConverteDolarReal();
?>