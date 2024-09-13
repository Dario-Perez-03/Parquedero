<?php
require_once("classCliente.php");
require_once("classVehiculo.php");
require_once("classAdmin.php");
require_once("classParqueadero.php");
require_once("classEspacio.php");


$clientePepe = new Cliente("Pepe", 123, 150);
$vehiculoPepe = new Vehiculo("ABC123", "Toyota", "Rojo", $clientePepe, 150);

$aguacate = new Parqueadero();
$aguacate->espacio[0]->estacionar($vehiculoPepe);

echo $clientePepe->pagar() . "\n";
echo $aguacate->verEspacios() . "\n";


$admin1 = new Admin();
if ($admin1->login()) {
    do {
        echo "¿Qué desea hacer?\n";
        echo "1 = Ver espacios\n";
        echo "2 = Buscar vehiculo\n";
        echo "3 = Ver ganancias\n";
        echo "4 = Retirar Vehiculo\n";
        echo "5 = Salir\n";

        $accion = readline();
        switch ($accion) {
            case 1:
                $admin1->verEspacios($aguacate);
                break;
            case 2:
                $placa = readline("Ingrese la placa del vehículo a buscar: ");
                $admin1->buscarVehiculo($aguacate, $placa);
                break;
            case 3:
                $admin1->verGanancias($aguacate);
                break;
            case 4:
                $resultadoRetiro = $aguacate->retirarVehiculo("ABC123");
                echo $resultadoRetiro . "\n";
                break;
            case 5:
                echo "Saliendo...\n";
                break;
            default:
                echo "Acción no válida.\n";
                break;
        }
    } while ($accion != 5);
}