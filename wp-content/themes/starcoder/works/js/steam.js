document.addEventListener("DOMContentLoaded", begin_steaming);

function begin_steaming() {
  let appenderSelector = ".steam_wrapper";
  let appender = document.querySelector(appenderSelector);
  if (appender) {
    let count = 0;
    let steam_inval = setInterval(function() {
      count++;
      if (count > 11) {
        clearInterval(steam_inval);
      } else {
        let classAdd = "steam" + count;
        let steam = document.createElement("div");
        steam.classList.add(classAdd, "steam_background");
        appender.appendChild(steam);
      }
    }, 1000);
  }
}