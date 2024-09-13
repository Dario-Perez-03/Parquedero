<?php
require_once("classCliente.php");

class Vehiculo
{
    public $strPlaca;
    public $strMarca;
    public $strColor;
    public $cliente;

    public function __construct(string $strPlaca, string $strMarca, string $strColor, Cliente $cliente, int $tiempo)
    {
        $this->strPlaca = $strPlaca;
        $this->strMarca = $strMarca;
        $this->strColor = $strColor;
        $this->cliente = $cliente;
        $this->cliente->tiempo = $tiempo;
    }
}
?>
