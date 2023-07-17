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


      <section class="career">
        <h1 class="heading">Let’s get in touch</h1>
        <form class="career__form">
          <div class="input career__name-input">
            <input class="input__field" placeholder="Name" required />
            <div class="input__message"></div>
          </div>
          <div class="input career__email-input">
            <input
              class="input__field"
              placeholder="Email"
              type="email"
              required
            />
            <div class="input__message"></div>
          </div>
          <div class="input career__phone-input">
            <input
              class="input__field"
              placeholder="Phone"
              type="tel"
              required
            />
            <div class="input__message"></div>
          </div>
          <div class="input career__file-input">
            <input class="input__field" type="file" />
            <div class="input__message"></div>
          </div>
          <div class="input career__message-input">
            <textarea
              name=""
              id=""
              class="input__field input__field--textarea"
              placeholder="Message"
              required
              cols="30"
              rows="10"
            ></textarea>
            <div class="input__message"></div>
          </div>
          <div class="career__form-submit">
            <button type="submit" class="button button--blue">SEND</button>
          </div>
        </form>
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
    <!DOCTYPE html>
<html>
<head>

  <style>
    /* Hide all job content sections initially */
    .job-content {
      display: none;
    }
  </style>
</head>
<body>


  <!-- Example job title elements -->
  <!DOCTYPE html>
<html>
<head>

  <style>
    .job-titles {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-gap: 20px;
    }

    .job-title {
      background-color: lightgray;
      padding: 10px;
    }
  </style>
</head>
<body>
 

<div class="job-titles">
  <h6 class="job-title" data-job-id="web-developer" style="margin-left: 10px; margin-right: 10px;">Web Developer</h6>
  <h6 class="job-title" data-job-id="wordpress-developer" style="margin-left: 10px; margin-right: 10px;">Human Resources Specialist</h6>
  <h6 class="job-title" data-job-id="human-resources" style="margin-left: 10px; margin-right: 10px;">Mean Stack Developer</h6>
  <h6 class="job-title" data-job-id="marketing" style="margin-left: 10px; margin-right: 10px;">Marketing</h6>
  <h6 class="job-title" data-job-id="marketing" style="margin-left: 10px; margin-right: 10px;">Marketing</h6>
  <h6 class="job-title" data-job-id="marketing" style="margin-left: 10px; margin-right: 10px;">Marketing</h6>
  <h6 class="job-title" data-job-id="marketing" style="margin-left: 10px; margin-right: 10px;">Marketing</h6>
  <h6 class="job-title" data-job-id="marketing" style="margin-left: 10px; margin-right: 10px;">Marketing</h6>
  <h6 class="job-title" data-job-id="marketing" style="margin-left: 10px; margin-right: 10px;">Marketing</h6>
</div>


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


  <!-- Example job content sections -->
  <section id="web-developer" class="job-content" style="margin-left: 10px; margin-right: 10px;">
    <h3>Web Developer</h3>
    <p>Full Stack Engineer (Ruby / JS)</p><br>
   <p> Job Title: Full Stack Developer</p><br>

    <p>Location: Andheri East</p><br>

    <p>Job Type: Full-Time</p><br>

<br>
Job Description:
We are seeking a highly skilled Full Stack Developer to join our team. As a Full Stack Developer, you will be responsible for developing and maintaining both the front-end and back-end components of our web applications. You will collaborate with cross-functional teams to design, develop, and deploy scalable and robust software solutions that meet our clients' needs. The ideal candidate is proficient in both front-end and back-end development technologies and has a solid understanding of software development principles</p>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Apply Now
</button>
<br><br><br>
  </section>
  <section id="wordpress-developer" class="job-content" style="margin-left: 10px; margin-right: 10px;">
    <h3>Human Resources Specialis</h3><br>
    <p>Job Title: Human Resources Specialist</p><br>

  <p>Job Summary:</p><br>
<p>We are seeking a highly organized and experienced Human Resources Specialist to join our team. As a Human Resources Specialist, you will be responsible for managing various HR functions, including recruitment, employee onboarding and offboarding, benefits administration, performance management, employee relations, and compliance with employment laws and regulations. Your role will be critical in maintaining a positive work environment and supporting the company's overall strategic objectives.</p>
<p>Location: Andheri East</p><br>

<p>Job Type: Full-Time</p><br>
<h3>Responsibilities:<h3><br>

<h3>Recruitment and Selection:</h3><br>

<p>Collaborate with hiring managers to identify staffing needs and develop job descriptions.
Source, screen, and interview candidates using various recruitment methods.
Conduct reference checks and coordinate background checks.
Assist in making final hiring decisions and extending job offers.
Onboarding and Offboarding:</p><br>

<p>Facilitate new employee orientation programs, ensuring a smooth transition for new hires.
Coordinate the necessary paperwork, including employment contracts, benefits enrollment, and other required documents.
Conduct exit interviews and ensure appropriate offboarding procedures are followed.
Benefits Administration:</p><br>

<p>Administer employee benefits programs, including health insurance, retirement plans, and other employee perks.Educate employees on benefits options and assist with inquiries and issue resolution.
Collaborate with benefit providers to ensure accurate and timely administration.</p><br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Apply Now
</button>
<br><br><br>
  </section>
  <section id="human-resources" class="job-content" style="margin-left: 10px; margin-right: 10px;">
    <h3>Human Resources</h3>
    <p>Full Stack Engineer (Ruby / JS)
We're looking for a curious Software Engineer to join our team! The position will include building great products, tackling interesting challenges, and contributing to our engineering culture. We expect you to work in pairs, use test-driven development, be experienced in building complex web applications, and write both clean and maintainable code</p>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Apply Now
</button>
<br><br><br>
  </section>
  <section id="marketing" class="job-content" style="margin-left: 10px; margin-right: 10px;">
    <h3>Marketing</h3>
    <p>Full Stack Engineer (Ruby / JS)
We're looking for a curious Software Engineer to join our team! The position will include building great products, tackling interesting challenges, and contributing to our engineering culture. We expect you to work in pairs, use test-driven development, be experienced in building complex web applications, and write both clean and maintainable code</p>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Apply Now
</button>
<br><br>
  </section>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('apply') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter your phone number">
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
        <textarea class="form-control" name="message" id="message" rows="5" placeholder="Enter your message"></textarea>
        @error('message')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Apply</button>
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
</body>
</html>

  </body>
  @include('frontend.layouts.footer');
