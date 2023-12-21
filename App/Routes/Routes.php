<?php

declare(strict_types=1);

namespace App\Routes;

enum Routes: string
{
    case Homepage = '/';
    case Login = '/prihlaseni';
    case Logout = '/odhlaseni';
    case RequestPasswordRecovery = '/reset-hesla/zadost';
    case PasswordRecovery = '/reset-hesla/{token}';
    case Register = '/vytvorit-ucet';
    case MujUcet = '/muj-ucet';
    case MojeGalerie = '/moje-galerie';
    case NovaObjednavka = '/nova-objednavka';
    case SluzbyACenik = '/sluzby-a-cenik';
    case JakToFunguje = '/jak-to-funguje';
    case Galerie = '/galerie';
    case Kontakt = '/kontakt';
    case AppError = '/chyba';
}
