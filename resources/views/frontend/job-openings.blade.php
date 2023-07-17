@extends('frontend.layouts.app');
@include('frontend.layouts.header');
<body>
   
    <main class="container">
      <section class="breadcrumb">
        <a href="{{url('/')}}" class="breadcrumb__link">Home</a>
        <a href="{{url('careers')}}" class="breadcrumb__link">Careers</a>
        <a href="{{url('job-opening')}}" class="breadcrumb__link">Visual Designer</a>
      </section>
      <section class="job">
        <h2 class="job__title">
          Grow as a designer in a way school can’t teach you!
        </h2>
        <div class="job__content">
          At Yummygum we make top notch digital solutions for amazing clients at
          spectacular companies, big and small. From our clean and minimal
          office located in the heart of Amsterdam we refine, design and build
          brands and digital products.
        </div>
        <div class="job__cta">
          <a href="{{url('careers')}}" class="button button--blue">Apply Now</a>
        </div>
      </section>
      <section class="openings">
        <div class="opening__title">Job Openings</div>
        <a href="#" class="opening__item">
          <div class="opening__item-title">Visual Designer Intern</div>
          <div class="opening__item-content">
            Grow as a designer in a way school can’t teach
          </div>
        </a>
      </section>
    </main>
    
  </body>
  @include('frontend.layouts.footer');