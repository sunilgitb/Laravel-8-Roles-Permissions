<header class="header">
          <nav class="navigation">
            <a href="{{url('/')}}" class="logo">
              <img src="{{asset('frontend/assets/img/new-logo.png')}}" alt="Tech Simians" />
            </a>
            <button class="navigation__button">
              <span></span>
              <span></span>
              <span></span>
            </button>
            <div class="navigation__menu closed">
              <div class="navigation__title">Menu</div>
              <ul>
                <li class="navigation__item"><a href="/">Home</a></li>
                <li class="navigation__item"><a href="{{url('about-us')}}">About </a></li>
                <li class="navigation__item navigation__item--with-dropdown">
                  <a href="{{('/')}}">Services</a>
                  <ul class="navigation__dropdown">
                    <li><a href="{{url('development')}}">Development</a></li>
                    <li><a href="{{url('designing')}}">Designing</a></li>
                    <li>
                      <a href="{{('enterprise-solution')}}">Enterprise Solutions</a>
                    </li>
                    <li><a href="{{url('cloud-solutions')}}">Cloud Solutions</a></li>
                    <li><a href="{{('it-consulting')}}">IT Consulting</a></li>
                  </ul>
                </li>
                <li class="navigation__item"><a href="{{url('our-work')}}">Work</a></li>
                <li class="navigation__item"><a href="{{url('careers')}}">Careers</a></li>
              </ul>
              <div class="navigation__contact">
                <a href="mailto:info@techsimians.com">info@techsimians.com</a>
                <a href="tel:+918080425120">+91 808 042 5120</a>
              </div>
              <div>
                <a class="navigation__cta" href="{{url('contact-us')}}">Contact</a>
              </div>
            </div>
          </nav>
      </header>
      

