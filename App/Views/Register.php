<?php

use App\AppCore\Routing\Url;
use App\Routes\Routes;

include "Components/HtmlHeadForms.php";

?>


    <header>
        <a href="<?= Url::create(Routes::Homepage)?>" class="zpet">Zpět na úvodní stránku</a>
        <h1 class="form-header">Vytvořit účet</h1>
    </header>

    <main>

        <?php
        if (isset($this->data['errorMessage'])) {
            echo '<div class="message message--error">';
            switch ($this->data['errorMessage']) {
                case 'userRegistered':
                    echo 'Pod tímto emailem účet již existuje. Zapomněli jste heslo?';
                    break;
                case 'password':
                    echo 'Heslo musí obsahovat číslici, velké a malé písmeno a musí mít nejméne 8 znaků.';
                    break;
                case 'confirmPassword':
                    echo 'Zadaná hesla se neshodují.';
                    break;
                default:
                    echo 'Vytvoření účtu se nezdařilo, prosím zkontrolujte vyplněné údaje.';
            }
            echo '</div>';
        }
        ?>

        <form name="register" action="<?= Url::create(Routes::Register)?>" method="post" class="form" onsubmit="return validateForm('register')" novalidate>
            <label for="email" class="input-label">Email</label>
            <input type="email" name="email" id="email" class="input" value="<?= isset($this->data['formData']) ? $this->data['formData']['email'] : '' ?>" required>
            <label for="username" class="input-label">Uživatelské jméno</label>
            <input type="text" name="username" id="username" class="input" value="<?= isset($this->data['formData']) ? $this->data['formData']['username'] : '' ?>" required>
            <label for="password" class="input-label">Heslo</label>
            <input type="password" name="password" id="password" class="input" required>
            <label for="confirm-password" class="input-label">Heslo znovu</label>
            <input type="password" name="confirm-password" id="confirm-password" class="input" data-compare="password" data-message="Zadaná hesla se neshodují." required>
            <label for="terms" class="checkbox-label">
                <input type="checkbox" name="terms" id="terms" class="checkbox" required>
                Souhlasím s <a href="#" class="link">podmínkami použití</a> aplikace
            </label>
            <input type="submit" value="Vytvořit účet" class="button button--center">
        </form>
        <div class="under-form-links">
            <span class="panel-link">Máte účet? <a href="<?= Url::create(Routes::Login)?>" class="open-dialog link">Přihlaste se!</a></span>
        </div>
    </main>

    <dialog id="forgotten-password" class="dialog">
        <div class="close-dialog-wrapper">
                <span class="close-dialog"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_31_325)">
                    <path d="M15 0.84375C7.17188 0.84375 0.84375 7.17188 0.84375 15C0.84375 22.8281 7.17188 29.2031 15 29.2031C22.8281 29.2031 29.2031 22.8281 29.2031 15C29.2031 7.17188 22.8281 0.84375 15 0.84375ZM15 27.0938C8.34375 27.0938 2.95312 21.6562 2.95312 15C2.95312 8.34375 8.34375 2.95312 15 2.95312C21.6562 2.95312 27.0938 8.39062 27.0938 15.0469C27.0938 21.6562 21.6562 27.0938 15 27.0938Z" fill="#1F8B0E"/>
                    <path d="M19.3125 10.6406C18.8906 10.2187 18.2344 10.2187 17.8125 10.6406L15 13.5L12.1406 10.6406C11.7187 10.2187 11.0625 10.2187 10.6406 10.6406C10.2187 11.0625 10.2187 11.7187 10.6406 12.1406L13.5 15L10.6406 17.8594C10.2187 18.2812 10.2187 18.9375 10.6406 19.3594C10.8281 19.5469 11.1094 19.6875 11.3906 19.6875C11.6719 19.6875 11.9531 19.5937 12.1406 19.3594L15 16.5L17.8594 19.3594C18.0469 19.5469 18.3281 19.6875 18.6094 19.6875C18.8906 19.6875 19.1719 19.5937 19.3594 19.3594C19.7812 18.9375 19.7812 18.2812 19.3594 17.8594L16.5 15L19.3594 12.1406C19.7344 11.7187 19.7344 11.0625 19.3125 10.6406Z" fill="#1F8B0E"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_31_325">
                    <rect width="30" height="30" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                    </span>
        </div>
        <form action="forgotten-password.html" method="post" class="form">
            <label for="reg-email" class="input-label">Registrační email</label>
            <input type="email" name="email" id="reg-email" class="input" required>
            <input type="submit" value="Obnovit zapomenuté heslo" class="button button--center-with-margin">
        </form>
    </dialog>

<?php
include "Components/HtmlFoot.php";
