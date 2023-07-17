@extends('frontend.layouts.app');
@include('frontend.layouts.header');
<body>
    
    <main class="container">
      <section class="breadcrumb">
        <a href="{{url('/')}}" class="breadcrumb__link">Home</a>
        <a href="{{url('/')}}" class="breadcrumb__link">Services</a>
        <a href="{{url('development')}}" class="breadcrumb__link">Development</a>
      </section>
      <section class="service">
        <div class="service__content">
          <span class="text-blue">Development</span> is the creation of
          application programs that reside on remote servers and are delivered
          to the user’s device over the Internet.
        </div>
        <div class="service__img">
          <lottie-player
            id="animation"
            src="{{('frontend/assets/animations/development.json')}}"
          ></lottie-player>
        </div>
      </section>
      <section class="whatweserve">
        <div class="whatweserver__title">What we Serve:</div>
        <div class="whatweserve__row">
          <div class="whatweserve__item open">
            <div class="whatweserve__item-title">Web Applications</div>
            <div class="whatweserve__item-content">
            Web application software that runs on a web server, unlike
              computer-based software programs that are run locally on the
              operating system (OS) of the device. Web applications are accessed
              by the user through a web browser with an active network
              connection.
            </div>
          </div>
          <div class="whatweserve__item">
            <div class="whatweserve__item-title">Mobile Applications</div>
            <div class="whatweserve__item-content">
          Mobile  application software that runs on a web server, unlike
              computer-based software programs that are run locally on the
              operating system (OS) of the device. Web applications are accessed
              by the user through a web browser with an active network
              connection.
            </div>
          </div>
          <div class="whatweserve__item">
            <div class="whatweserve__item-title">
              Robotic Process Automation
            </div>
            <div class="whatweserve__item-content">
            Robotic Process Automation application software that runs on a web server, unlike
              computer-based software programs that are run locally on the
              operating system (OS) of the device. Web applications are accessed
              by the user through a web browser with an active network
              connection.
            </div>
          </div>
          <div class="whatweserve__item">
            <div class="whatweserve__item-title">Software</div>
            <div class="whatweserve__item-content">
            Software application software that runs on a web server, unlike
              computer-based software programs that are run locally on the
              operating system (OS) of the device. Web applications are accessed
              by the user through a web browser with an active network
              connection.
            </div>
          </div>
          <div class="whatweserve__item">
            <div class="whatweserve__item-title">IOT</div>
            <div class="whatweserve__item-content">
            IOT application software that runs on a web server, unlike
              computer-based software programs that are run locally on the
              operating system (OS) of the device. Web applications are accessed
              by the user through a web browser with an active network
              connection.
            </div>
          </div>
        </div>
      </section>
    </main>
   @include('frontend.layouts.footer');
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".whatweserve__item-title").forEach((e) => {
          e.addEventListener("click", (item) => {
            if (window.innerWidth >= 992) {
              document.querySelectorAll(".whatweserve__item").forEach((it) => {
                it.classList.remove("open");
              });
            }

            item.currentTarget
              .closest(".whatweserve__item")
              .classList.toggle("open");
          });
        });

        LottieInteractivity.create({
          player: "#animation",
          mode: "chain",

          actions: [
            {
              speed: 0.5,
              state: "autoplay"
            }
          ]
        });
      });
    </script>
  </body>