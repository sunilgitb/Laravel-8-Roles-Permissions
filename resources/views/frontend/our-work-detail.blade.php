@extends('frontend.layouts.app');
@include('frontend.layouts.header');
  <body>


  
 
      <div class="container">
        <section class="breadcrumb">
          <a href="{{url('/')}}" class="breadcrumb__link" style="color:black">Home</a>
          <a href="{{url('our-work')}}" class="breadcrumb__link" style="color:black">Work</a>
          <a href="{{url('/')}}" class="breadcrumb__link" style="color:black">Air book</a>
        </section>
      </div>
      <section class="project">
        <div class="container">
          <h2 class="project__title" style="color:black">Air Book</h2>
          <div class="project__text" style="color:black">
            In publishing and graphic design, Lorem ipsum is a placeholder text
            commonly used to demonstrate the visual form of a document or a
            typeface without relying on meaningful content. Lorem ipsum may be
            used as a placeholder before the final copy is available.
          </div>
        </div>
        <section class="project-details js-animated-details" data-parallax-animation="animatedDetails">
   <div class="image-cover" style="background-image: url('{{asset('frontend/assets/img/atlanta.jpg')}}'); transform: translate3d(0px, -250.873px, 0px); height:70%"></div>

  <div class="container is-wide row">
    <div class="location">
      <img src="{{asset('frontend/assets/img/icon-city.svg')}}" alt="City icon" style="margin-top:-150px;">
      <h5 style="margin-top:11px;">Client’s <br> location</h5>
      <div class="city">Atlanta</div>
      <div class="region">GA, USA</div>
    </div>
    <div class="team">
      <img src="{{asset('frontend/assets/img/icon-team.svg')}}" alt="Team icon" style="margin-top:-220px;">
      <h5 style="margin-bottom:-5px;">Tech Simians <br> team</h5>
     <div style="margin-bottom:20px">
     <div class="title" style="color:white;">17 Engineers</div>
      <div class="title" style="color:white;">2 Designers</div>
      <div class="title" style="color:white;">1 Product Manager</div>
      <div class="title" style="color:white;">1 Engineering Manager</div>
      <div class="title" style="color:white;">1 QA Engineer</div>
     </div>
    </div>
    <div class="timeline">
      <img src="{{asset('frontend/assets/img/icon-timeline.svg')}}"  style="margin-top:-180px" alt="Timeline icon">
      <h5>Timeline</h5>
      <div class="start-date">January 2014</div>
      <div class="arrow">
        <img src="{{asset('frontend/assets/img/arrow.svg')}}" alt="Arrow">
      </div>
      <div class="end-date">Now</div>
    </div>
  </div>
</section>


<section class="testimonials-list" style="margin-top:-65 px">
  <div class="container is-wide">
    <div class="project-testimonial">
      <div class="customer">
        <img src="{{asset('frontend/assets/img/calendly-customer.jpg')}}" srcset="{{asset('frontend/assets/img/calendly-customer.jpg 2x')}}" class="avatar" alt="Tope Awotona">
        <div class="info">
          <div class="reviews-block-author-title">Tope Awotona</div>
          <div class="reviews-block-author-label">Founder &amp; CEO</div>
        </div>
      </div>
      <div class="description">
        <p class="testimonial-text"><q>Firstly, I have to say Techsimians Inception is not an easy thing. But by doing it, I saved money, time and perfected my product vision. Let me explain how - this 2-day collaboration process is all about knowledge transfer, looking at the product from different angles, sorting out and prioritizing the details. <br><br>
      Part of this process is also bringing up potential risks: technical, business etc. Even though I had spent 6 months prior to the Inception conceiving what I thought was that perfect application, we still uncovered several risks during the Inception that led me to reconsider my initial product vision. That is the value of the Techsimians Inception! Without the Inception, we would have wasted precious development resources on the wrong things. The Inception has helped avoid that waste of time and money.</q></p>
      </div>
    </div>
  </div>
</section>




<section class="project__section">
  <div class="project__grid">
    <div class="project__grid-item">
      <img src="{{asset('frontend/assets/img/project-1_1.png')}}" alt="" />
    </div>
    <div class="project__grid-item">
      <img src="{{asset('frontend/assets/img/project-1_2.png')}}" alt="" />
    </div>
    <div class="project__grid-item">
      <img src="{{asset('frontend/assets/img/project-1_3.png')}}" alt="" />
    </div>
  </div>
</section>
<style>
  .project__section {
  display: flex;
  justify-content: center;
}

.project__grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}

.project__grid-item {
  display: flex;
  justify-content: center;
  align-items: center;
}

.project__grid-item img {
  max-width: 100%;
}

</style>

      <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Card Layout</title>
  <style>
    .project-technologies .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .project-technologies .column {
      flex: 0 0 calc(50% - 20px);
      margin-bottom: 20px;
    }

    .project-technologies .item {
      background-color: #f2f2f2;
      border-radius: 5px;
      padding: 20px;
    }

    .project-technologies .section-title {
      color: black;
      font-size: 18px;
      margin-left: 20px;
    }

    .project-technologies .card-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }

    .project-technologies .card {
      background-color: white;
      border-radius: 5px;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .project-technologies .card-image {
      width: 80px;
      height: 80px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: contain;
    }

    .project-technologies .card-title {
      margin-top: 10px;
      color:black;
      font-weight: bold;
    }

    h1 {
      color: black!important;
    }
  </style>
</head>

<body>
  <h1 style="margin-left: 50px;">Project Technologies and Integrations</h1>
  <section class="project-technologies">
    <div class="container">
      <div class="column">
        <div class="item is-technologies">
          <h3 class="section-title">Technologies</h3>
          <div class="card-list">
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/rails.svg)"></div>
              <div class="card-title">Ruby on Rails</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/ruby.svg)"></div>
              <div class="card-title">Ruby</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/javascript.svg)"></div>
              <div class="card-title">JavaScript</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/html.svg)"></div>
              <div class="card-title">HTML5</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/css3.svg)"></div>
              <div class="card-title">CSS3</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/psql.svg)"></div>
              <div class="card-title">PostgreSQL</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/redis.svg)"></div>
              <div class="card-title">Redis</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/react.svg)"></div>
              <div class="card-title">React</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/sidekiq.svg)"></div>
              <div class="card-title">Sidekiq</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/googl-cloud.svg)"></div>
              <div class="card-title">Google Cloud Platform</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/kubernet.svg)"></div>
              <div class="card-title">Kubernetes</div>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="item is-integrations">
          <h3 class="section-title">Integrations</h3>
          <div class="card-list">
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/google-auth.svg)"></div>
              <div class="card-title">Google Auth</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/google-calendar.svg)"></div>
              <div class="card-title">Google Calendar</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/stripe.svg)"></div>
              <div class="card-title">Stripe</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/send-grid.svg)"></div>
              <div class="card-title">SendGrid</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/mail-trap.svg)"></div>
              <div class="card-title">Mailtrap</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/air-brake.svg)"></div>
              <div class="card-title">Airbrake</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/new-relic.svg)"></div>
              <div class="card-title">New Relic</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/segment.svg)"></div>
              <div class="card-title">Segment</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/office-auth.svg)"></div>
              <div class="card-title">Office365 Auth</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/office-calendar.svg)"></div>
              <div class="card-title">Office365 Calendar</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/optimize.svg)"></div>
              <div class="card-title">Optimizely</div>
            </div>
            <div class="card">
              <div class="card-image" style="background-image: url(/frontend/assets/img/mode-analytics.svg)"></div>
              <div class="card-title">Mode analytics</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>


      <section class="alsolike">
        <div class="workgrid container">
          <h2 class="alsolike__title">You may also like this</h2>

          <div class="workgrid__row">
            <a href="{{url('our-work-detail')}}" class="workgrid__item">
              <div class="workgrid__img">
                <img src="{{asset('frontend/assets/img/our-work_1.png')}}" alt="" />
              </div>
              <div class="workgrid__item-title">Air Book</div>
              <div class="workgrid__item-text">
                Private Jet booking platform
              </div>
              <div class="workgrid__item-cta">See More</div>
            </a>
            <a href="{{url('our-work-detail')}}" class="workgrid__item">
              <div class="workgrid__img">
                <img src="{{asset('frontend/assets/img/our-work_3.png')}}" alt="" />
              </div>
              <div class="workgrid__item-title">Trader X</div>
              <div class="workgrid__item-text">A first polygon 3d website</div>
              <div class="workgrid__item-cta">See More</div>
            </a>
          </div>
        </div>
      </section>
    </main>








<style>
    .container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.column {
  flex-basis: calc(50% - 20px);
}

.item {
  margin-bottom: 40px;
}

.tech-list {
  display: flex;
  flex-wrap: wrap;
  margin: -10px;
}

.tech-item {
  width: calc(33.33% - 20px);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin: 10px;
  color: black;
  text-align: center;
}

.tech-image {
  background-repeat: no-repeat;
  background-position: center center;
  background-size: contain;
  width: 60px;
  height: 60px;
}

.tech-title {
  margin-top: 10px;
}

h3 {
  margin-bottom: 20px;
  font-size: 44px;
}

.project-technologies {
  background-color: #f5f5f5;
  padding: 40px 0;
}

</style>
<style>
  .project-details {
  position: relative;
  overflow: hidden;
  padding: 50px 0;
}

.image-cover {
  position: absolute;
  top: 273px;
  left: 0;
  width: 100%;
  height: 60%;
  background-size: cover;
  background-position: center;
}

.container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #fff;
  font-family: Arial, sans-serif;
}

.container h5,
.container .title {
  color: #000;
}

.location,
.team,
.timeline {
  text-align: center;
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.5s ease, transform 0.5s ease;
}

.js-animated-details .location,
.js-animated-details .team,
.js-animated-details .timeline {
  opacity: 1;
  transform: translateY(0);
}

.location img,
.team img,
.timeline img {
  width: 100px;
  height: 100px;
}

h5 {
  margin-top: 20px;
  font-size: 18px;
}

.city,
.region,
.title {
  margin-top: 10px;
}

.arrow img {
  width: 30px;
  height: 30px;
  transform: rotate(360deg);
}

.timeline .arrow {
  display: flex;
  align-items: center;
}

.start-date,
.end-date {
  font-weight: bold;
}

</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
  const projectDetails = document.querySelector(".js-animated-details");

  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
    );
  }

  function animateDetails() {
    if (isInViewport(projectDetails)) {
      projectDetails.classList.add("animatedDetails");
    }
  }

  animateDetails();

  window.addEventListener("scroll", animateDetails);
});

</script>

<style>
   .testimonials-list {
  background-color: #f8f8f8;
  padding: 50px 0;
  margin-top: -220px;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.project-testimonial {
  background-color: #fff;
  border-radius: 8px;
  padding: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.customer {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.avatar {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  margin-right: 15px;
}

.info {
  font-family: Arial, sans-serif;
}

.reviews-block-author-title {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 5px;
}

.reviews-block-author-label {
  color: #777;
}

.description {
  font-family: Arial, sans-serif;
  line-height: 1.6;
  color:#000;
}

.testimonial-text {
  margin-bottom: 10px;
}

/* Animation */
.js-animated-testimonials .project-testimonial {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.5s ease, transform 0.5s ease;
}

.js-animated-testimonials.animatedTestimonials .project-testimonial {
  opacity: 1;
  transform: translateY(0);
}

</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
  const testimonialsSection = document.querySelector(".js-animated-testimonials");

  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
    );
  }

  function animateTestimonials() {
    if (isInViewport(testimonialsSection)) {
      testimonialsSection.classList.add("animatedTestimonials");
    }
  }

  animateTestimonials();

  window.addEventListener("scroll", animateTestimonials);
});

</script>
  </body>
</html>

@include('frontend.layouts.footer');