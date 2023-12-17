<?php

declare(strict_types=1);

namespace App\AppCore\Model;

use PDO;
class Model
{   //propagace členské proměnné z konstruktoru, ušetřím si deklaraci a definici(přiřazení hodnoty)
    public function __construct(protected PDO $connection)
    {
    }

    public function __destruct()
    {
        unset($this->connection);
    }
}
