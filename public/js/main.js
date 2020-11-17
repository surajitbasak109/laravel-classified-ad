(function() {
  "use strict";

  //===== Prealoder

  window.onload = function() {
    window.setTimeout(fadeout, 500);
  };

  function fadeout() {
    document.querySelector(".preloader").style.opacity = "0";
    document.querySelector(".preloader").style.display = "none";
  }

  /*=====================================
    Sticky
    ======================================= */
  window.onscroll = function() {
    var header_navbar = document.getElementById("header_navbar");
    var sticky = header_navbar.offsetTop;
    var logo = document.querySelector(".navbar-brand img");

    if (window.pageYOffset > sticky) {
      header_navbar.classList.add("sticky");
      logo.src = "images/logo/logo-2.svg";
    } else {
      header_navbar.classList.remove("sticky");
      logo.src = "images/logo/logo.svg";
    }

    // show or hide the back-top-top button
    var backToTo = document.querySelector(".back-to-top");
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      backToTo.style.display = "block";
    } else {
      backToTo.style.display = "none";
    }
  };

  // Get the navbar

  //===== close navbar-collapse when a  clicked
  let navbarToggler = document.querySelector(".navbar-toggler");
  navbarToggler.addEventListener("click", function() {
    navbarToggler.classList.toggle("active");
  });

  //WOW Scroll Spy
  var wow = new WOW({
    //disabled for mobile
    mobile: false,
  });
  wow.init();

  let country = document.querySelector("#country");
  let state = document.querySelector("#state");

  if (country != null) {
    country.addEventListener("change", (e) => {
      let data = { country: e.target.value };
      $("#state").html(`<option value="">--SELECT--</option>`);
      postData("/ajax/get_states", data).then((res) => {
        res.forEach((item) => {
          $("#state").append(`<option value="${item.id}">${item.name}</option>`);
        });
      });
    });
  }

  if (state != null) {
    state.addEventListener("change", (e) => {
      let data = { state: e.target.value };
      $("#city").html('<option value="">--SELECT--</option>');
      postData("/ajax/get_cities", data).then((res) => {
        res.forEach((item) => {
          $("#city").append(`<option value="${item.id}">${item.name}</option>`);
        });
      });
    });
  }
})();

async function postData(url, data) {
  const response = await fetch(url, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      Accept: "application/json",
      "X-Requested-With": "XMLHttpRequest",
      "X-CSRF-Token": $('input[name="_token"]').val(),
    },
    credentials: "same-origin",
    body: JSON.stringify(data),
  });

  return response.json();
}
