@extends('frontend.layouts.app');
@include('frontend.layouts.header');
<body>
   
    <main class="container">
      <section class="breadcrumb">
        <a href="{{'/'}}" class="breadcrumb__link">Home</a>
        <a href="{{url('privacy-policy')}}" class="breadcrumb__link">Privacy Policy</a>
      </section>
      <article class="terms">
        <h1>Terms of Services</h1>
      </article>
    </main>
 
  </body>

  @include('frontend.layouts.footer');
