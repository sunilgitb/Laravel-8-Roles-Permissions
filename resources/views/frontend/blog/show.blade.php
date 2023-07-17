@extends('frontend.layouts.app')
@include('frontend.layouts.header')

<body>
    <main class="container">
        <section class="breadcrumb">
            <a href="/" class="breadcrumb__link">Home</a>
            <a href="#" class="breadcrumb__link">Blog</a>
            <a href="#" class="breadcrumb__link">How to enhance motivation for better business leads?</a>
        </section>
        
        <article class="blog">
            <div class="blog__img">
                <img src="{{ asset('frontend/assets/img/blog-top.png') }}" alt="" />
            </div>
            <h3 class="">{{ $post->title }}</h3>
            <div class="blog__meta">
                <div class="blog__by"><span>by</span> <strong>{{ $post->author }}</strong></div>
                <div class="blog__date">{{ $post->created_at ? $post->created_at->format('F Y') : 'Unknown Date' }}</div>
            </div>
            <div class="blog__excerpt">
                {{ $post->excerpt }}
            </div>
            <div class="blog__content">
                {!! $post->description !!}
            </div>
            <div class="blog__img">
                <img src="{{ asset('frontend/assets/img/blog-bottom.png') }}" alt="" />
            </div>
        </article>
    </main>
    

    @include('frontend.layouts.footer')
</body>
</html>
