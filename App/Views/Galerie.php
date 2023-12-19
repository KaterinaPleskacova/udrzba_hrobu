<?php

use App\AppCore\Routing\Url;
use App\Routes\Routes;

include "Components/HtmlHead.php";
include "Components/HtmlNavigationWithPictureBelow.php";

?>

    <main class="center-page-content">
        <div class="page-wrapper">
            <h1 class="header page-header header--small-margin">Galerie</h1>
            <div class="doplnujici-text page-doplnujici-text">
                Na této stránce najdete několik ukázek naší práce.<br>Při každé návštěvě vyfotíme
                místo odpočinku Vašich blízkých před a po odvedené práci. Fotky budeme vždy ukládat
                do Vašeho účtu, kde si je v historii objednávek budete moci prohlédnout.
            </div>
            <section class="fotky-prace">
                <img src="<?= __APP_RESOURCES__?>images/predpo2.jpg" alt="fotka hrobu před a po úklidu">
                <img src="<?= __APP_RESOURCES__?>images/predpo2.jpg" alt="fotka hrobu před a po úklidu">
                <img src="<?= __APP_RESOURCES__?>images/predpo2.jpg" alt="fotka hrobu před a po úklidu">
                <img src="<?= __APP_RESOURCES__?>images/predpo2.jpg" alt="fotka hrobu před a po úklidu">
                <img src="<?= __APP_RESOURCES__?>images/predpo2.jpg" alt="fotka hrobu před a po úklidu">
                <img src="<?= __APP_RESOURCES__?>images/predpo2.jpg" alt="fotka hrobu před a po úklidu">
            </section>
            <div class="call-to-action">
                <a href="<?= Url::create(Routes::Register)?>" class="chci-objednat chci-objednat-with-small-margin">Chci objednat službu</a>
            </div>
        </div>
    </main>

<?php

include "Components/HtmlFooter.php";
include "Components/HtmlFoot.php";


