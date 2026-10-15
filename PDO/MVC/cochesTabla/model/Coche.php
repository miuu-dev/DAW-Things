<?php

    class Coche {
        public string $marca; 
        public string $modelo;
        public string $color;
        public string $propietario;

        public function __construct(string $miMarca, string $miModelo, string $miColor, string $miPropietario) {
            $this->marca = $miMarca;
            $this->modelo = $miModelo;
            $this->color = $miColor;
            $this->propietario = $miPropietario;
        }

        public function setmarca(string $miMarca) {
            $this->marca = $miMarca;
        }

        public function setmodelo(string $miModelo) {
            $this->modelo = $miModelo;
        }

        public function setcolor(string $miColor) {
            $this->color = $miColor;
        }

        public function setpropietario(string $miPropietario) {
            $this->propietario = $miPropietario;
        }


        public function getmarca() {
            return $this->marca;
        }

        public function getmodelo() {
            return $this->modelo;
        }

        public function getcolor() {
            return $this->color;
        }

        public function getpropietario() {
            return $this->propietario;
        }
    }