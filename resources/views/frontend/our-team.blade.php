@extends('frontend.layouts.app');
@include('frontend.layouts.header');

<body>
   
    <main class="container">
      <section class="breadcrumb">
        <a href="{{url('/')}}" class="breadcrumb__link">Home</a>
        <a href="{{url('our-team')}}" class="breadcrumb__link">Team</a>
      </section>
      <section class="whoweare about">
        <h2 class="heading">We are corporate web agency</h2>
        <p class="subheading">
          Our team is jam packed with creative, smart and bubbly people. We
          inspire each other to improve daily, and be the best and happiest we
          can be.
        </p>
        <div class="whoweare__item">
          <div class="whoweare__animation">
            <div class="whoweare__circle">
              <img src="{{asset('frontend/assets/img/circle.svg')}}" alt="" />
            </div>
            <div class="whoweare__line">
              <img src="{{asset('frontend/assets/img/line-with-right-curve.svg')}}" alt="" />
            </div>
            <div class="whoweare__icon">
              <lottie-player
                id="firstLottie"
                src="https://assets9.lottiefiles.com/packages/lf20_kzmlad7s.json"
              ></lottie-player>
            </div>
          </div>
          <div class="whoweare__content">
            <h3 class="whoweare__item-title">
              We understand the pressure of work
            </h3>
            <div class="whoweare__item-text">
              execution under stringent time Conditions. Dont worry we get you
              covered with our assured in time delivery of projects.
            </div>
          </div>
        </div>
        <div class="whoweare__item whoweare__item-right">
          <div class="whoweare__animation">
            <div class="whoweare__circle">
              <img src="img/circle.svg" alt="" />
            </div>
            <div class="whoweare__line">
              <img src="{{asset('frontend/assets/img/line-with-left-curve.svg')}}" alt="" />
            </div>
            <div class="whoweare__icon">
              <lottie-player
                id="secondLottie"
                src="https://assets6.lottiefiles.com/packages/lf20_ndbw9wpl.json"
              ></lottie-player>
            </div>
          </div>
          <div class="whoweare__content">
            <h3 class="whoweare__item-title">
              Innovative ideas and designing,
            </h3>
            <div class="whoweare__item-text">
              catering to your requirements and enhacing them with latest
              technologies serving best quality.
            </div>
          </div>
        </div>
        <div class="whoweare__item">
          <div class="whoweare__animation">
            <div class="whoweare__circle">
              <img src="img/circle.svg" alt="" />
            </div>
            <div class="whoweare__line">
              <img src="{{asset('frontend/assets/img/line-with-right-curve.svg')}}" alt="" />
            </div>
            <div class="whoweare__icon">
              <lottie-player
                id="thirdLottie"
                src="https://assets1.lottiefiles.com/packages/lf20_0sl0y1f4.json"
              ></lottie-player>
            </div>
          </div>
          <div class="whoweare__content">
            <h3 class="whoweare__item-title">
              Our top notch content writing service
            </h3>
            <div class="whoweare__item-text">
              ensures better search engine optimisation and satisfied results.
            </div>
          </div>
        </div>
        <div class="whoweare__item whoweare__item-right whoweare__item-last">
          <div class="whoweare__animation">
            <div class="whoweare__circle">
              <img src="{{('frontend/assets/img/circle.svg')}}" alt="" />
            </div>

            <div class="whoweare__icon">
              <lottie-player
                id="fourthLottie"
                src="https://assets8.lottiefiles.com/packages/lf20_frcf3wjo.json"
              ></lottie-player>
            </div>
          </div>
          <div class="whoweare__content">
            <h3 class="whoweare__item-title">
              Offering best customer support
            </h3>
            <div class="whoweare__item-text">
              after product delivery to ensure smooth running of projects. From
              development to hosting to publishing any product we got all
              covered.
            </div>
          </div>
        </div>
      </section>
      <section class="team">
        <h2 class="heading">Meet The Team</h2>
        <div class="subheading">
          Our team is jam packed with creative, smart and bubbly people. We
          inspire each other to improve daily, and be the best and happiest we
          can be.
        </div>
        <div class="team__row">
          <div class="team__member">
            <div class="team__member-img">
              <img src="{{asset('frontend/assets/img/vince.png')}}" alt="Vince" />
            </div>
            <div class="team__member-name">Vince</div>
            <div class="team__member-designation">Co-Founder</div>
          </div>
          <div class="team__member">
            <div class="team__member-img">
              <img src="{{asset('frontend/assets/img/leon.png')}}" alt="Leon" />
            </div>
            <div class="team__member-name">Leon</div>
            <div class="team__member-designation"></div>
          </div>
          <div class="team__member">
            <div class="team__member-img">
              <img src="{{asset('frontend/assets/img/maxime.png')}}" alt="Maxime" />
            </div>
            <div class="team__member-name">Maxime</div>
            <div class="team__member-designation"></div>
          </div>
          <div class="team__member">
            <div class="team__member-img">
              <img src="{{asset('frontend/assets/img/donovan.png')}}" alt="Donovan" />
            </div>
            <div class="team__member-name">Donovan</div>
            <div class="team__member-designation"></div>
          </div>
          <div class="team__member">
            <div class="team__member-img">
              <img src="{{asset('frontend/assets/img/ruben.png')}}" alt="Ruben" />
            </div>
            <div class="team__member-name">Ruben</div>
            <div class="team__member-designation"></div>
          </div>
          <div class="team__member">
            <div class="team__member-img">
              <img src="{{asset('frontend/assets/img/nils.png')}}" alt="Nils" />
            </div>
            <div class="team__member-name">Nils</div>
            <div class="team__member-designation"></div>
          </div>
          <div class="team__member">
            <div class="team__member-img">
              <img src="{{asset('frontend/assets/img/donovan.png')}}" alt="Andrea" />
            </div>
            <div class="team__member-name">Andrea</div>
            <div class="team__member-designation"></div>
          </div>
          <div class="team__member">
            <div class="team__member-img">
              <img src="{{asset('frontend/assets/img/maxime.png')}}" alt="Rodolf" />
            </div>
            <div class="team__member-name">Rodolf</div>
            <div class="team__member-designation"></div>
          </div>
        </div>
      </section>
      <section class="jointeam">
        <h2 class="jointeam__title">Join Our Team</h2>
        <div class="jointeam__text">
          We could talk all day about how much fun it is being part of the
          TECHSimians team. But really there's only one way to find out...
        </div>
        <a href="{{url('careers')}}" class="jointeam__cta button button--white"
          >Go to careers</a
        >
      </section>
      <section class="openings">
        <div class="opening__title">Job Openings</div>
        <a class="opening__item" href="{{url('job-openings')}}">
          <div class="opening__item-title">Visual Designer Intern</div>
          <div class="opening__item-content">
            Grow as a designer in a way school can’t teach
          </div>
        </a>
      </section>
    </main>
    
  </body>
  @include('frontend.layouts.footer');
