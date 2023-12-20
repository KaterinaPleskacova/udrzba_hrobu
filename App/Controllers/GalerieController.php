<?php

declare(strict_types=1);

namespace App\Controllers;

use App\AppCore\View\View;

class GalerieController
{
    public function index(): void
    {
        View::make('Galerie', ['title' => 'Galerie']);
    }
}
