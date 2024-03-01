<?php
/**
 * Clase para representar una Cuenta Bancaria
 */
class CuentaBancaria {
    /** @var string $titular Titular de la cuenta */
    public $titular;
    
    /** @var float $saldo Saldo de la cuenta */
    public $saldo;

    /**
     * Constructor de la clase CuentaBancaria.
     * @param string $titular Titular de la cuenta.
     * @param float $saldoInicial Saldo inicial de la cuenta (opcional).
     */
    public function __construct(string $titular, float $saldoInicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    /**
     * Deposita una cantidad a la cuenta.
     * @param float $cantidad Cantidad a depositar.
     */
    public function depositar($cantidad) {
        $this->saldo += $cantidad;
    }

    /**
     * Retira una cantidad de la cuenta.
     * @param float $cantidad Cantidad a retirar.
     * @return string Mensaje de éxito o error.
     */
    public function retirar($cantidad) {
        if ($this->saldo >= $cantidad) {
            $this->saldo -= $cantidad;
        } else {
            return "Saldo insuficiente";
        }
    }

    /**
     * Consulta el saldo de la cuenta.
     * @return float Saldo actual.
     */
    public function consultarSaldo() {
        return $this->saldo;
    }

    /**
     * Representación en cadena de texto del objeto.
     * @return string Representación en cadena del objeto.
     */
    public function __toString() {
        return "Titular: $this->titular, Saldo: $this->saldo";
    }
}

function fusionar(CuentaBancaria &$a, CuentaBancaria &$b){
    /*$destino = new CuentaBancaria("Jorge");
    $origen = new CuentaBancaria("Milloneti", 3000000);
    $destino->fusionar($origen);
    echo $origen."<br>";
    echo $destino."<br>";
    
    Titular: (deshabilitada) Milloneti, Saldo: 0
    Titular: Jorge (Milloneti), Saldo: 3000000*/

    $a->saldo += $b->saldo;
    $b->saldo =0;
    
    $a->titular .= " ($b->titular)";
    $b->titular = "(deshabilitada) ".$b->titular;

    echo "Titular: $b->titular, Saldo: $b->saldo<br>";
    echo "Titular: $a->titular, Saldo: $a->saldo";
}

$cuenta1 = new CuentaBancaria("Dani", 300);
$cuenta2 = new CuentaBancaria("Juan", 700);

fusionar($cuenta1, $cuenta2);
?>