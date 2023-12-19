<?php

use App\AppCore\Routing\Url;
use App\Routes\Routes;

include "Components/HtmlHead.php";
include "Components/HtmlNavigationWithPictureBelow.php";

?>

    <main class="center-page-content">
        <h1 class="header page-header header--small-margin">Služby a ceník</h1>
        <div class="doplnujici-text page-doplnujici-text">
            Zde najdete podrobnější informace o námi poskytovaných službách a jejich cenách.
            Zaměřujeme se na čištění a údržbu hrobů a pomníků, zálivku a výměnu květin, osazení
            svíček, váz a jiných dekorací a také úpravu okolního prostředí.
        </div>
        <section class="sluzby">
            <h2 class="subheader">Jednorázová nebo pravidelná péče</h2>
            <div class="doplnujici-text page-doplnujici-text">
                Návštěva hrobu nebo památníku, kdy se zaměříme na základní úklid a péči. Během každé návštěvy
                od nás můžete očekávat tyto služby:
            </div>
            <div class="sluzby-seznam">
                <ul class="custom-arrow">
                    <li class="text-sipka">Pečlivé zametení hrobu, odklizení listí nebo sněhu</li>
                    <li class="text-sipka">Odstranění mechu, plevele, lišejníků a dalších nečistot</li>
                    <li class="text-sipka">Vyčištění a omytí hrobu, odstranění staré nepoužitelné výzdoby</li>
                    <li class="text-sipka">Dodání nové výzdoby, zapálení svíčky</li>
                    <li class="text-sipka">Tematické upravení hrobu (výročí, Velikonoce, Dušičky, Vánoce) dle Vašich přání  </li>
                    <li class="text-sipka">Fotodokumentaci provedené práce</li>
                </ul>
            </div>
            <div class="sluzby-druh">
                <h3 class="nadpis-h3">Jednorázová péče</h3>
                <div class="doplnujici-text page-doplnujici-text">
                    Úklid hrobu provedeme na svátky nebo vámi zvolené datum v plném rozsahu dle popisu výše.
                </div>
                <h3 class="nadpis-h3">Pravidelná péče</h3>
                <div class="doplnujici-text page-doplnujici-text">
                    Úklid hrobu provedeme na svátky nebo vámi zvolené datum v plném rozsahu dle popisu výše
                    několikrát ročně.
                </div>
            </div>
        </section>

        <section class="sekce-spodni sekce-spodni--cenik">
            <div class="pruh-cenik">
                <div class="text-ceny">
                    <h2 class="subheader">Ceny našich služeb</h2>
                    Ceník je platný pro Vysočinu, pro práci v ostatních regionech se náklady mohou lišit. Vaše individuální potřeby
                    a přání jsou pro nás důležité, proto jsou tyto ceny pouze orientační a finální cena se může lišit. Pokud máte
                    speciální požadavky na výzdobu nebo cokoliv dalšího, sdělte nám to, prosím, v <a href="<?= Url::create(Routes::Login)?>" class="link"> objednávkovém formuláři</a>.
                    <a href="<?= Url::create(Routes::Register)?>" class="chci-objednat chci-objednat-with-margin">Chci objednat službu</a>
                </div>
                <div class="ctverce ctverce-vpravo ctverce-vpravo-with-top-margin">
                    <div class="prvni-rada">
                        <div class="ctverec ctverec-hnedy">
                         <span class="text-ctverec text-ctverec-hnedy "><span class="hnedy-nadpis">Jednorázová<br>péče</span><br><span class="hnedy-text">Urnový hrob: 650 Kč<br>
                            Klasický hrob: 850 Kč<br>Dvoj hrob: 1 050 Kč</span>
                         </span>
                        </div>
                        <div class="ctverec ctverec-hnedy">
                      <span class="text-ctverec text-ctverec-hnedy"><span class="hnedy-nadpis">Pravidelná péče<br>(4 návštěvy ročně)</span><br><span class="hnedy-text">Urnový hrob: 2 080 Kč<br>
                         Klasický hrob: 2 720 Kč<br>Dvoj hrob: 3 360 Kč</span>
                      </span>
                        </div>
                    </div>
                    <div class="druha-rada">
                        <div class="ctverec ctverec-hnedy">
                      <span class="text-ctverec text-ctverec-hnedy"><span class="hnedy-nadpis">Pravidelná péče<br>(6 návštěv ročně)</span><br><span class="hnedy-text">Urnový hrob: 2 925 Kč<br>
                         Klasický hrob: 3 825 Kč<br>Dvoj hrob: 4 725 Kč</span>
                      </span>
                        </div>
                        <div class="ctverec ctverec-hnedy">
                         <span class="text-ctverec text-ctverec-hnedy"><span class="hnedy-posledni">Častější frekvence návštěv, speciální požadavky na výzdobu,
                            návštěva hřbitova mimo kraj Vysočina a další Vaše přání naceníme individuálně.</span>
                         </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php

include "Components/HtmlFooter.php";
include "Components/HtmlFoot.php";
