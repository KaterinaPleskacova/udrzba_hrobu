<?php

use App\AppCore\Routing\Url;
use App\Routes\Routes;

?>
<header>
        <nav class="main-nav">
            <div class="nav-wrapper center-page-content">
                <div class="nav nav-vlevo">
                    <a href="<?= Url::create(Routes::Homepage)?>"><img src="<?= __APP_RESOURCES__?>images/logo-pruhledne.png" alt="jednoduchá kresba hřbitova" class="logo-img"></a>
                    <a href="<?= Url::create(Routes::Homepage)?>">PEČUJEMEoHROBY.eu</a>
                </div>
                <div class="nav nav-vpravo">
                    <a href="<?= Url::create(Routes::SluzbyACenik)?>" class="nav-bar">Služby a Ceník</a>
                    <a href="<?= Url::create(Routes::JakToFunguje)?>" class="nav-bar">Jak to funguje</a>
                    <a href="<?= Url::create(Routes::Galerie)?>" class="nav-bar">Galerie</a>
                    <a href="<?= Url::create(Routes::Kontakt)?>" class="nav-bar">Kontakt</a>
                    <a href="<?= Url::create(Routes::Login)?>" class="nav-bar">Můj účet</a>
                </div>
            </div>
        </nav>
    </header>
