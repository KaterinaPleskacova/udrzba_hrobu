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



const toastId = createToast('Testovací zpráva', 10000);

//Validace formulářů
function validateForm(formName) {
   const formChildren = document.forms[formName].children;

   if (formChildren.length > 0) {
      for (const formElement of formChildren) {
         if (formElement.name) {
            console.log(formElement);
         }
      }
   }

   return false;
}

// Počkáme na dokončení konstrukce DOMu, abychom funkci volali, až bude celý Document object model načtený
document.addEventListener('DOMContentLoaded', () => {
   handleDialogOpen();
});