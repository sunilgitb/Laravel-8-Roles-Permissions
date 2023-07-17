// var controller = new ScrollMagic.Controller();

document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", () => {
    if (window.innerWidth < 992) {
      if (window.scrollY > 100) {
        document.querySelector(".header").classList.add("isFixed");
      } else {
        document.querySelector(".header").classList.remove("isFixed");
      }
    }
  });
  document
    .querySelector(".navigation__button")
    .addEventListener("click", (e) => {
      e.currentTarget.classList.toggle("open");
      document.querySelector(".navigation__menu").classList.toggle("open");
      anime({
        targets: ".navigation__menu.closed",
        translateX: "100%",
        easing: "easeInOutQuad",
        duration: 200 // increase delay by 100ms for each elements.
      });
      anime({
        targets: ".navigation__menu.open",
        translateX: "0px",
        easing: "easeInOutQuad",
        duration: 200 // increase delay by 100ms for each elements.
      });
    });

  const swiper = new Swiper(".swiper", {
    speed: 600,
    spaceBetween: 100,
    effect: "coverflow",
    breakpoints: {
      // when window width is >= 320px
      992: {
        effect: "fade",

        pagination: {
          el: ".swiper-pagination",
          clickable: true
        }
      }
    },
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });

  // create a scene

  // var scene = new ScrollMagic.Scene({
  //   triggerElement: "#trigger1",
  //   duration: 900
  // })
  //   .on("enter", function (e) {
  //     let player = document.querySelector("#fifthLottie");
  //     player.play();
  //   })
  //   .addTo(controller);

  // anime({
  //   targets: ".svg__sortby",
  //   translateY: ["-240px", "0px"],
  //   opacity: ["0", "1"],
  //   speed: 200

  // });

  const footerAccordian = document.querySelector(".footer__accordian");
  if (footerAccordian) {
    footerAccordian
      .querySelectorAll(".footer__accordian-title")
      .forEach((e) => {
        e.addEventListener("click", (title) => {
          title.currentTarget
            .closest(".footer__accordian-item")
            .classList.toggle("open");
        });
      });
  }

  anime({
    targets: ".svg__top",
    opacity: ["0", "1"],
    translateY: ["-100px", "0px"],
    delay: anime.stagger(200) // increase delay by 100ms for each elements.
  });

  anime({
    targets: ".banner__shadowtext",
    letterSpacing: ["5em", "0.02em"],
    opacity: ["0", "0.2"],
    easing: "easeInOutQuad",
    delay: 100 // increase delay by 100ms for each elements.
  });
  anime({
    targets: ".banner__text",
    opacity: ["0", "1"],
    scaleY: ["0", "1"],
    easing: "easeInOutQuad",
    delay: 100 // increase delay by 100ms for each elements.
  });
  anime({
    targets: ".banner__subtext",
    opacity: ["0", "1"],
    easing: "easeInOutQuad",
    delay: 500 // increase delay by 100ms for each elements.
  });
  LottieInteractivity.create({
    mode: "scroll",
    player: "#firstLottie",
    actions: [
      {
        visibility: [0.2, 1],
        type: "play"
      }
    ]
  });
  LottieInteractivity.create({
    mode: "scroll",
    player: "#secondLottie",
    actions: [
      {
        visibility: [0.2, 1],
        type: "play"
      }
    ]
  });
  LottieInteractivity.create({
    mode: "scroll",
    player: "#thirdLottie",
    actions: [
      {
        visibility: [0.2, 1],
        type: "play"
      }
    ]
  });
  LottieInteractivity.create({
    mode: "scroll",
    player: "#fourthLottie",
    actions: [
      {
        visibility: [0.2, 1],
        type: "play"
      }
    ]
  });
  LottieInteractivity.create({
    mode: "scroll",
    player: "#fifthLottie",
    actions: [
      {
        visibility: [0.2, 1],
        type: "play"
      }
    ]
  });
  LottieInteractivity.create({
    mode: "scroll",
    player: "#sixthLottie",
    actions: [
      {
        visibility: [0.2, 1],
        type: "play"
      }
    ]
  });
  LottieInteractivity.create({
    mode: "scroll",
    player: "#seventhLottie",
    actions: [
      {
        visibility: [0.2, 1],
        type: "play"
      }
    ]
  });
  LottieInteractivity.create({
    mode: "scroll",
    player: "#eigthLottie",
    actions: [
      {
        visibility: [0.2, 1],
        type: "play"
      }
    ]
  });
  LottieInteractivity.create({
    mode: "scroll",
    player: "#ninthLottie",
    actions: [
      {
        visibility: [0.2, 1],
        type: "play"
      }
    ]
  });

  LottieInteractivity.create({
    mode: "scroll",
    player: "#tenthLottie",
    actions: [
      {
        visibility: [0.1, 1],
        type: "play"
      }
    ]
  });
});
