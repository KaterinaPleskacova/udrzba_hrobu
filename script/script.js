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

// Vyskakovací notifikační okna - Toasty

function removeToast(toastId) {
   const toast = document.getElementById(toastId);
   if (toast) {
      toast.remove();
   }
}

function removeAllToasts () {
   const toasts = document.getElementsByClassName('toast');
   for (let toast of toasts) {
      toast.remove ();
   }
}
function createToast(message, delay = 3000) {
   const toastId = `toast-${Math.random()}`;

   const toast = document.createElement('div');

   toast.setAttribute('id', toastId);
   toast.classList.add('toast');

   const em = document.createElement('em');
   em.innerText = message;

   toast.appendChild(em);

   document.body.appendChild(toast);

   setTimeout(() => {
      removeToast(toastId);
   }, delay);

   return toastId;
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
               createToast(validationResult.message, 10000);
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