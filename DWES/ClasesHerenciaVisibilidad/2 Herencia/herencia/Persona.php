<?php
class Persona
{
    // Propiedades de la clase padre
    public $nombre;
    public $apellido1;
    public $apellido2;
    public $edad;

    // Método para establecer el nombre
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    // Método para establecer los apellidos
    public function setApellidos($apellido1, $apellido2)
    {
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
    }

    // Método para obtener el nombre completo (concatenado)
    public function getApellidos()
    {
        return $this->apellido1 . " " . $this->apellido2;
    }
}

// traits
trait SaludoLatinoamericano {
    public function saludoLatinoamericano() {
        return "Qué onda wey!";
    }
}

trait SaludoAleman {
    public function saludoAleman() {
        return "Guten Morgen";
    }
}

class Peruano extends Persona
{
    // Propiedades adicionales específicas de la clase Peruano
    public $departamento;
    public $ciudad;

    // Extendiendo el método de la clase padre
    public function setApellidos($apellido1, $apellido2)
    {
        // Primero, ejecuta el método original de la clase Persona
        parent::setApellidos($apellido1, $apellido2);

        // Luego, agrega una nueva funcionalidad
        echo "Los apellidos se asignaron con éxito";
    }

    use SaludoLatinoamericano;
}

class Chileno extends Persona
{
    // Propiedades adicionales específicas de la clase Chileno
    public $comuna;
    public $region;

    // Sobrescribiendo el método de la clase padre
    public function setApellidos($apellido1, $apellido2)
    {
        // Se invierte el orden de asignación para esta clase específica
        $this->apellido1 = $apellido2;
        $this->apellido2 = $apellido1;
    }

    use SaludoLatinoamericano;
}

class Aleman extends Persona {
    use SaludoAleman;
}
