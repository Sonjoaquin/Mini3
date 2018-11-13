<?php

namespace Mini\Model;

use Mini\Core\Database;

Class Pregunta
{
    public function getAll()
    {
        $conn = Database::getInstance()->getDatabase();

        $ssql = 'SELECT * FROM preguntas';

        $query = $conn->prepare($ssql);

        $query->execute();

        return $query->fetchAll();
    }

    public static function insert($datos)
    {

    }
}
