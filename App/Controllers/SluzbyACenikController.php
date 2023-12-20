<?php

declare(strict_types=1);

namespace App\Controllers;

use App\AppCore\View\View;

class SluzbyACenikController
{
    public function index(): void
    {
        View::make('SluzbyACenik', ['title' => 'Služby a Ceník']);
    }
}