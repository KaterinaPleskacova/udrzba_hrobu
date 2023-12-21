<?php

use App\AppCore\Routing\Url;
use App\Routes\Routes;

include "Components/HtmlHead.php";
include "Components/HtmlNavigationUserAccount.php";

?>
    </header>
    <main class="center-page-content">
        <h1 class="small-header">Moje galerie</h1>
        <div class="objednavky">
            <div class="objednavky-radek">
                <span class="historie-subheader historie-subheader--galerie">Objednávka č.202308908</span>
                <a href="#" class="button button--right button-small">Zobrazit galerii</a>
            </div>
            <div class="objednavky-radek">
                <span class="historie-subheader historie-subheader--galerie">Objednávka č.202400002</span>
                <a href="#" class="button button--right button-small">Zobrazit galerii</a>
            </div>
            <div class="objednavky-radek">
                <span class="historie-subheader historie-subheader--galerie">Objednávka č.202400003</span>
                <a href="#" class="button button--right button-small">Zobrazit galerii</a>
            </div>
            <div class="objednavky-radek">
                <span class="historie-subheader historie-subheader--galerie">Objednávka č.202400004</span>
                <a href="#" class="button button--right button-small">Zobrazit galerii</a>
            </div>
        </div>
    </main>

<?php
include "Components/HtmlFooter.php";
include "Components/HtmlFoot.php";
