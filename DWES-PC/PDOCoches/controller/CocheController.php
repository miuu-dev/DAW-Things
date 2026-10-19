<?php
require_once("./model/Coche.php");
class CocheController
{
    public $coches;
    function __construct()
    {
        $this->coches = Coche::getAll();
    }

    public function index() {
        $rowset = $this->coches; // <-- Asegúrate de que esto esté presente
        require("view/index.php");
    }

    public function formularioAlta($mensaje = null)
    {
        require("view/formularioInsercion.php");
    }

    public function ver(int $id)
    {
        $row = Coche::getCoche($id); // Aprovechas tu método que busca por ID en la BD
        if ($row != null) {
            require("view/ver.php");
        } else {
            $this->index();
        }
    }

    public function verColor(string $color)
    {
        //echo "has llegado al color, enhorabuena, ahora haz el resto que no se hace solo";
        $rowset = [];
        foreach ($this->coches as $coche) {
            if ($coche->color == $color) {
                array_push($rowset, $coche);
            }
        }
        require("view/index.php");
    }

    public function baja(int $id)
    {
        $victima = Coche::getCoche($id);
        if ($victima != null) {
            Coche::borrarCoche($id);
            $this->coches = Coche::getAll();
            $this->index();
        } else {
            echo "no existe ese coche";
        }
    }

    public function alta(array $data)
    {
        // variables de cada campo
        $marca = trim($data["marca"] ?? '');
        $modelo = trim($data["modelo"] ?? '');
        $color = trim($data["color"] ?? '');
        $propietario = trim($data["propietario"] ?? '');
        $precio = $data["precio"] ?? '';

        // validar
        if ($marca == '' || $modelo == '' || $color == '' || $propietario == '') {
            $this->formularioAlta("Es obligatorio rellenar todos los campos");
            return;
        }

        if (!is_numeric($precio) || $precio <= 0) {
            $this->formularioAlta("El precio ha de ser mayor que 0");
            return;
        }

        // creamos el objeto
        $coche = new Coche($marca, $modelo, $color, $propietario, (float)$precio, null);

        // insertamos
        if ($coche->insertarCoche()) {
            $this->coches = Coche::getAll();
            $this->index();
        } else {
            $this->formularioAlta("No se pudo dar de alta");
        }
    }
}
