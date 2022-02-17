document.addEventListener('DOMContentLoaded', function () {
  phoneMask('+380 ', ".phone_mask");
});

function phoneMask(number, query) {
  number = String(number);
  let phoneInput = document.querySelector(query);
  if (phoneInput) {
    phoneInput.value = number;
    phoneInput.addEventListener("keydown", function (event) {
      phoneInput.oninput = e => {
        if (parseInt(event.key) >= 0 && parseInt(event.key) <= 9 && number.length < 17) {
          keyDown = String(event.key);
          switch (number.length) {
            case 7:
              number = number + ' ' + keyDown;
              break;
            case 11:
              number = number + '-' + keyDown;
              break;
            case 14:
              number = number + '-' + keyDown;
              break;
            default:
              number = number + keyDown;
          }
        } else if (event.key === 'Backspace' && number.length > 5) {
          switch (number.length) {
            case 16:
              number = number.slice(0, number.length - 2);
              break;
            case 13:
              number = number.slice(0, number.length - 2);
              break;
            case 9:
              number = number.slice(0, number.length - 2);
              break;
            default:
              number = number.slice(0, number.length - 1);
          }
        }
        e.target.value = number;
      }
    });
  }
}