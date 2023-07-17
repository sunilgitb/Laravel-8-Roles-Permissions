@extends('frontend.layouts.app')
@include('frontend.layouts.header')

<body>
    <main class="container">
        <section class="breadcrumb">
            <a href="/" class="breadcrumb__link">Home</a>
            <a href="#" class="breadcrumb__link">Blog</a>
            <a href="#" class="breadcrumb__link">How to enhance motivation for better business leads?</a>
        </section>

        @foreach ($posts as $key => $post)
            <article class="blog">
                <div class="blog__img">
                    <img src="{{ asset('post/images/' . $post->image) }}" alt="" />
                </div>
                <h3>{{ $post->title }}</h3>
                <div class="blog__meta">
                    <div class="blog__by"><span>by</span> <strong>{{ $post->author }}</strong></div>
                    <div class="blog__date">
                        @if ($post->created_at)
                            {{ $post->created_at->format('F Y') }}
                        @else
                            Unknown Date
                        @endif
                    </div>
                </div>
                <div class="blog__excerpt">
                    {{ $post->excerpt }}
                </div>
                <div class="blog__content">
                    {!! $post->description !!}
                </div>
                <div class="blog__img">
                    <img src="{{ asset('post/images/' . $post->image) }}" alt="" />
                </div>
            </article>

            <div class="blognav">
                <div class="blognav__row">
                    @if ($key > 0)
                        <div class="blognav__item">
                            <a href="{{ route('blog.show', $posts[$key - 1]->id) }}" class="blognav__button">Previous post</a>
                            <h3>{{ $posts[$key - 1]->title }}</h3>
                            <p class="blognav__content">{{ $posts[$key - 1]->excerpt }}</p>
                        </div>
                    @endif

                    @if ($key < count($posts) - 1)
                        <div class="blognav__item">
                            <a href="{{ route('blog.show', $posts[$key + 1]->id) }}" class="blognav__button">Next post</a>
                            <h3>{{ $posts[$key + 1]->title }}</h3>
                            <p class="blognav__content">{{ $posts[$key + 1]->excerpt }}</p>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </main>
</body>
</html>

@include('frontend.layouts.footer')
