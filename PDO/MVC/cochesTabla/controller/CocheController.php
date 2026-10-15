<?php

class CocheController
{
    public $coches = [];

    public function __construct()
    {
        $this->coches = [
            1 => new Coche("Wolkswagen", "Polo", "Negro", "Rebecca"),
            2 => new Coche("Toyota", "Carolla", "Verde", "Markos"),
            3 => new Coche("Skoda", "Octavia", "Gris", "Mario"),
            4 => new Coche("Kia", "Niro", "Azul", "Jairo")
        ];
    }

    public function index()
    {
        /**
         * @var mixed
         * coge el array con todos los objetos que sean tipo coche y los guarda en una variable local llamada rowset
         */
        $rowset = $this->coches;
        require("view/index.php");
    }

    public function ver(int $id)
    {
        if (array_key_exists($id, $this->coches)) {
            $row = $this->coches[$id];
            require("view/ver.php");
        }
        else {
            $this->index();
        }
    }

    public function color(string $color)
    {
        $cochesFiltrados = [];
        
        foreach($this->coches as $coche) {
            if(strcasecmp($coche->color, $color) == 0) {
                $cochesFiltrados[] = $coche;
            }
        }

        if (!empty($cochesFiltrados)) {
            $rowset = $cochesFiltrados;
            require("view/color.php");
        }
        else {
            $this->index();
        }
    }
}
