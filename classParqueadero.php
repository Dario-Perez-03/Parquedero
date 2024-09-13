<?php
require_once("classEspacio.php");
require_once("classVehiculo.php");

class Parqueadero
{
    public $strNombre;
    public $espacio = [];
    private $ganancia;

    public function __construct()
    {
        $this->strNombre = "El Aguacate";
        for ($intPiso = 1; $intPiso <= 4; $intPiso++) {
            for ($intCapacidad = 1; $intCapacidad <= 10; $intCapacidad++) {
                $this->espacio[] = new Espacio($intPiso, $intCapacidad);
            }
        }
        $this->ganancia = 0;
    }

    public function verEspacios()
    {
        return print_r($this->espacio, true);
    }

    public function ganancias()
    {
        return $this->ganancia;
    }

    public function retirarVehiculo($strPlaca)
    {
        foreach ($this->espacio as $espacio) {
            if ($espacio->ocupado() && $espacio->vehiculo->strPlaca === $strPlaca) {
                $vehiculo = $espacio->vehiculo;
                $cliente = $vehiculo->cliente;

                $tiempo = $cliente->tiempo;

                $valorPagar = $cliente->pagar();

                $this->ganancia += ($tiempo / 60) * 2;

                $espacio->retirarVehiculo();

                return "Vehículo retirado. " . $valorPagar;
            }
        }
        return "Vehículo no encontrado";
    }

    public function buscarVehiculo($strPlaca)
    {
        foreach ($this->espacio as $espacio) {
            if ($espacio->ocupado() && $espacio->vehiculo->strPlaca === $strPlaca) {
                $vehiculo = $espacio->vehiculo;
                $cliente = $vehiculo->cliente;
                return "Vehículo encontrado: " . $vehiculo->strPlaca . " Cliente: " . $cliente->strNombre."\n";
            }
        }
        return "Vehículo no encontrado\n";
    }
}
?>
