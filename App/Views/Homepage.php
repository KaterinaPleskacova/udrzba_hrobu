<?php

use App\AppCore\Routing\Url;
use App\Routes\Routes;

include "Components/HtmlHead.php";
include "Components/HtmlNavigationOnly.php"

?>

    <main class="center-page-content">
            <section class="sekce-prvni">
                <div class="sekce-vlevo">
                    <p class="maly-nadpis">Péče o hroby na Vysočině<p>
                    <h1 class="header">Pečlivě se staráme o hroby, výzdobu i okolní prostředí.</h1>
                    <p class="index-hlavni-text">Pokud nemáte možnost místa odpočinku svých blízkých pravidelně navštěvovat a trápí vás,
                        že jsou z důvodu Vaší nepřítomnosti zanedbaná, jsme zde, abychom vám v této citlivé
                        záležitosti poskytli naše profesionální služby.</p>
                    <div class="doplnujici-text">
                        <svg class="cara" width="6" height="116" viewBox="0 0 6 141" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="1.99993" y1="0.982759" x2="3.20678" y2="140.978" stroke="#31512B" stroke-width="4"/>
                        </svg>
                        <p class="doplnujici-text">Péči o hroby se věnujeme s úctou, pokorou a závazkem kvality ve všech koutech Vysočiny,
                            po domluvě i v dalších regionech.
                        </p>
                    </div>
                </div>
                <div class="sekce-vpravo">
                    <img src=" <?= __APP_RESOURCES__?>images/anděl-530x714.jpg" alt="socha anděla vzhlížícího k obloze" class="obrazek">
                </div>
            </section>

            <section class="sekce-ctverce">
                <div class="ctverce-vlevo">
                    <div class="prvni-rada">
                        <div class="ctverec ctverec-zeleny">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="img-ctverec">
                                <path d="M77.351 22.9282L57.351 2.88677C53.5099 -0.962256 47.4172 -0.962256 43.5762 2.88677L24.3709 22.1319C21.1921 25.3173 19.3377 29.5645 19.3377 34.2099C19.3377 37.7934 20.3974 41.1116 22.3841 43.8988L2.91391 63.4094C1.0596 65.2675 0 67.6566 0 70.1784C0 72.8329 1.0596 75.3546 2.91391 77.2128C4.76821 79.0709 7.28477 80 9.80133 80C12.3179 80 14.8344 79.0709 16.6887 77.2128L36.1589 57.7022C39.0728 59.8258 42.5166 60.8876 45.9603 60.8876C50.3311 60.8876 54.702 59.2949 58.0132 55.9768L77.2185 36.7316C79.0728 34.8735 80 32.4844 80 29.8299C80 27.1754 79.2053 24.7864 77.351 22.9282ZM12.4503 72.9656C10.9934 74.4255 8.60927 74.4255 7.15232 72.9656C6.49007 72.3019 6.09272 71.2401 6.09272 70.3111C6.09272 69.382 6.49007 68.4529 7.15232 67.6566L26.3576 48.4114L31.6556 53.7204L12.4503 72.9656ZM38.2781 51.7296L28.6093 42.0406C26.4901 39.917 25.4305 37.1298 25.4305 34.2099C25.4305 31.2899 26.6225 28.5027 28.6093 26.3791L31.9205 23.061L57.2185 48.4114L53.9073 51.7296C49.5364 55.9768 42.5166 55.9768 38.2781 51.7296ZM73.1126 32.4844L61.3245 44.297L36.1589 18.9465L47.947 7.13397C49.404 5.67399 51.7881 5.67399 53.245 7.13397L73.245 27.1754C73.9073 27.8391 74.3046 28.7681 74.3046 29.8299C74.3046 30.8917 73.9073 31.6881 73.1126 32.4844Z" fill="#1A0D02"/>
                                <path d="M45.9606 44.297C44.7685 43.1024 42.9142 43.1024 41.7222 44.297C40.5301 45.4915 40.5301 47.3496 41.7222 48.5442C42.252 49.0751 43.0467 49.4732 43.8414 49.4732C44.6361 49.4732 45.4308 49.2078 45.9606 48.5442C47.1526 47.4824 47.1526 45.4915 45.9606 44.297Z" fill="#1A0D02"/>
                                <path d="M35.7614 32.7498C34.5693 31.5553 32.715 31.5553 31.5229 32.7498C30.3309 33.9444 30.3309 35.8025 31.5229 36.997C32.0527 37.5279 32.8474 37.9261 33.6422 37.9261C34.4369 37.9261 35.2316 37.6607 35.7614 36.997C36.9534 35.9352 36.9534 33.9444 35.7614 32.7498Z" fill="#1A0D02"/>
                            </svg>
                            <span class="text-ctverec">Pečlivě umyjeme, uklidíme a zameteme</span>
                        </div>
                        <div class="ctverec ctverec-zeleny">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="img-ctverec">
                                <path d="M63.2343 25.2145C60.7261 25.2145 57.1617 26.1386 52.0132 27.9868C53.8614 22.9703 54.7855 19.2739 54.7855 16.7657C54.7855 7.52475 48.1848 0 40 0C31.8152 0 25.2145 7.52475 25.2145 16.7657C25.2145 19.2739 26.1386 22.8383 27.9868 27.9868C22.9703 26.1386 19.2739 25.2145 16.7657 25.2145C7.52475 25.2145 0 31.8152 0 40C0 48.1848 7.52475 54.7855 16.7657 54.7855C19.2739 54.7855 22.8383 53.8614 27.9868 52.0132C26.1386 57.0297 25.2145 60.7261 25.2145 63.2343C25.2145 72.4752 31.8152 80 40 80C48.1848 80 54.7855 72.4752 54.7855 63.2343C54.7855 60.7261 53.8614 57.1617 52.0132 52.0132C57.0297 53.8614 60.7261 54.7855 63.2343 54.7855C72.4752 54.7855 80 48.1848 80 40C80 31.8152 72.4752 25.2145 63.2343 25.2145ZM33.0033 40C33.0033 36.1716 36.1716 33.0033 40 33.0033C43.8284 33.0033 46.9967 36.1716 46.9967 40C46.9967 43.8284 43.8284 46.9967 40 46.9967C36.1716 46.9967 33.0033 43.8284 33.0033 40ZM40 6.07261C44.8845 6.07261 48.8449 10.9571 48.8449 16.8977C48.8449 18.3498 48.1848 21.5181 45.5446 28.5148C43.8284 27.7228 41.9802 27.3267 40 27.3267C38.0198 27.3267 36.1716 27.7228 34.4554 28.6469C31.6832 21.7822 31.1551 18.6139 31.1551 17.0297C31.1551 10.8251 35.1155 6.07261 40 6.07261ZM6.07261 40C6.07261 35.1155 10.9571 31.1551 16.8977 31.1551C18.3498 31.1551 21.5181 31.8152 28.5148 34.4554C27.7228 36.1716 27.1947 38.0198 27.1947 40C27.1947 41.9802 27.5908 43.8284 28.5148 45.5446C21.6502 48.3168 18.4818 48.8449 16.8977 48.8449C10.8251 48.8449 6.07261 44.8845 6.07261 40ZM40 74.0594C35.1155 74.0594 31.1551 69.1749 31.1551 63.2343C31.1551 61.7822 31.8152 58.6139 34.4554 51.6172C36.1716 52.4092 38.0198 52.9373 40 52.9373C41.9802 52.9373 43.8284 52.5413 45.5446 51.6172C48.3168 58.4818 48.8449 61.6502 48.8449 63.2343C48.8449 69.1749 44.8845 74.0594 40 74.0594ZM63.2343 48.8449C61.7822 48.8449 58.6139 48.1848 51.6172 45.5446C52.4092 43.8284 52.9373 41.9802 52.9373 40C52.9373 38.0198 52.5413 36.1716 51.6172 34.4554C58.4818 31.6832 61.6502 31.1551 63.2343 31.1551C69.1749 31.1551 74.0594 35.1155 74.0594 40C74.0594 44.8845 69.1749 48.8449 63.2343 48.8449Z" fill="#1A0D02"/>
                            </svg>
                            <span class="text-ctverec">Zapálíme svíčku a umístíme novou výzdobu</span>
                        </div>
                    </div>
                    <div class="druha-rada">
                        <div class="ctverec ctverec-zeleny">
                            <svg width="90" height="73" viewBox="0 0 90 73" fill="none" xmlns="http://www.w3.org/2000/svg" class="img-ctverec">
                                <path d="M87.3087 15.906C85.5238 13.8968 83.144 12.7248 80.6155 12.7248H69.7577V6.19495C69.7577 4.35321 69.1628 0 63.5107 0H26.3265C20.9719 0 20.377 4.35321 20.377 6.19495V12.7248H9.51918C4.31338 12.7248 0 17.5803 0 23.4404V62.2844C0 68.1445 4.31338 73 9.51918 73H80.4668C85.6726 73 89.9859 68.1445 89.9859 62.2844V23.4404C90.1347 20.594 89.0935 17.9151 87.3087 15.906ZM83.2928 62.2844C83.2928 63.9587 82.1029 65.4656 80.4668 65.4656H9.51918C8.0318 65.4656 6.69317 64.1262 6.69317 62.2844V23.4404C6.69317 21.7661 7.88307 20.2592 9.51918 20.2592H22.1618C24.8391 20.2592 27.0701 17.7477 27.0701 14.7339V7.5344H62.9158V14.7339C62.9158 17.7477 65.1468 20.2592 67.8241 20.2592H80.6155C81.3592 20.2592 82.1029 20.594 82.5491 21.2638C83.144 21.9335 83.2928 22.6032 83.2928 23.4404V62.2844Z" fill="#1A0D02"/>
                                <path d="M44.472 22.2681C36.7377 22.2681 30.4907 29.3002 30.4907 38.174C30.4907 46.8804 36.5889 53.7451 44.472 53.7451C52.2063 53.7451 58.4533 46.713 58.4533 38.174C58.4533 29.635 52.0576 22.2681 44.472 22.2681ZM44.472 46.2107C40.3074 46.2107 37.1839 42.6947 37.1839 38.174C37.1839 33.6534 40.4561 29.8025 44.472 29.8025C48.4879 29.8025 51.7601 33.6534 51.7601 38.174C51.7601 42.6947 48.4879 46.2107 44.472 46.2107Z" fill="#1A0D02"/>
                                <path d="M17.9967 25.282H14.5757C12.7909 25.282 11.1548 26.9563 11.1548 29.1329C11.1548 31.3095 12.6422 32.9838 14.5757 32.9838H17.9967C19.7815 32.9838 21.4176 31.3095 21.4176 29.1329C21.4176 26.9563 19.9303 25.282 17.9967 25.282Z" fill="#1A0D02"/>
                            </svg>
                            <span class="text-ctverec">Místo vyfotíme před a po vykonané práci</span>
                        </div>
                        <div class="ctverec ctverec-zeleny">
                            <svg width="68" height="80" viewBox="0 0 68 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="img-ctverec">
                                <path d="M34 0C15.232 0 0 14.3046 0 31.9205C0 45.298 18.224 66.4901 28.968 77.8808C30.328 79.3377 32.096 80 34 80C35.904 80 37.672 79.2053 39.032 77.8808C49.776 66.4901 68 45.298 68 31.9205C68 14.3046 52.768 0 34 0ZM34.544 73.9073C34.272 74.1722 33.864 74.1722 33.456 73.9073C20.264 59.8675 6.12 41.5894 6.12 31.9205C6.12 17.6159 18.632 5.96026 34 5.96026C49.368 5.96026 61.88 17.6159 61.88 31.9205C61.88 41.5894 47.736 59.8675 34.544 73.9073Z" fill="#1A0D02"/>
                                <path d="M34.3679 17.6C26.2079 17.6 19.5439 24.09 19.5439 32.0371C19.5439 39.9841 26.2079 46.6066 34.3679 46.6066C42.5279 46.6066 49.1919 40.1165 49.1919 32.1695C49.1919 24.2225 42.5279 17.6 34.3679 17.6ZM34.3679 40.6463C29.4719 40.6463 25.6639 36.8053 25.6639 32.1695C25.6639 27.5337 29.6079 23.6927 34.3679 23.6927C39.1279 23.6927 43.0719 27.5337 43.0719 32.1695C43.0719 36.8053 39.2639 40.6463 34.3679 40.6463Z" fill="#1A0D02"/>
                            </svg>
                            <span class="text-ctverec">Přijedeme na kterýkoli hřbitov na Vysočině</span>
                        </div>
                    </div>
                </div>
                <div class="ctverce-vpravo">
                    <h2 class="index-subheader">Objednejte si u nás jednorázovou nebo pravidelnou údržbu hrobu</h2>
                    <a href="<?= Url::create(Routes::Register)?>" class="chci-objednat">Chci objednat službu</a>
                </div>
            </section>
        <section class="sekce-pruh">
            <div class="sekce-prusvitnost">
            </div>
            <div class="text-v-obrazku">
                Každá naše služba je prováděna s maximálním ohledem na respekt k památce
                zemřelých a s cílem zajistit, že hrob je vždy v perfektním stavu.
            </div>
        </section>
        <section class="sekce-spodni">
            <div class="sekce-vlevo">
                <h2 class="index-subheader index-subheader--wide">Nejste si jisti, jestli naše služby potřebujete?</h2>
                <p class="index-hlavni-text index-hlavni-text--wide">Věříme, že ano. Dostáváte se do situací, kdy byste chtěli místa posledního
                    odpočinku vašich blízkých navštívit, ale nemáte možnost? Chtěli byste obnovit výzdobu, zapálit
                    svíčku a postarat se o to, aby prostředí celkově dobře vypadalo? Pokud vám vzdálenost, věk nebo
                    zdravotní stav nedovoluje takové návštěvy vykonávat, jsme tu my, abychom se o vše potřebné postarali.</p>
                <div class="doplnujici-text doplnujici-text--wide">
                    <svg width="6" height="141" viewBox="0 0 6 141" fill="none" xmlns="http://www.w3.org/2000/svg" class="cara">
                        <line x1="1.99993" y1="0.982759" x2="3.20678" y2="140.978" stroke="#31512B" stroke-width="4"/>
                    </svg>
                    <p class="doplnujici-text doplnujici-text--wide">S námi máte jistotu, že místo památky na vaše blízké bude vždy v
                        nejlepším pořádku. Jsme tu, abychom vám pomohli uchovat a uctít vzpomínky na vaše blízké
                        ve dnech svátečních i všedních.
                    </p>
                </div>
            </div>
            <div class="sekce-vpravo sekce-vpravo-dole">
                <img src="<?= __APP_RESOURCES__?>images/muž-hřbitov-530x706.jpg" alt="muž odcházející ze hřbitova" class="obrazek">
            </div>
        </section>

    </main>

<?php
include "Components/HtmlFooter.php";
include "Components/HtmlFoot.php";