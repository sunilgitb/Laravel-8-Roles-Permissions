@extends('frontend.layouts.app');
@include('frontend.layouts.header');
<body>
 
    <main class="container">
      <section class="breadcrumb">
        <a href="{{url('/')}}" class="breadcrumb__link">Home</a>
        <a href="{{url('/')}}" class="breadcrumb__link">Services</a>
        <a href="{{url('enterprise-solution')}}" class="breadcrumb__link">Enterprise solution</a>
      </section>
      <section class="service">
        <div class="service__content">
          <span class="text-blue">Enterprise solution</span> refers to the
          process of having data, business and process analytical capabilities
          across an enterprise.
        </div>
        <div class="service__img">
          <lottie-player
            id="animation"
            src="{{('frontend/assets/animations/enterprise-solutions.json')}}"
          ></lottie-player>
        </div>
      </section>
      <section class="whatweserve">
        <div class="whatweserver__title">What we Serve:</div>
        <div class="whatweserve__row">
          <div class="whatweserve__item open">
            <div class="whatweserve__item-title">
              Customer Relationship Management
            </div>
            <div class="whatweserve__item-content">
            Customer Relationship Management application software that runs on a web server, unlike
              computer-based software programs that are run locally on the
              operating system (OS) of the device. Web applications are accessed
              by the user through a web browser with an active network
              connection.
            </div>
          </div>
          <div class="whatweserve__item">
            <div class="whatweserve__item-title">Human Resource Management</div>
            <div class="whatweserve__item-content">
            Human Resource Management  application software that runs on a web server, unlike
              computer-based software programs that are run locally on the
              operating system (OS) of the device. Web applications are accessed
              by the user through a web browser with an active network
              connection.
            </div>
          </div>
          <div class="whatweserve__item">
            <div class="whatweserve__item-title">
              Enterprise Resource Planning
            </div>
            <div class="whatweserve__item-content">
            Enterprise Resource Planning application software that runs on a web server, unlike
              computer-based software programs that are run locally on the
              operating system (OS) of the device. Web applications are accessed
              by the user through a web browser with an active network
              connection.
            </div>
          </div>
          <div class="whatweserve__item">
            <div class="whatweserve__item-title">Supply Chain Management</div>
            <div class="whatweserve__item-content">
            Supply Chain Management application software that runs on a web server, unlike
              computer-based software programs that are run locally on the
              operating system (OS) of the device. Web applications are accessed
              by the user through a web browser with an active network
              connection.
            </div>
          </div>
        </div>
      </section>
    </main>

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
  @include('frontend.layouts.footer');
