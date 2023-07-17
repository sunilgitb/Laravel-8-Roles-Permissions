<footer class="footer">
      <div class="footer__row">
        <div class="footer__company">
          <a href="/" class="footer__logo"><img src="{{asset('frontend/assets/img/new-logo.png')}}" alt=""></a>
          <div class="footer__social">
            <a href="#" target="_blank" class="footer__social-icon"><img src="{{asset('frontend/assets/img/facebook.svg')}}" alt="Facebook"></a>
            <a href="#" target="_blank" class="footer__social-icon"><img src="{{asset('frontend/assets/img/youtube.svg')}}" alt="Youtube"></a>
            <a href="#" target="_blank" class="footer__social-icon"><img src="{{asset('frontend/assets/img/twitter.svg')}}" alt="Twitter"></a>
            <a href="#" target="_blank" class="footer__social-icon"><img src="{{asset('frontend/assets/img/instagram.svg')}}" alt="Instagram"></a>
            <a href="#" target="_blank" class="footer__social-icon"><img src="{{asset('frontend/assets/img/linkedin.svg')}}" alt="LinkedIn"></a>
          </div>
          <div class="footer__copyright hide-on-mobile">©Tech Simians. All Rights Reserved <script>document.write(new Date().getFullYear())</script></div>
         
        </div>
        <div class="footer__accordian">
          <div class="footer__accordian-item">
            <div class="footer__accordian-title">Services</div>
            <div class="footer__accordian-content">
              <ul class="footer__menu">
                <li class="footer__menu-item"><a href="{{url('development')}}">Development</a></li>
                <li class="footer__menu-item"><a href="{{url('designing')}}">Designing</a></li>
                <li class="footer__menu-item"><a href="{{url('enterprise-solution')}}">Enterprice Solutions</a></li>
                <li class="footer__menu-item"><a href="{{url('cloud-solutions')}}">Cloud Solutions</a></li>
                <li class="footer__menu-item"><a href="{{url('it-consulting')}}">IT Consulting</a></li>
              </ul>
            </div>
          </div>
          <div class="footer__accordian-item">
            <div class="footer__accordian-title">Know Us</div>
            <div class="footer__accordian-content">
              <ul class="footer__menu">
                <li class="footer__menu-item"><a href="{{url('about-us')}}">About Us</a></li>
                <li class="footer__menu-item"><a href="{{url('our-work')}}">Work</a></li>
                <li class="footer__menu-item"><a href="{{url('careers')}}">Career</a></li>
              </ul>
            </div>
          </div>
          <div class="footer__accordian-item">
            <div class="footer__accordian-title">Contact</div>
            <div class="footer__accordian-content">
              <address class="footer__address">
                <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 0a8 8 0 0 0-8 8c0 7 7 12 8 12s8-5 8-12a8 8 0 0 0-8-8Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Z" fill="#646464"/>
                </svg>
                302, Options Primo, MIDC
                Industry Area, Andheri East,
                Mumbai, India.
              </address>
              <div class="footer__phone"><svg width="16" height="16"  viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m15 11-4-2a1 1 0 0 0-1 0l-2 2-3-3 2-2a1 1 0 0 0 0-1L5 1a1 1 0 0 0-1-1 5 5 0 0 0-4 4c0 7 5 12 12 12a5 5 0 0 0 4-4 1 1 0 0 0-1-1Z" fill="#646464"/></svg><a href="tel:+918080425120">+91 808 042 5120</a></div>
              <div class="footer__email"><svg width="19" height="14"  viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 0H1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V1a1 1 0 0 0 0-1ZM7 7l-6 5V2l6 5Zm1 1 1 1a1 1 0 0 0 1 0l1-1 5 5H3l5-5Zm4-1 5-5v10l-5-5Z" fill="#646464"/></svg><a href="mailto:info@techsimians.com">info@techsimians.com</a></div>
            </div>
          </div>
          <div class="footer__accordian-item hide-on-desktop">
            <div class="footer__accordian-title">Legal</div>
            <div class="footer__accordian-content">
              <ul class="footer__menu">
                <li class="footer__menu-item"><a href="{{url('terms-of-service')}}">Terms of Service</a></li>
                <li class="footer__menu-item"><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__copyright hide-on-desktop">©Tech Simians. All Rights Reserved <script>document.write(new Date().getFullYear())</script></div>
      <div class="footer__legal-links hide-on-mobile">
         <div class="footer__legal-links-menu" style="margin-bottom:-22px;">
          <a href="{{url('terms-of-service')}}">Terms of Service</a> <a href="{{url('privacy-policy')}}">Privacy Policy</a>
        </div>
      </div>
    </footer>

    <script>
    // Wait for the document to be ready
    document.addEventListener('DOMContentLoaded', function() {
        // Get the success message element
        const successMessage = document.getElementById('success-message');
        
        // Check if the success message exists
        if (successMessage) {
            // Hide the success message after 2 seconds
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 2000);
        }
    });
</script>
