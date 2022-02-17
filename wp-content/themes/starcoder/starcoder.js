document.addEventListener("DOMContentLoaded", load_script);

function load_script() {
  onResize();
  if (document.querySelector(".site_tagline_top")) {
    print_tagline(document.querySelector(".site_tagline_top"))
  }
  window.addEventListener("scroll", onResize);
  document.querySelector(".menu_btn").addEventListener("click", () => { show_menu(true); });
  document.querySelector(".menu_close_btn").addEventListener("click", () => { show_menu(false); });
  let menuItems = document.querySelector(".menu_list").querySelectorAll("li");
  if (menuItems) {
    for (let i = 0; i < menuItems.length; i++) {
      menuItems[i].addEventListener("click", () => show_menu(false));
    }
  }
}

let intervalPrint;
let secondLine = true;

function print_tagline(elem) {
  let pauseOn = 9;
  let pauseCount = 0;
  let pauseLength = 10;
  if (!secondLine) {
    document.querySelector(".site_tagline_top").classList.remove("cursor", "cursor_anim");
    elem.classList.add("cursor");
  }
  let textElem = elem.textContent;
  elem.textContent = '';
  elem.style.color = "#fff";
  let count = 0;
  let lengthElem = textElem.length;
  intervalPrint = setInterval(function() {
    if (count === pauseOn && !secondLine) {
      document.querySelector(".site_tagline_bottom").classList.add("cursor_anim");
      pauseCount++;
      if (pauseCount >= pauseLength) {
        document.querySelector(".site_tagline_bottom").classList.remove("cursor_anim");
        count++;
      } 
    } else {
      count++;
      elem.textContent = textElem.slice(0, count);
      if (count === lengthElem) {
        clearInterval(intervalPrint);
        elem.classList.add("cursor_anim");
        if (secondLine) setTimeout( () => print_tagline(document.querySelector(".site_tagline_bottom")), 2000);
        secondLine = false;
      }
    }
    
  }, 120);
}

function onResize() {
  if (scrollY === 0) {
      document.querySelector("header").classList.remove("fixed");
  } else {
    document.querySelector("header").classList.add("fixed");
    let elemVar = document.querySelector(".error404");
    if (elemVar && elemVar.childNodes.length === 0) {
      let elemTop = elemVar.getBoundingClientRect().y;
      console.log(elemTop)
      if (elemTop <= 150) {
        elemVar.innerHTML = '<div class="error404_one num404">4</div><div class="error404_two num404">0</div><div class="error404_three num404">4</div>';
      }
    }
  }
}

function show_menu(swth) {
  if (swth) {
    document.querySelector(".menu_wrapper").style.right = 0;
    document.querySelector(".menu_wrapper").style.opacity = 1;
    if (document.querySelector("header").classList.contains("fixed")) document.querySelector("header").style.top = "-98px";
  } else {
    document.querySelector(".menu_wrapper").style.opacity = 0;
    document.querySelector(".menu_wrapper").style.right = "-610px";
    document.querySelector("header").style.top = "0";
  }
}

function replaceAll(str, find, replace) {
    return str.replace(new RegExp(find, 'g'), replace);
}