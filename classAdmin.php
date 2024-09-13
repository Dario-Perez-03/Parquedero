<?php
class Admin
{
    public $strNombre;
    public $intEdad;
    private $strPassword;

    public function __construct()
    {
        $this->strNombre = "Dario";
        $this->intEdad = 20;
        $this->strPassword = "dario123";
    }

    public function login()
    {
        $user = readline("Escribe tu nombre de usuario: ");
        $pass = readline("Escribe tu contraseña: ");
        if (($pass == $this->strPassword) && ($user == $this->strNombre)) {
            echo "Bienvenido " . $user;
            return true;
        } else if (($pass == $this->strPassword) && ($user != $this->strNombre)) {
            echo "Nombre de usuario invalido.\n";
            return false;
        } else if (($pass != $this->strPassword) && ($user == $this->strNombre)) {
            echo "Contraseña invalida\n";
            return false;
        } else if (($pass != $this->strPassword) && ($user != $this->strNombre)) {
            echo "Usuario y contraseña invalidos\n";
            return false;
        }
    }

    public function verEspacios($parqueadero)
    {
        echo $parqueadero->verEspacios();
    }

    public function buscarVehiculo($parqueadero, $strPlaca)
    {
        echo $parqueadero->buscarVehiculo($strPlaca);
    }

    public function verGanancias($parqueadero)
    {
        echo "Ganancias totales: " . $parqueadero->ganancias() . " USD\n";
    }
}
