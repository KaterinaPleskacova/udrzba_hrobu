<?php

declare(strict_types=1);

namespace App\Controllers;

use App\AppCore\View\View;

class AppErrorController
{
    public function index(): void
    {
        View::make('AppError', ['title' => 'Došlo k chybě!']);
    }
}
