// Pomocné konstanty

const FONT_SIZE = 16;


// Třída pro vytváření a správu Toastů - všechno, co je ve složených závorkách, je součástí třídy
// U tříd se používá velké první písmeno
// Notifikační okna chci naskládat pod sebe, aby se nepřekrývala

class Toasts {
   /*
   *  Do pole budeme ukládat jednoduché objekty, aby se nám s tím dobře pracovalo
   * {
   *     id: string, - ID, které jsme nastavili HTML elementu
   *     element: htmlElement, - samotný HTML element
   * }
   * */
   toastsArray = [];

   removeToast (toastId) {
      const toast = this.toastsArray.find(
          (toastObject) => toastObject.id === toastId
      );

      if (toast) {
         toast.element.remove();
         this.toastsArray = this.toastsArray.filter(
             (toastObject) => toastObject.id !== toastId
         );
      }
   }

   removeAllToasts () {
      for (let toast of this.toastsArray) {
         toast.element.remove();
      }
      this.toastsArray = [];
   }
   creteToast (message, delay = 5000) {
      const toastId = `toast-${Math.random()}`;

      const toast = document.createElement('div');
      toast.setAttribute('id', toastId);
      toast.classList.add('toast');
      const em = document.createElement('em');
      em.innerText = message;
      toast.appendChild(em);

      // Výpočet, kde se má toast zobrazit
      let top = 2;

      this.toastsArray.forEach((toastObject) => {
         // clientHeight je v pixelech, potřebujeme to přepočítat na remy
         const toastHeight = Math.round(toastObject.element.clientHeight / FONT_SIZE);

         top += 1 + toastHeight;
      });

      toast.style.top = `${top}rem`;

      // Uložení nového toastu do pole
      this.toastsArray.push({
         id: toastId,
         element: toast,
      });

      //Připojení vyskakovacího okna k HTML stránce
      document.body.appendChild(toast);

      setTimeout(() => {
         this.removeToast(toastId);
      }, delay);
   }
}

//Vytvoření instance pro toasty, abychom s nimi mohli pracovat
const toasts = new Toasts();

// Dialogy
function handleDialogOpen () {
   const openDialogElements = document.getElementsByClassName('open-dialog');

      if(openDialogElements.length > 0) {
         for(const element of openDialogElements) {
            const dialogId = element.dataset.dialog;
            const dialog = document.getElementById(dialogId);

            if (dialog) {
               const closeButton = dialog.querySelector('.close-dialog')
               element.addEventListener('click', () => {
                  dialog.showModal();
               });

               if (closeButton) {
                  closeButton.addEventListener('click', () => {
                     dialog.close();
                  });
               }
            }
         }
      }
}

//Validace formulářů

function validateInput(input) {
   // Jak zjistit název tagu
   // if (input.localName === 'textarea' && input.value.length === 0) {
   //    return false;
   // }

   if (input.dataset.compare) {
      const inputToCompare = document.getElementById(input.dataset.compare);
         if (inputToCompare) {
            return {
               result: input.value === inputToCompare.value,
               message: input.dataset.message,
            }
         }
   }

   switch (input.type) {
      case 'email':
         return {
            result: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/gi.test(input.value),
            message: 'Zadejte validní email.' ,
         };
      case 'password':
         return {
            result: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/gm.test(input.value),
            message: 'Heslo musí obsahovat alespoň jednu číslici, velké a malé písmeno a musí mít nejméně 8 znaků.'
         };
      case 'checkbox':
         return {
            result: input.checked,
            message: 'Pro dokončení registrace musíte zaškrtnout pole "Souhlasím s podmínkami použití"'
         }
      default:
         return {
            result: 'input.value.length !== 0' ,
            message: 'Pole nesmí být prázdné.',
         }
   }
}
function validateForm(formName) {
   const formChildren = document.forms[formName].children;
   let isValid = true;
   if (formChildren.length > 0) {
      for (let formElement of formChildren) {
         if (formElement.classList.contains('checkbox-label')) {
            const checkbox = formElement.getElementsByTagName('input');
            if (checkbox.length) {
               formElement = checkbox[0];
            }
         }

         if (formElement.name && formElement.required) {
            const validationResult = validateInput(formElement);
            isValid = validationResult.result && isValid;

            if (!validationResult.result) {
               toasts.creteToast(validationResult.message, 10000);
            }
         }
      }
   }

   return isValid;
}

// Počkáme na dokončení konstrukce DOMu, abychom funkci volali, až bude celý Document object model načtený
document.addEventListener('DOMContentLoaded', () => {
   handleDialogOpen();
});