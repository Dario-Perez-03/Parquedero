<?php
class Cliente
{
    public $strNombre;
    public $intDNI;
    public $tiempo;

    public function __construct(string $nombre, int $DNI, int $tiempo)
    {
        $this->strNombre = $nombre;
        $this->intDNI = $DNI;
        $this->tiempo = $tiempo;
    }

    public function horaEstacionamiento(): float
    {
        return $this->tiempo / 60;
    }

    public function pagar(): string
    {
        $horas = $this->horaEstacionamiento();
        return "Valor a pagar: " . ($horas * 2) . " USD";
    }
}
?>
