<?php

namespace Mini\Controller;

class EjemploController
{
    private $prop1 = 'Propiedad 1';

    public function index()
    {
        echo 'Estoy en el método index del controlador de ejemplo<br>';
    }
    public function acercade()
    {
        echo 'Somos el curso de segundo DAW del Ingeniero<br>';
        d($this);
        exit();
    }
}