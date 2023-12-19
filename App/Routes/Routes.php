<?php

declare(strict_types=1);

namespace App\Routes;

enum Routes: string
{
    case Homepage = '/';
    case Login = '/prihlaseni';
    case Register = '/vytvorit-ucet';
    case AppError = '/chyba';
    case SluzbyACenik = '/sluzby-a-cenik';
    case JakToFunguje = '/jak-to-funguje';
    case Galerie = '/galerie';
    case Kontakt = '/kontakt';
}
