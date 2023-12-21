<?php

use App\AppCore\Routing\Url;
use App\Routes\Routes;

?>
    <header>
        <nav class="main-nav">
            <div class="nav-wrapper center-page-content">
                <div class="nav nav-vlevo">
                    <a href="<?=Url::create(Routes::Homepage)?>"><img src="<?= __APP_RESOURCES__?>images/logo-pruhledne.png" alt="jednoduchá kresba hřbitova" class="logo-img"></a>
                    <a href="<?=Url::create(Routes::Homepage)?>">Můj účet - PEČUJEMEoHROBY.cz</a>
                </div>
                <div class="nav nav-vpravo">
                    <a href="<?=Url::create(Routes::NovaObjednavka)?>" class="nav-bar">Nová objednávka</a>
                    <a href="<?=Url::create(Routes::MojeGalerie)?>" class="nav-bar">Moje galerie</a>
                    <a href="#" class="nav-bar">Odhlásit</a>
                </div>
            </div>
        </nav>

