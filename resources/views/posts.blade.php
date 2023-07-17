    @extends('frontend.layouts.app')
    @include('frontend.layouts.header')

    <br><br><br><br>
    <section>
        <div class="container">
            <h1 style="text-align:center">Blog</h1>

            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5>{{ $post->title }}</h5>
                                <p>
                                    @if(strlen($post->description) > 50)
                                        <span class="read-more-content hide_content">{{ $post->description }}</span>
                                        <span class="read-more-show">Read More <i class="fa fa-angle-down"></i></span>
                                    @else
                                        {{ $post->description }}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.read-more-show').on('click', function(e) {
                $(this).siblings('.read-more-content').removeClass('hide_content');
                $(this).addClass('hide_content');
                e.preventDefault();
            });
        });
    </script>
    <style type="text/css">
        .read-more-show {
            cursor: pointer;
            color: #ed8323;
        }

        .hide_content {
            display: none;
        }
    </style>

    @include('frontend.layouts.footer')
