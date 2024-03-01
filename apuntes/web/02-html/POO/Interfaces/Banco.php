<?php
interface IPlataformaPago
{
    public function estableceConexion(): bool;
    public function compruebaSeguridad(): bool;
    public function pagar(string $cuenta, int $cantidad);
}

class BancoMalvado implements IPlataformaPago
{
    public function estableceConexion(): bool
    {
        echo "Conexión establecida \n";
        return true;
    }

    public function compruebaSeguridad(): bool
    {
        echo "Conexión segura establecida \n";
        return true;
    }

    public function pagar(string $cuenta, int $cantidad)
    {
        echo "Pago realizado de $cantidad a la cuenta $cuenta en Banco Malvado \n";
    }
}

class BitCoinConan implements IPlataformaPago
{
    public function estableceConexion(): bool
    {
        echo "Conexión a la red Bitcoin establecida \n";
        return true;
    }

    public function compruebaSeguridad(): bool
    {
        echo "Seguridad de BitCoinConan verificada \n";
        return true;
    }

    public function pagar(string $cuenta, int $cantidad)
    {
        echo "Pago realizado de $cantidad a la cuenta $cuenta en BitCoinConan \n";
    }
}

class BancoMaloMalisimo implements IPlataformaPago
{
    public function estableceConexion(): bool
    {
        echo "Conexión ultra insegura establecida en BancoMaloMalisimo \n";
        return true;
    }

    public function compruebaSeguridad(): bool
    {
        echo "Seguridad inexistente en BancoMaloMalisimo \n";
        return true;
    }

    public function pagar(string $cuenta, int $cantidad)
    {
        echo "Pago realizado de $cantidad a la cuenta $cuenta en BancoMaloMalisimo \n";
    }
}

function realizarTransaccion(IPlataformaPago $p, string $cuenta, int $cantidad)
{
    $p->estableceConexion();
    $p->compruebaSeguridad();
    $p->pagar($cuenta, $cantidad);
}

$plataformas = [new BancoMalvado(), new BitCoinConan(), new BancoMaloMalisimo()];
$plataformarandom = $plataformas[array_rand($plataformas)];

realizarTransaccion($plataformarandom, "Daniel García", 100);
?>