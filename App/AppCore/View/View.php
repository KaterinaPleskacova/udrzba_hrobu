<?php

declare(strict_types=1);

namespace App\AppCore\View;

class View
{

    /**
     * @param string $template - název šablony
     * @param array $data - data, která budou zobrazena v šabloně - aosciativní pole
     */
    public function __construct(
        private readonly string $template,
        private array $data = []        //propagace členských proměnných z konstruktoru -
    )                                   //kromě toho, že to bude řetězec, jsme řekli, že to
    {                                   //bude soukromá členská proměnná a navíc jen pro čtení,
    }                                   //aby nebylo možné ji změnit a soukromé pole dat - nepovinný argument

    public function render(): void
    {
        $templateFile = __APP_ROOT__ . 'App/Views/' . $this->template . 'php';

        if(file_exists($templateFile)) {
            require $templateFile;
        }
    }

    public static function make(
        string $template,
        array $data = []
    ): View
    {
         $view = new View($template, $data);
         $view->render();

         return $view;
    }
}
