<?php

declare(strict_types=1);

namespace App\Controllers;

use App\AppCore\View\View;

class JakToFungujeController
{
    public function index(): void
    {
        View::make('JakToFunguje', ['title' => 'Jak to funguje']);
    }
}

