<?php
class Espacio
{
    public $intPiso;
    public $intCapacidad;
    public $vehiculo;

    public function __construct($intPiso, $intCapacidad)
    {
        $this->intPiso = $intPiso;
        $this->intCapacidad = $intCapacidad;
        $this->vehiculo = null;
    }

    public function estacionar($vehiculo)
    {
        $this->vehiculo = $vehiculo;
    }

    public function retirarVehiculo()
    {
        $this->vehiculo = null;
    }

    public function ocupado()
    {
        return $this->vehiculo !== null;
    }
}
?>
