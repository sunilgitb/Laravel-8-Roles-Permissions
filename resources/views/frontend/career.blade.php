@extends('frontend.layouts.app');
@include('frontend.layouts.header');
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<body>
   
    <main class="container">
      <section class="breadcrumb">
        <a href="{{url('/')}}" class="breadcrumb__link">Home</a>
        <a href="{{url('careers')}}" class="breadcrumb__link">Careers</a>
      </section>
      @if ($errors->any())
   <div class="alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif
@if(session('success'))
    <div id="success-message" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<section>
<img alt="" class="" src="{{asset('frontend/assets/img/about.jpg')}}">
</section>
 

    <section class="openings">
        <div class="opening__title" style="text-align:center; margin-top:50px;">Job Openings</div>
        <!-- <a class="opening__item" href="{{url('job-openings')}}">
          <div class="opening__item-title">Visual Designer Intern</div>
          <div class="opening__item-content">
            Grow as a designer in a way school can’t teach
          </div> -->
        </a>
      </section>
  <section class="jobs-list-tags js-filter" style="margin-top:-80px">
    <div class="container">
      <div class="job-tags-toggle js-filter-group">
        <label class="job-tag-toggle">
          <input checked class="job-tag-toggle__input" name="job-tag-toggle" type="radio" value="[data-filter]">
          <div class="job-tag-toggle__content">
            <img class="job-tag-toggle__ico" src="{{asset('frontend/assets/img/tag-icon.svg')}}"> All Teams
          </div>
        </label>
        
        <label class="job-tag-toggle">
  <input class="job-tag-toggle__input" name="job-tag-toggle" type="radio" value="[data-filter~=support]">
      <div class="job-title job-tag-toggle__content" data-job-id="engineering" job-tag-toggle__content">
            <div class="job-tag-toggle__dot job-tag-toggle__dot--engineering"></div> engineering
          </div>
        
        </label>
        <label class="job-tag-toggle">
          <input class="job-tag-toggle__input" name="job-tag-toggle" type="radio" value="[data-filter~=product]">
          <div class="job-title job-tag-toggle__content" data-job-id="product">
            <div class="job-tag-toggle__dot job-tag-toggle__dot--product"></div> product
          </div>
        </label>
        <label class="job-tag-toggle">
          <input class="job-tag-toggle__input" name="job-tag-toggle" type="radio" value="[data-filter~=support]">
          <div class="job-title job-tag-toggle__content" data-job-id="support">
            <div class="job-tag-toggle__dot job-tag-toggle__dot--support"></div> support
          </div>
        </label>
        <label class="job-tag-toggle">
          <input class="job-tag-toggle__input" name="job-tag-toggle" type="radio" value="[data-filter~=finance]">
          <div class="job-title job-tag-toggle__content" data-job-id="finance">
            <div class="job-tag-toggle__dot job-tag-toggle__dot--finance"></div> finance
          </div>
        </label>
        <label class="job-tag-toggle">
          <input class="job-tag-toggle__input" name="job-tag-toggle" type="radio" value="[data-filter~=security]">
          <div class="job-title job-tag-toggle__content" data-job-id="security">
            <div class="job-tag-toggle__dot job-tag-toggle__dot--security"></div> security
          </div>
        </label>
        <label class="job-tag-toggle">
          <input class="job-tag-toggle__input" name="job-tag-toggle" type="radio" value="[data-filter~=operations]">
          <div class="job-title job-tag-toggle__content" data-job-id="operations">
            <div class="job-tag-toggle__dot job-tag-toggle__dot--operations"></div> operations
          </div>
        </label>
        <label class="job-tag-toggle">
          <input class="job-tag-toggle__input" name="job-tag-toggle" type="radio" value="[data-filter~=marketing]">
          <div class="job-title job-tag-toggle__content" data-job-id="marketing">
            <div class="job-tag-toggle__dot job-tag-toggle__dot--marketing"></div> marketing
          </div>
        </label>
        <label class="job-tag-toggle">
          <input class="job-tag-toggle__input" name="job-tag-toggle" type="radio" value="[data-filter~=data]">
          <div class="job-title job-tag-toggle__content" data-job-id="data">
            <div class="job-tag-toggle__dot job-tag-toggle__dot--data"></div> data
          </div>
        <!-- </label>
        <label class="job-tag-toggle">
          <input class="job-tag-toggle__input" name="job-tag-toggle" type="radio" value="[data-filter~=design]">
          <div class="job-tag-toggle__content">
            <div class="job-tag-toggle__dot job-tag-toggle__dot--design"></div> design
          </div>
        </label>
        <label class="job-tag-toggle">
          <input class="job-tag-toggle__input" name="job-tag-toggle" type="radio" value="[data-filter~=legal]">
          <div class="job-tag-toggle__content">
            <div class="job-tag-toggle__dot job-tag-toggle__dot--legal"></div> legal
          </div>
        </label>
        <label class="job-tag-toggle">
          <input class="job-tag-toggle__input" name="job-tag-toggle" type="radio" value="[data-filter~=sales]">
          <div class="job-tag-toggle__content">
            <div class="job-tag-toggle__dot job-tag-toggle__dot--sales"></div> sales
          </div>
        </label> -->
      </div>
    </div>
  </section>
  
  <!-- <section class="jobs-list js-filtration-list" id="MixItUp38F87D">
    <div class="container">
      <div class="mixitup-controls">
        <button class="filter control" data-filter="all">All Jobs</button>
        <button class="filter control" data-filter=".engineering">Engineering</button>
        <button class="filter control" data-filter=".product">Product</button>
        <button class="filter control" data-filter=".support">Support</button>
        <button class="filter control" data-filter=".finance">Finance</button>
        <button class="filter control" data-filter=".security">Security</button>
        <button class="filter control" data-filter=".operations">Operations</button>
        <button class="filter control" data-filter=".marketing">Marketing</button>
        <button class="filter control" data-filter=".data">Data</button>
        <button class="filter control" data-filter=".design">Design</button>
        <button class="filter control" data-filter=".legal">Legal</button>
        <button class="filter control" data-filter=".sales">Sales</button>
      </div>
      
      <div class="jobs-container mixitup-container" id="list">
        <div class="mix engineering" data-bound="">
          <h2 class="job-title">Software Engineer</h2>
          <p class="job-description">We are seeking a skilled software engineer to join our engineering team.</p>
          <p class="job-tags">Engineering, Software Development, Web Development</p>
        </div>
        <div class="mix product" data-bound="">
          <h2 class="job-title">Product Manager</h2>
          <p class="job-description">We are looking for an experienced product manager to lead our product team.</p>
          <p class="job-tags">Product Management, Agile, User Experience</p>
        </div>
        <div class="mix support" data-bound="">
          <h2 class="job-title">Customer Support Specialist</h2>
          <p class="job-description">We are hiring a customer support specialist to assist our customers.</p>
          <p class="job-tags">Customer Service, Troubleshooting, Communication</p>
        </div>
        <!-- Add more job listings here -->
      </div>
    </div>
  <!-- </section> -->
  
  

<script>
    // Add event listeners to job title elements
    const jobTitles = document.querySelectorAll('.job-title');
    jobTitles.forEach((title) => {
      title.addEventListener('click', showSelectedJob);
    });

    function showSelectedJob(event) {
      // Hide all job content sections
      const jobContents = document.querySelectorAll('.job-content');
      jobContents.forEach((content) => {
        content.style.display = 'none';
      });

      // Show the selected job content
      const selectedJobId = event.target.getAttribute('data-job-id');
      const selectedJobContent = document.getElementById(selectedJobId);
      selectedJobContent.style.display = 'block';
    }
  </script>
</body>
</html>

<style>
    .card-animation {
      animation: cardFadeIn 0.7s ease-in-out forwards;
      opacity: 0;
    }

    @keyframes cardFadeIn {
      from {
        opacity: 0;
        transform: translateY(50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </style>
  <script>
    
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
  <script>
    $(document).ready(function() {
      $('.card').addClass('card-animation');
    });
  </script>
  </script>

  <!-- Example job content sections -->
  <section id="engineering" class="job-content">
    <div class="card card-animation">
        <div class="card-body">
            <h3 class="card-title">Engineering</h3>
            <p class="card-text">Engineering</p>
            <p class="card-text">Job Title: Full Stack Developer</p>
            <p class="card-text">Location: Andheri East</p>
            <p class="card-text">Job Type: Full-Time</p>
            <p class="card-text">Job Description: We are seeking a highly skilled Full Stack Developer to join our team. As a Full Stack Developer, you will be responsible for developing and maintaining both the front-end and back-end components of our web applications. You will collaborate with cross-functional teams to design, develop, and deploy scalable and robust software solutions that meet our clients' needs. The ideal candidate is proficient in both front-end and back-end development technologies and has a solid understanding of software development principles.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Apply Now
            </button>
        </div>
    </div>
</section>


  </section>
  <section id="product" class="job-content">
    <div class="card card-animation">
        <div class="card-body">
            <h3 class="card-title">Product</h3>
            <p class="card-text">Product</p>
            <h4 class="card-subtitle">Job Summary:</h4>
            <p class="card-text">We are seeking a highly organized and experienced Human Resources Specialist to join our team. As a Human Resources Specialist, you will be responsible for managing various HR functions, including recruitment, employee onboarding and offboarding, benefits administration, performance management, employee relations, and compliance with employment laws and regulations. Your role will be critical in maintaining a positive work environment and supporting the company's overall strategic objectives.</p>
            <p class="card-text">Location: Andheri East</p>
            <p class="card-text">Job Type: Full-Time</p>
            <h4 class="card-subtitle">Responsibilities:</h4>
            <h5 class="card-subtitle">Recruitment and Selection:</h5>
            <p class="card-text">Collaborate with hiring managers to identify staffing needs and develop job descriptions.</p>
            <p class="card-text">Source, screen, and interview candidates using various recruitment methods.</p>
            <p class="card-text">Conduct reference checks and coordinate background checks.</p>
            <p class="card-text">Assist in making final hiring decisions and extending job offers.</p>
            <h5 class="card-subtitle">Onboarding and Offboarding:</h5>
            <p class="card-text">Facilitate new employee orientation programs, ensuring a smooth transition for new hires.</p>
            <p class="card-text">Coordinate the necessary paperwork, including employment contracts, benefits enrollment, and other required documents.</p>
            <p class="card-text">Conduct exit interviews and ensure appropriate offboarding procedures are followed.</p>
            <h5 class="card-subtitle">Benefits Administration:</h5>
            <p class="card-text">Administer employee benefits programs, including health insurance, retirement plans, and other employee perks.</p>
            <p class="card-text">Educate employees on benefits options and assist with inquiries and issue resolution.</p>
            <p class="card-text">Collaborate with benefit providers to ensure accurate and timely administration.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Apply Now
            </button>
        </div>
    </div>
</section>

  </section>
  <section id="support" class="job-content">
  <div class="card card-animation">
    <div class="card-body">
      <h3 class="card-title">Support</h3>
      <p class="card-text">We're looking for a curious Software Engineer to join our team! The position will include building great products, tackling interesting challenges, and contributing to our engineering culture. We expect you to work in pairs, use test-driven development, be experienced in building complex web applications, and write both clean and maintainable code.</p>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Apply Now
      </button>
    </div>
  </div>
</section>

  <section id="finance" class="job-content">
  <div class="card card-animation">
    <div class="card-body">
      <h3 class="card-title">Finance</h3>
      <p class="card-text">We're looking for a curious Software Engineer to join our team! The position will include building great products, tackling interesting challenges, and contributing to our engineering culture. We expect you to work in pairs, use test-driven development, be experienced in building complex web applications, and write both clean and maintainable code.</p>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Apply Now
      </button>
    </div>
  </div>
</section>

<section id="security" class="job-content">
  <div class="card card-animation">
    <div class="card-body">
      <h3 class="card-title">Security</h3>
      <p class="card-text">We're looking for a curious Software Engineer to join our team! The position will include building great products, tackling interesting challenges, and contributing to our engineering culture. We expect you to work in pairs, use test-driven development, be experienced in building complex web applications, and write both clean and maintainable code.</p>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Apply Now
      </button>
    </div>
  </div>
</section>

<section id="operations" class="job-content">
  <div class="card card-animation">
    <div class="card-body">
      <h3 class="card-title">Operations</h3>
      <p class="card-text">We're looking for a curious Software Engineer to join our team! The position will include building great products, tackling interesting challenges, and contributing to our engineering culture. We expect you to work in pairs, use test-driven development, be experienced in building complex web applications, and write both clean and maintainable code.</p>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Apply Now
      </button>
    </div>
  </div>
</section>

<section id="marketing" class="job-content">
  <div class="card card-animation">
    <div class="card-body">
      <h3 class="card-title">Marketing</h3>
      <p class="card-text">We're looking for a curious Software Engineer to join our team! The position will include building great products, tackling interesting challenges, and contributing to our engineering culture. We expect you to work in pairs, use test-driven development, be experienced in building complex web applications, and write both clean and maintainable code.</p>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Apply Now
      </button>
    </div>
  </div>
</section>

<section id="data" class="job-content">
  <div class="card card-animation">
    <div class="card-body">
      <h3 class="card-title">Data</h3>
      <p class="card-text">We're looking for a curious Software Engineer to join our team! The position will include building great products, tackling interesting challenges, and contributing to our engineering culture. We expect you to work in pairs, use test-driven development, be experienced in building complex web applications, and write both clean and maintainable code.</p>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Apply Now
      </button>
    </div>
  </div>
</section>

  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Benefits and Perks</title>
  <style>
    /* Reset default styles */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      line-height: 1.5;
      color: #333;
      background-color: #f5f5f5;
    }

    /* Wrapper */
    .wrapper {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    /* List Box */
    .list-box {
      background-color: #fff;
      border-radius: 6px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    /* Inner Content */
    .list-box__inner {
      padding: 40px 20px;
    }

    /* Title */
    .list-box__title {
      font-size: 36px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    /* Subtitle */
    .list-box__subtitle {
      font-size: 18px;
      margin-bottom: 30px;
      color: #666;
    }

    /* Download Link */
    .download-link {
      display: inline-block;
      margin-top: 20px;
      color: #f8646a;
      text-decoration: none;
      font-weight: bold;
    }

    /* Separator Line */
    .list-box__separator {
      height: 1px;
      background-color: #eee;
      margin: 40px 0;
    }

    /* Column Layout */
    .list-box__content {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .column {
      flex-basis: calc(50% - 10px);
      margin-bottom: 20px;
    }

    /* List Items */
    .list-box__list {
      list-style: none;
      padding: 0;
    }

    .list-box__item {
      margin-bottom: 20px;
    }

    .list-box__item-title {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .list-box__item-text {
      font-size: 16px;
      color: #666;
    }
  </style>
</head>
<body>
  <br><br>
  <section class="list-box list-box--careers">
    <div class="wrapper">
      <div class="list-box__inner">
        <h2 class="list-box__title">
          <span style="color:#007bff">Benefits</span> <br> and Perks
        </h2>
        <div class="list-box__subtitle">Our team is jam packed with creative, smart and bubbly people. We inspire each other to improve daily, and be the best and happiest we can be.</div>
        <!-- <a class="enlarged-link download-link" href="/downloads/
         Bonuses &amp; Benefits.pdf" target="_blank">
          Download for more details
        </a> -->
      </div>
      <div class="list-box__separator"></div>
      <div class="list-box__content">
        <div class="column">
          <ul class="list-box__list">
            <li class="list-box__item">
              <div class="list-box__item-title"><h3>Growth opportunities</h3></div>
              <div class="list-box__item-text">Outline your growth and development plan, expand your skills, knowledge, and career horizons in a supportive and innovative environment.</div>
            </li>
            <li class="list-box__item">
              <div class="list-box__item-title"><h3>Remote and flexible schedule</h3></div>
              <div class="list-box__item-text">Techsimians live in more than 25 countries with different time zones. All of them are free to choose their most productive work time and place.</div>
            </li>
            <li class="list-box__item">
              <div class="list-box__item-title"><h3>Smart Expense policy</h3></div>
              <div class="list-box__item-text">There's an additional sum allocated to help you set up your workstation, improve your health, and learn whatever you want and how you want. No. Questions. Asked.</div>
            </li>
            <li class="list-box__item">
              <div class="list-box__item-title"><h3>Secure hardware and equipment</h3></div>
              <div class="list-box__item-text">Your productivity is our priority. Once you join Techsimians, you’ll get secure equipment of your choice.</div>
            </li>
          </ul>
        </div>
        <div class="column">
          <ul class="list-box__list">
            <li class="list-box__item">
              <div class="list-box__item-title"><h3>Competitive compensation</h3></div>
              <div class="list-box__item-text">Let's face it: in a late capitalistic world, getting paid well certainly doesn't hurt.</div>
            </li>
            <li class="list-box__item">
              <div class="list-box__item-title"><h3>23 Paid days off</div>
              <div class="list-box__item-text">Tech Simians rest 16 days per year + 10 days to cover your national holidays.</div>
            </li>
            <li class="list-box__item">
              <div class="list-box__item-title"><h3>Regular online and offline gatherings</h3></div>
              <div class="list-box__item-text">We frequently meet online and offline to get acquainted, collaborate, build a network, and have fun together.</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</body>
</html>

<style>
  .list-box {
  /* Add your styles for the list box section here */
}
.list-box__content {
      display: flex;
      position: relative;
    }

    .column {
      flex: 1;
    }
    .list-box__separator {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 90%;
      height: 1px;
      background-color: #ccc;
      border: none;
    }
.list-box__inner {
  /* Add your styles for the list box inner content here */
}

.list-box__aside {
  /* Add your styles for the aside content here */
}

.list-box__title {
  /* Add your styles for the section title here */
}

.list-box__subtitle {
  /* Add your styles for the section subtitle here */
}

.list-box__content {
  display: flex;
}

.column {
  flex: 1;
}

.list-box__list {
  /* Add your styles for the list items here */
}

.list-box__item {
  /* Add your styles for each list item here */
}

.list-box__item-title {
  /* Add your styles for the list item title here */
}

.list-box__item-text {
  /* Add your styles for the list item text here */
}

/* Add any additional custom CSS styles as needed */

</style>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Links Section</title>
  <style>
    /* Reset default styles */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      line-height: 1.5;
      color: #333;
      background-color: #f5f5f5;
    }

    /* Links Section */
    .links {
      padding: 40px 0;
      background-color: #f9f9f9;
    }

    .links-box {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: center;
    }

    .links-box__wrap {
      display: flex;
      justify-content: space-between;
      max-width: 1200px;
    }

    .links-box__item {
      flex-basis: calc(50% - 10px);
      display: flex;
      flex-direction: column;
      align-items: center;
      text-decoration: none;
      color: #333;
      background-color: #fff;
      border-radius: 6px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .links-box__item:hover {
      transform: translateY(-5px);
    }

    .links-box__bg {
      position: relative;
      overflow: hidden;
      width: 100%;
      height: 0;
      padding-bottom: 60%;
    }

    .links-box__img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .links-box__content {
      padding: 20px;
      text-align: center;
    }

    .links-box__title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .links-box__subtitle {
      font-size: 16px;
      color: #666;
    }
  </style>
</head>
<body>
  <section class="links">
    <div class="links-box">
      <div class="links-box__wrap">
        <a class="links-box__item links-box__item_services" href="{{url('about-us')}}">
          <div class="links-box__bg">
            <picture>
              <source srcset="{{asset('frontend/assets/img/about.jpg')}}" type="image/webp">
              <source srcset="{{asset('frontend/assets/img/about.jpg')}}" type="image/jpg">
              <img alt="" class="links-box__img" src="{{asset('frontend/assets/img/about.jpg')}}">
            </picture>
          </div>
          <div class="links-box__content">
            <h3 class="links-box__title">About Us</h3>
            <div class="links-box__subtitle">Our team is jam packed with creative, smart and bubbly people. We inspire each other to improve daily, and be the best and happiest we can be.</div>
          </div>
        </a>
        <a class="links-box__item links-box__item_team" href="{{url('about-us')}}">
          <div class="links-box__bg">
            <picture>
              <source srcset="{{asset('frontend/assets/img/team.jpg')}}" type="image/webp">
              <source srcset="{{asset('frontend/assets/img/team.jpg')}}" type="image/jpg">
              <img alt="" class="links-box__img" src="{{asset('frontend/assets/img/team.jpg')}}">
            </picture>
          </div>
          <div class="links-box__content">
            <h3 class="links-box__title">Team</h3>
            <div class="links-box__subtitle">We have a team of professionals and experts that ensure every project is in sync with the client requirements in terms of timeliness, quality, consistency and flexibility. With its pool of quality and skilled resources.</div>
          </div>
        </a>
      </div>
    </div>
  </section>
</body>
</html>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kindly fill the form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('apply') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="name">Job Title</label>
        <input type="text" name="job_title" class="form-control" id="job_title" placeholder="Enter your job title" required>
        @error('job_title')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter your phone number" maxlength="10" required>
        @error('phone')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="file">File</label>
        <input type="file" name="file" id="file" accept=".pdf, .doc, .docx, .jpeg, .jpg, .png" required>
        @error('file')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>  
    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" name="message" id="message" rows="2" cols="2" placeholder="Enter your message" required></textarea>
        @error('message')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
  </div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

  <script>
    // Get all job title elements
    const jobTitles = document.querySelectorAll('.job-title');

    // Add event listener to each job title
    jobTitles.forEach((title) => {
      title.addEventListener('click', showSelectedJob);
    });

    function showSelectedJob(event) {
      // Hide all job content sections
      const jobContents = document.querySelectorAll('.job-content');
      jobContents.forEach((content) => {
        content.style.display = 'none';
      });

      // Show the selected job content
      const selectedJobId = event.target.getAttribute('data-job-id');
      const selectedJobContent = document.getElementById(selectedJobId);
      selectedJobContent.style.display = 'block';
    }
  </script>

 
  
  <script src="script.js"></script>
</body>
</html>

  <script>
    // Get the job description element
var jobDescription = document.querySelector('.job-description .description-content');

// Get the radio inputs for job tags
var jobTagInputs = document.querySelectorAll('.job-tag-toggle__input');

// Add event listeners to the job tag inputs
jobTagInputs.forEach(function(input) {
  input.addEventListener('click', function() {
    var selectedValue = this.value;

    if (selectedValue === '[data-filter~=engineering]') {
      jobDescription.textContent = 'Engineering job description goes here.5';
    } else {
      jobDescription.textContent = ''; // Clear the job description if a different job tag is selected
    }
  });
});

    // Get all job title elements
    const jobTitles = document.querySelectorAll('.job-title');

    // Add event listener to each job title
    jobTitles.forEach((title) => {
      title.addEventListener('click', showSelectedJob);
    });

    function showSelectedJob(event) {
      // Hide all job content sections
      const jobContents = document.querySelectorAll('.job-content');
      jobContents.forEach((content) => {
        content.style.display = 'none';
      });

      // Show the selected job content
      const selectedJobId = event.target.getAttribute('data-job-id');
      const selectedJobContent = document.getElementById(selectedJobId);
      selectedJobContent.style.display = 'block';
    }
  </script> 

<section class="job-description">
  <div class="container">
    <div class="description-content">
    Job description content will be displayed here..
    </div>
  </div>
</section>  
</body>
</html>
<style>
  .container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

.job-tag-toggle {
  display: inline-flex;
  align-items: center;
  margin-right: 15px;
  cursor: pointer;
}

.job-tag-toggle__input {
  display: none;
}

.job-tag-toggle__content {
  display: flex;
  align-items: center;
  padding: 10px;
  border-radius: 20px;
  background-color: #f0f0f0;
  transition: background-color 0.3s ease;
}

.job-tag-toggle__input:checked ~ .job-tag-toggle__content {
  background-color: #333;
  color: #fff;
}

.job-tag-toggle__ico {
  width: 16px;
  height: 16px;
  margin-right: 8px;
}

.job-tag-toggle__dot {
  width: 10px;
  height: 10px;
  margin-right: 8px;
  border-radius: 50%;
}

.job-tag-toggle__dot--engineering {
  background-color: #ff6d00;
}

.job-tag-toggle__dot--product {
  background-color: #2e7d32;
}

.job-tag-toggle__dot--support {
  background-color: #01579b;
}

.job-tag-toggle__dot--finance {
  background-color: #fdd835;
}

.job-tag-toggle__dot--security {
  background-color: #6d4c41;
}

.job-tag-toggle__dot--operations {
  background-color: #5e35b1;
}

.job-tag-toggle__dot--marketing {
  background-color: #e53935;
}

.job-tag-toggle__dot--data {
  background-color: #4caf50;
}

.job-tag-toggle__dot--design {
  background-color: #00acc1;
}

.job-tag-toggle__dot--legal {
  background-color: #f48fb1;
}

.job-tag-toggle__dot--sales {
  background-color: #8e24aa;
}

.mixitup-controls {
  margin-bottom: 20px;
}

.filter {
  display: inline-block;
  margin-right: 10px;
  padding: 10px 20px;
  background-color: #f0f0f0;
  color: #333;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.filter:hover {
  background-color: #333;
  color: #fff;
}

.jobs-container .mix {
  display: none;
}

.jobs-container .mix.show {
  display: block;
}

.job-title {
  margin-top: 0;
}

.job-description {
  margin-bottom: 10px;
}

.job-tags {
  font-style: italic;
  color: #777;
}

.list-box__heading {
  margin-top: 0;
}

.benefits-list {
  list-style: disc;
  padding-left: 20px;
}

</style>

    <style>
      /* Hide all job content sections initially */
      .job-content {
        display: none;
      }
    </style>
<script>


// Get the job description element
var jobDescription = document.querySelector('.job-description .description-content');

// Get the radio inputs for job tags
var jobTagInputs = document.querySelectorAll('.job-tag-toggle__input');

// Add event listeners to the job tag inputs
jobTagInputs.forEach(function(input) {
  input.addEventListener('click', function() {
    var selectedValue = this.value;

    // Hide all job descriptions
    var allDescriptions = document.querySelectorAll('.job-description .description-content');
    allDescriptions.forEach(function(description) {
      description.style.display = 'none';
    });

    if (selectedValue === '[data-filter~=engineering]') {
      jobDescription.textContent = 'Engineering job description goes here., please enter a description';
    } else if (selectedValue === '[data-filter~=product]') {
      jobDescription.textContent = 'Product job description goes here.';
    } else if (selectedValue === '[data-filter~=support]') {
      jobDescription.textContent = 'Support job description goes here.';
    } else if (selectedValue === '[data-filter~=finance]') {
      jobDescription.textContent = 'Finance job description goes here.';
    } else if (selectedValue === '[data-filter~=security]') {
      jobDescription.textContent = 'Security job description goes here.';
    } else if (selectedValue === '[data-filter~=operations]') {
      jobDescription.textContent = 'Operations job description goes here.';
    } else if (selectedValue === '[data-filter~=marketing]') {
      jobDescription.textContent = 'Marketing job description goes here.';
    } else if (selectedValue === '[data-filter~=data]') {
      jobDescription.textContent = 'Data job description goes here.';
    } else if (selectedValue === '[data-filter~=design]') {
      jobDescription.textContent = 'Design job description goes here.';
    } else if (selectedValue === '[data-filter~=legal]') {
      jobDescription.textContent = 'Legal job description goes here.';
    } else if (selectedValue === '[data-filter~=sales]') {
      jobDescription.textContent = 'Sales job description goes here.';
    } else {
      jobDescription.textContent = ''; // Clear the job description if no job tag is selected
    }

    // Show the current job description
    jobDescription.style.display = 'block';
  });
});



// Get the job description element
var jobDescription = document.querySelector('.job-description .description-content');

// Get the radio inputs for job tags
var jobTagInputs = document.querySelectorAll('.job-tag-toggle__input');

// Store the previously selected input
var previousInput = null;

// Add event listeners to the job tag inputs
jobTagInputs.forEach(function(input) {
  input.addEventListener('click', function() {
    var selectedValue = this.value;

    // Hide the previously displayed job description
    if (previousInput !== null) {
      var previousJobDescription = document.querySelector(previousInput.dataset.filter);
      previousJobDescription.style.display = 'none';
    }

    // Show the current job description
    var currentJobDescription = document.querySelector(selectedValue);
    currentJobDescription.style.display = 'block';

    // Update the previous input
    previousInput = this;

  });
});



 
  // Show job description when a job is clicked
  jobListings.forEach(listing => {
    listing.addEventListener('click', function () {
      jobDescription.textContent = this.querySelector('.job-description').textContent;
    });
  });

  // Filter jobs when toggles are clicked
  filterToggles.forEach(toggle => {
    toggle.addEventListener('change', filterJobs);
  });
});
// Get the job description element
var jobDescription = document.querySelector('.job-description .description-content');

// Get the engineering radio input
var engineeringRadio = document.querySelector('input[value="[data-filter~=engineering]"]');

// Add event listener to the engineering radio input
engineeringRadio.addEventListener('click', function() {
  // Update the job description content
  jobDescription.textContent = 'Engineering job description goes here.';
});

</script>
  </body>
  @include('frontend.layouts.footer');
