<?php

declare(strict_types=1);

namespace App\AppCore\Routing;

use App\AppCore\Enums\HttpMethod;
use Closure;
class Route
{
    public function __construct(
        public string $route,
        public HttpMethod $method,  //vytvořím si výčtový datový typ - enumerace - enum - aby mi tam někdo nemohl vložit nějaké nesmysly
        public array|Closure $handler, // [JmenoKontroleru, metoda] nebo funkce, která rovnou něco zobrazí (bez db apod.)
        public bool $protected,
    )
    {
    }
}

