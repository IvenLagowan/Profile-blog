/**
 * Account Settings - Account
 */

'use strict';

// document.addEventListener('DOMContentLoaded', function (e) {
//   (function () {
//     const deactivateAcc = document.querySelector('#formAccountDeactivation');

//     // Update/reset user image of account page
//     let accountUserImage = document.getElementById('uploadedAvatar');
//     const fileInput = document.querySelector('.account-file-input'),
//       resetFileInput = document.querySelector('.account-image-reset');

//     if (accountUserImage) {
//       const resetImage = accountUserImage.src;
//       fileInput.onchange = () => {
//         if (fileInput.files[0]) {
//           accountUserImage.src = window.URL.createObjectURL(fileInput.files[0]);
//         }
//       };
//       resetFileInput.onclick = () => {
//         fileInput.value = '';
//         accountUserImage.src = resetImage;
//       };
//     }
//   })();
// });


document.addEventListener('DOMContentLoaded', function (e) {
    (function () {
      const deactivateAcc = document.querySelector('#formAccountDeactivation');

      // Update/reset user image of account page
      let accountUserImage = document.getElementById('uploadedAvatar');
      const fileInput = document.querySelector('.account-file-input'),
        resetFileInput = document.querySelector('.account-image-reset');

      if (accountUserImage) {
        const resetImage = accountUserImage.src;
        fileInput.onchange = () => {
          if (fileInput.files[0]) {
            accountUserImage.src = window.URL.createObjectURL(fileInput.files[0]);
          }
        };
        resetFileInput.onclick = () => {
          fileInput.value = '';
          accountUserImage.src = resetImage;
        };
      }

      // Update user image of edit profile page
      let editAvatarImage = document.getElementById('editedAvatar');
      const editAvatarFileInput = document.querySelector('.edit-avatar-file-input'),
        editAvatarResetFileInput = document.querySelector('.edit-avatar-image-reset');

      if (editAvatarImage) {
        const resetEditAvatarImage = editAvatarImage.src;
        editAvatarFileInput.onchange = () => {
          if (editAvatarFileInput.files[0]) {
            editAvatarImage.src = window.URL.createObjectURL(editAvatarFileInput.files[0]);
          }
        };
        editAvatarResetFileInput.onclick = () => {
          editAvatarFileInput.value = '';
          editAvatarImage.src = resetEditAvatarImage;
        };
      }
    })();
  });
