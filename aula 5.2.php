<?php
abstract class Conta {
    public $saldo = 0;

    abstract function depositar($valor);

    abstract function sacar($valor);
}

class ContaCorrente extends Conta {
    function depositar($valor) {
        $this->saldo += $valor;
    }

    function sacar($valor) {
        $this->saldo -= $valor;
    }

    function transferir($contaDestino, $valor) {
        $this->saldo -= $valor;
        $contaDestino->depositar($valor);
    }
}

$novaConta1 = new ContaCorrente();
$novaConta2 = new ContaCorrente();

$novaConta1->transferir($novaConta2, 500);

echo "Saldo da conta 1: " . $novaConta1->saldo . "\n";
echo "Saldo da conta 2: " . $novaConta2->saldo . "\n";
?>
