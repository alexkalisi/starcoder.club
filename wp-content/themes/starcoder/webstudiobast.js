document.addEventListener('DOMContentLoaded', load_script)

function load_script() {
  document.querySelector(".footer_form-btn").addEventListener("click", check_form);
  window.addEventListener("resize", menu_width);
  window.addEventListener('scroll', function() { document.querySelector(".menu_list").classList.remove("visible"); });
  menu_width();
}

function menu_width() {
  let menu_btn = document.createElement("div");
  menu_btn.classList.add("menu_btn");
  menu_btn.innerHTML = '<div class="menu_btn_inner"></div>';
  menu_btn.addEventListener("click", function () {
    document.querySelector(".menu_list").classList.toggle("visible");
  })
  if (window.innerWidth < 1025) {
    if (!document.querySelector(".menu_btn")) document.querySelector("header").appendChild(menu_btn);
  } else {
    if (document.querySelector(".menu_btn")) {
      document.querySelector(".menu_btn").remove();
    }
  }

}

function check_form() {
  let loader = document.createElement("div");
  loader.classList.add("loader_wrapper");
  loader.innerHTML = '<div class="loader"></div>';
  let name = document.querySelector("#user_name").value;
  let company = document.querySelector("#user_company").value;
  let phone = document.querySelector("#user_phone").value;
  let email = document.querySelector("#user_email").value;
  let message = document.querySelector(".footer_textarea textarea").value;
  if (name.length > 1 && company.length > 1 && phone.length > 4 && email.length > 4 ) {
    send_form(name, company, phone, email, message);
    document.querySelector(".footer_form").appendChild(loader);
  } else {
    document.querySelector(".form_error").style.display = "block";
  }
}

function send_form(name, company, phone, email, message) {
  $.post("/wp-content/themes/niya/mail/mail.php",
      {
        name: name,
        company: company,
        phone: phone,
        email: email,
        message: message,
      },
      onAjaxSuccess
  );
  function onAjaxSuccess(data) {
    document.querySelector(".footer_form").innerHTML = '<p class="form_success">' + data + '</p>';
  }
}
