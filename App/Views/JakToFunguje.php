<?php

use App\AppCore\Routing\Url;
use App\Routes\Routes;

include "Components/HtmlHead.php";
include "Components/HtmlNavigationOnly.php";

?>

    <main class="center-page-content jak-to-funguje-wrapper">
        <h1 class="header header--small-margin">Jak to funguje</h1>
        <div class="ctverce">
            <div class="prvni-rada">
                <div class="ctverec-svetly ctverec--no-margin">
                        <span class="text-ctverec hnedy-nadpis hnedy-nadpis--center">Vytvořte si u nás <a href="<?= Url::create(Routes::Register)?>" class="link">bezplatný účet</a>,
                        založení zabere jen minutku
                        </span>
                </div>
                <div class="ctverec-svetly ctverec--no-margin">
                        <span class="text-ctverec hnedy-nadpis hnedy-nadpis--center">Z našich služeb si vyberte tu, která je pro vás ta pravá
                        </span>
                </div>
                <div class="ctverec-svetly ctverec--no-margin">
                        <span class="text-ctverec hnedy-nadpis">Vyplňte objednávkový formulář, ve kterém nám pokud možno sdělte
                        co nejvíce detailů
                        </span>
                </div>
                <div class="ctverec-svetly ctverec--no-margin">
                        <span class="text-ctverec hnedy-nadpis">Po odeslání objednávky dostanete automatický email, abychom
                            věděli, že se formulář v pořádku odeslal
                        </span>
                </div>
            </div>

            <div class="druha-rada">
                <div class="ctverec-svetly ctverec--no-margin">
                        <span class="text-ctverec hnedy-nadpis">Pokud bychom si potřebovali něco upřesnit, ozveme se vám
                        </span>
                </div>
                <div class="ctverec-svetly ctverec--no-margin">
                        <span class="text-ctverec hnedy-nadpis">Vyčkejte na email s fakturou, kde najdete konečnou kalkulaci ceny
                        </span>
                </div>
                <div class="ctverec-svetly ctverec--no-margin">
                        <span class="text-ctverec hnedy-nadpis">Zaplaťte fakturu převodem na náš účet
                        </span>
                </div>
                <div class="ctverec-svetly ctverec--no-margin">
                        <span class="text-ctverec hnedy-nadpis">Těšte se na to, jak bude hrob vypadat po námi odvedené práci
                        </span>
                </div>
            </div>
            <div class="call-to-action">
                <a href="<?= Url::create(Routes::Register)?>" class="chci-objednat chci-objednat-with-small-margin">Chci objednat službu</a>
            </div>
        </div>
    </main>

<?php
include "Components/HtmlFooter.php";
include "Components/HtmlFoot.php";
