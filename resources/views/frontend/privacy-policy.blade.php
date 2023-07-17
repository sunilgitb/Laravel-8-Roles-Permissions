@extends('frontend.layouts.app');
@include('frontend.layouts.header');
<body>
   
    <main class="container">
      <section class="breadcrumb">
        <a href="{{'/'}}" class="breadcrumb__link">Home</a>
        <a href="{{'privacy-policy'}}" class="breadcrumb__link">Privacy Policy</a>
      </section>
      <article class="privacy">
        <h1>Privacy Policy</h1>
      </article>
    </main>
    
  </body>

  @include('frontend.layouts.footer');
