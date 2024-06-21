<?php
/*/19 - Levando em consideração o código a seguir:
class Conta
{
    private int $saldoEmCentavos;
    private string $nomeTitular;
    private string $numeroConta;

    public function setSaldoEmCentavos(int $saldoEmCentavos): void
    {
        $this->saldoEmCentavos = $saldoEmCentavos;
    }

    public function getSaldoEmCentavos(): int
    {
        return $this->saldoEmCentavos;
    }

    public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function setNumeroConta(int $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }
}

Como podemos torná-lo um pouco mais robusto, impedindo que o saldo seja manipulado livremente, por exemplo? 
Altere o código da classe para que o saldo seja alterado somente através das operações de saque e depósito.*/

class Conta
{
    protected int $saldoEmCentavos;
    private string $nomeTitular;
    private string $numeroConta;

    public function __construct(string $nomeTitular, string $numeroConta)
    {
        $this->nomeTitular = $nomeTitular;
        $this->numeroConta = $numeroConta;
        $this->saldoEmCentavos = 0;
    }

    public function sacar(int $valorEmCentavos): void
    {
        if ($valorEmCentavos > $this->saldoEmCentavos) {
            echo "Saldo insuficiente.";
            return;
        }

        $this->saldoEmCentavos -= $valorEmCentavos;
        echo "Saque de " . $valorEmCentavos . " centavos realizado com sucesso. Novo saldo: " . $this->saldoEmCentavos . " centavos.";
    }

    public function depositar(int $valorEmCentavos): void
    {
        $this->saldoEmCentavos += $valorEmCentavos;
        echo "Depósito de " . $valorEmCentavos . " centavos realizado com sucesso. Novo saldo: " . $this->saldoEmCentavos . " centavos.";
    }

    public function getSaldoEmCentavos(): int
    {
        return $this->saldoEmCentavos;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }
}
?>