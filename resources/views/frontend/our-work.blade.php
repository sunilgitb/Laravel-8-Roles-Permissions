@extends('frontend.layouts.app');
@include('frontend.layouts.header');
<body>
    
    <main class="container">
      <section class="breadcrumb">
        <a href="{{url('/')}}" class="breadcrumb__link">Home</a>
        <a class="breadcrumb__link">Work</a>
      </section>

      <div class="workgrid">
        <h1 class="heading">Our Work</h1>
        <div class="subheading">
          We create products only on the basis of user experience and only
          covering the needs of the user.
        </div>
        <div class="workgrid__row">
          <a href="{{url('our-work-detail')}}" class="workgrid__item">
            <div class="workgrid__img">
              <img src="{{asset('frontend/assets/img/our-work_1.png')}}" alt="" />
            </div>
            <div class="workgrid__item-title">Air Book</div>
            <div class="workgrid__item-text">Private Jet booking platform</div>
            <div class="workgrid__item-cta">See More</div>
          </a>
          <a href="{{url('our-work-detail')}}" class="workgrid__item">
            <div class="workgrid__img">
              <img src="{{('frontend/assets/img/our-work_3.png')}}" alt="" />
            </div>
            <div class="workgrid__item-title">Trader X</div>
            <div class="workgrid__item-text">A first polygon 3d website</div>
            <div class="workgrid__item-cta">See More</div>
          </a>
          <a href="{{url('our-work-detail')}}" class="workgrid__item">
            <div class="workgrid__img">
              <img src="{{asset('frontend/assets/img/our-work_2.png')}}" alt="" />
            </div>
            <div class="workgrid__item-title">Project WE</div>
            <div class="workgrid__item-text">Get social</div>
            <div class="workgrid__item-cta">See More</div>
          </a>
          <a href="{{url('our-work-detail')}}" class="workgrid__item">
            <div class="workgrid__img">
              <img src="{{asset('frontend/assets/img/our-work_2.png')}}" alt="" />
            </div>
            <div class="workgrid__item-title">Project WE</div>
            <div class="workgrid__item-text">Get social</div>
            <div class="workgrid__item-cta">See More</div>
          </a>
        </div>
      </div>
    </main>
    
  </body>
  @include('frontend.layouts.footer');
