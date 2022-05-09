// Open modal with input , if another modal opened
const openNewModal = (modalId) => {
  setTimer("timer");

  setTimeout(() => {
    $(`#${modalId}`).modal("show");
  }, 500);
};

// timer counter
let timer;
function setTimer(timerId) {
  timer = document.getElementById(timerId);
  runTimer();
}

let second;
let interValTimer;
const runTimer = () => {
  second = 120;
  if (interValTimer) {
    clearInterval(interValTimer);
  }
  interValTimer = setInterval(refreshTimer, 1000);
};

const refreshTimer = () => {
  let totalSeconds = 0;
  let totalMinutes = 0;
  --second;
  totalSeconds = pad(second % 60);
  totalMinutes = pad(parseInt(second / 60));
  const timerText = totalMinutes + ":" + totalSeconds;
  timer.innerHTML = timerText;
};
function pad(val) {
  let valString = val + "";
  if (valString.length < 2) {
    return "0" + valString;
  } else {
    return valString;
  }
}

const randomStr = (length) => {
  var result = "";
  var characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  var charactersLength = characters.length;
  for (var i = 0; i < length; i++) {
    result += characters.charAt(Math.floor(Math.random() * charactersLength));
  }
  return result;
};

// Show password
const showPassword = (showPasswordElm) => {
  const passwordInput = $(showPasswordElm).prev();
  if (passwordInput.attr("type") === "password") {
    passwordInput.prop("type", "text");
  } else {
    passwordInput.prop("type", "password");
  }
};

// Select video
const selectVideo = (videoElm) => {
  $(".video-item").removeClass("active");
  document.getElementById("video").src = videoElm.src;
  $(videoElm).parents(".video-item").addClass("active");
  $("#play-icon").show();
};

// toggle video,pause or played
const toggleVideo = (e) => {
  const wrapper = $(e);
  const video = wrapper.find("video");
  const playIcon = wrapper.find("span.play-svg");

  if (video[0].paused) {
    video.trigger("play");
    playIcon.hide();
  } else {
    video.trigger("pause");
    playIcon.show();
  }
};

// mobile navbar container
const mobileNavbarContainer = document.getElementById("mobileNavbarContainer");
const pageOverlay = document.getElementById("page-overlay");
if (pageOverlay) {
  pageOverlay.addEventListener("click", () => toggleMobileNavbarContainer());
}
let isOpenMobileNavbarContainer = false;
// Toggle mobile navbar container
const toggleMobileNavbarContainer = () => {
  if (isOpenMobileNavbarContainer) {
    mobileNavbarContainer.style.width = "0%";
    pageOverlay.style.display = "none";
  } else {
    mobileNavbarContainer.style.width = "80%";
    pageOverlay.style.display = "block";
  }
  isOpenMobileNavbarContainer = !isOpenMobileNavbarContainer;
};

// for more information about city ids, go read docs
// https://fa.wikipedia.org/wiki/%D9%81%D9%87%D8%B1%D8%B3%D8%AA_%D8%A7%D8%B3%D8%AA%D8%A7%D9%86%E2%80%8C%D9%87%D8%A7%DB%8C_%D8%A7%DB%8C%D8%B1%D8%A7%D9%86
const cities = [
  {
    id: 8,
    name: "تهران",
    tooltipPosition: [55, -2525],
    namePosition: [-25.049, 0],
    rectWidth: 60,
  },
  {
    id: 5,
    name: "البرز",
    tooltipPosition: [35, -2540],
    namePosition: [-25.049, 0],
    rectWidth: 60,
  },
  {
    id: 27,
    name: "مازندران",
    tooltipPosition: [70, -2550],
    namePosition: [-15.049, 0],
    rectWidth: 60,
  },
  {
    id: 24,
    name: "گلستان",
    tooltipPosition: [150, -2580],
    namePosition: [-15.049, 0],
    rectWidth: 60,
  },
  {
    id: 12,
    name: "خراسان شمالی",
    tooltipPosition: [200, -2580],
    namePosition: [20, 0],
    rectWidth: 100,
  },
  {
    id: 11,
    name: "خراسان رضوی",
    tooltipPosition: [250, -2550],
    namePosition: [20, 0],
    rectWidth: 100,
  },
  {
    id: 10,
    name: "خراسان جنوبی",
    tooltipPosition: [280, -2400],
    namePosition: [20, 0],
    rectWidth: 100,
  },
];
cities.forEach((city) =>
  $(`#city-${city.id}`).click(() => getCityDetail(city))
);
let oldCityId = 8; // tehran
// get city detail from map svg onclick
const getCityDetail = (city) => {
  $(`#city-${oldCityId}`).find("path").attr("fill", "#fff");
  const cityTooltip = $("#city-tooltip");
  const tooltipPosition =
    city.tooltipPosition[0] + " " + city.tooltipPosition[1];
  const tspanTooltipElm = cityTooltip.find("tspan");
  tspanTooltipElm.html(city.name);
  tspanTooltipElm.attr("x", city.namePosition[0]);
  tspanTooltipElm.attr("y", city.namePosition[1]);
  cityTooltip.attr("transform", `translate(${tooltipPosition})`);
  cityTooltip.find("rect").attr("width", city.rectWidth);
  $(`#city-${city.id}`).find("path").attr("fill", "#e5e5e5");
  oldCityId = city.id;

  /**
   * Uncomment ajax for query, and get result
   * response params:
   * city_name
   * city_people_amount,
   * city_places,
   * city_address,
   * city_tel,
   * city_website,
   * city_website_url,
   */

  $.ajax({
    type: "POST",
    url: id+"/cities/" ,
    success: (res) => {
      // $("#city-name").html(res.city_name);
      // $("#city-people-amount").html(res.city_people_amount);
      // $("#city-places").html(res.city_places);
      // $("#city-address").html(res.city_address);
      // $("#city-tel").html(res.city_tel);
      // $("#city-website").html(res.city_website);
      // $("#city-website-url").prop("href", res.city_website_url);
      console.log(res);
    },
    error: (err) => {
      console.log("Get City Detail Error: ", err);
    },
  });
};

$(document).ready(function () {
  // Swiper js
  const swipers = $(".swiper");
  $.each(swipers, (index, swiper) => {
    const prevButton = $(swiper).closest(".card").find(".swiper-button-prev");
    const nextButton = $(swiper).closest(".card").find(".swiper-button-next");

    let prevButtonClass = null;
    let nextButtonClass = null;
    if (prevButton.length && nextButton.length) {
      prevButton.addClass(randomStr(5));
      nextButton.addClass(randomStr(5));

      prevButtonClass = "." + prevButton.attr("class").replace(/\s/g, ".");
      nextButtonClass = "." + nextButton.attr("class").replace(/\s/g, ".");
    }
    new Swiper(swiper, {
      speed: 400,
      spaceBetween: 20,
      loop: true,
      rtl: true,
      // If we need pagination
      pagination: {
        el: ".swiper-pagination",
        type: "bullets",
        clickable: true,
      },
      centeredSlides: $(swiper).data("swiper-center") ?? false,
      autoplay: {
        delay: 5000,
      },
      navigation: {
        prevEl: prevButtonClass,
        nextEl: nextButtonClass,
      },
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        // when window width is >= 768px
        768: {
          slidesPerView: $(swiper).data("swiper-slides") ?? 4,
          spaceBetween: 20,
        },
      },
    });
  });

  // Persian datepicker
  $(".datepicker").pDatepicker({
    format: "YYYY-MM-DD",
  });
});
