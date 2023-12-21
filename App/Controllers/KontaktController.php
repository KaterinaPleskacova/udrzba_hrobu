<?php

declare(strict_types=1);

namespace App\Controllers;

use App\AppCore\View\View;

class KontaktController
{
    public function index(): void
    {
        View::make('Kontakt', ['title' => 'Kontakt']);
    }
}
