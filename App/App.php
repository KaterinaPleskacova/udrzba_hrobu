<?php

declare(strict_types=1);

namespace App;

use App\AppCore\Exceptions\EnvFileNotFoundException;
use App\AppCore\Exceptions\RouteNotFoundException;
use App\AppCore\Routing\Router;
use App\AppCore\Utils\EnvParser;
use App\AppCore\View\View;
use App\Controllers\GalerieController;
use App\Controllers\JakToFungujeController;
use App\Controllers\RegisterController;
use App\Controllers\SluzbyACenikController;
use App\Routes\Routes;
use Closure;
use App\Controllers\HomepageController;

class App {

    private Router $router;
    public function __construct()
    {
        session_start();

        try {
            EnvParser::parse("../.env");
        } catch(EnvFileNotFoundException $e) {
            //TODO: zobrazit správnou šablonu
            echo "Chyba aplikace...";
            die();
        }

        define('__APP_ROOT__', $_SERVER['DOCUMENT_ROOT'] . '/');
        define('__APP_RESOURCES__', getenv('APP_DOMAIN') . getenv('APP_SUB_FOLDERS') . 'resources/');

        $this->router = new Router();
    }

    private function registerRoutes(): void
    {
        $this->router->get(Routes::Homepage, [HomepageController::class, 'index']);

        $this->router
            ->get(Routes::Register, [RegisterController::class, 'create'])
            ->post(Routes::Register, [RegisterController::class, 'store']);

        $this->router->get(Routes::SluzbyACenik, [SluzbyACenikController::class, 'index']);

        $this->router->get(Routes::JakToFunguje, [JakToFungujeController::class, 'index']);

        $this->router->get(Routes::Galerie, [GalerieController::class, 'index']);
    }

    public function run(): void
    {
        try {
            $this->registerRoutes();
            $this->router->resolveRequest();
        } catch (RouteNotFoundException $e) {
            http_response_code(404);
            // TODO: zobrazit správnou šablonu
            echo "Stránka nenalezena!";
        }
    }
}
