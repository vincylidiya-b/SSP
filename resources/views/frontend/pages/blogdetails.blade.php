@extends('frontend.layouts.subpage')
@section('title', $blogs->title)
@section('description', $blogs->seo_description ?? Str::limit(strip_tags($blogs->description ?? ''), 150))
@section('keywords', $blogs->seo_keywords ?? 'SmartSchool Plus, Education, Blog')
@section('content')

    <!-- main-area -->
    <main class="main-area fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3 class="title">{{ $blogs->title ?? '' }}</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="{{ url('/') }}">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="{{ route('frontend.pages.blog') }}">Blogs</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">{{ $blogs->title ?? '' }}</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape-wrap">
                <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
                <img src="{{ asset('assets/img/others/breadcrumb_shape02.svg') }}" alt="img" data-aos="fade-right"
                    data-aos-delay="300">
                <img src="{{ asset('assets/img/others/breadcrumb_shape03.svg') }}" alt="img" data-aos="fade-up"
                    data-aos-delay="400">
                <img src="{{ asset('assets/img/others/breadcrumb_shape04.svg') }}" alt="img" data-aos="fade-down-left"
                    data-aos-delay="400">
                <img src="{{ asset('assets/img/others/breadcrumb_shape05.svg') }}" alt="img" data-aos="fade-left"
                    data-aos-delay="400">
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-details-area -->
        <section class="blog-details-area section-py-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="blog__details-wrapper">
                            <div class="blog__details-thumb">
                                <img src="{{ $blogs->image ? asset('storage/' . $blogs->image) : asset('assets/img/banner/popup-image.png') }}"
                                    alt="{{ $blogs->title }}">
                            </div>
                            <div class="blog__details-content">
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>
                                            {{ \Carbon\Carbon::parse($blogs->created_at)->format('d M, Y') }}</li>
                                        <li><i class="flaticon-user-1"></i> by <a
                                                href="#">{{ $blogs->author ?? 'Admin' }}</a></li>
                                        <li><i class="far fa-comment-alt"></i> {{ $blogCommentCount }} Comments</li>
                                    </ul>
                                </div>
                                <h2 class="title">{{ $blogs->title ?? '' }}</h2>

                                @if (!empty($blogs->description))
                                    @php
                                        $descriptions = is_array($blogs->description)
                                            ? $blogs->description
                                            : json_decode($blogs->description, true);
                                    @endphp

                                    @foreach ($descriptions as $block)
                                        @php
                                            $dataBlock = $block['data'];
                                            $content = data_get($dataBlock, 'content', '');
                                            $alt = data_get($dataBlock, 'alt', '');
                                            $image = data_get($dataBlock, 'image', '');
                                            $images = data_get($dataBlock, 'images', []);
                                            $url = data_get($dataBlock, 'url', '');
                                            $level = data_get($dataBlock, 'level', 'h3');
                                        @endphp

                                        @switch($block['type'])
                                            @case('heading')
                                                {!! "<{$level}>{$content}</{$level}>" !!}
                                            @break

                                            @case('Rich Editor')
                                                {!! $content !!}
                                            @break

                                            @case('image')
                                                @if ($url)
                                                    <img src="{{ asset("storage/$url") }}" alt="{{ $alt }}">
                                                @endif
                                            @break

                                            @case('Multiple Images')
                                                @if (is_array($url) && count($url))
                                                    @php
                                                        $duplicatedImages = array_merge($url, $url); // Duplicate images for infinite effect
                                                        $chunks = array_chunk($duplicatedImages, 3); // Split into sets of 3
                                                    @endphp

                                                    <div id="carousel-{{ $loop->index }}" class="carousel slide"
                                                        data-bs-ride="carousel" data-bs-interval="3000">
                                                        <div class="carousel-inner">
                                                            @foreach ($chunks as $key => $chunk)
                                                                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                                                    <div class="row">
                                                                        @foreach ($chunk as $image)
                                                                            <div class="col-md-4">
                                                                                <a href="{{ asset("storage/$image") }}"
                                                                                    class="glightbox"
                                                                                    data-gallery="gallery-{{ $loop->parent->index }}">
                                                                                    <img src="{{ asset("storage/$image") }}"
                                                                                        alt="{{ $blogs->title }} - Gallery Image"
                                                                                        class="d-block w-100 img-thumbnail fixed-size">
                                                                                </a>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>

                                                        <button class="carousel-control-prev" type="button"
                                                            data-bs-target="#carousel-{{ $loop->index }}" data-bs-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        </button>
                                                        <button class="carousel-control-next" type="button"
                                                            data-bs-target="#carousel-{{ $loop->index }}" data-bs-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        </button>
                                                    </div>
                                                @endif
                                            @break

                                            @default
                                                <div>{{ 'Block type not recognized.' }}</div>
                                        @endswitch
                                    @endforeach
                                @endif

                            </div>
                        </div>

                        <div class="blog-post-comment">
                            {{-- Success Message --}}
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert" id="success">
                                    <strong>{{ session('success') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            {{-- Error Message --}}
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ session('error') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="comment-respond">
                                <h4 class="comment-reply-title">Post a comment</h4>
                                <form action="{{ route('blog.comment.store', $blogs->id) }}" class="comment-form"
                                    method="POST">
                                    @csrf
                                    <p class="comment-notes">
                                        <span>Your email address will not be published. Required fields are marked *</span>
                                    </p>
                                    <div class="comment-field">
                                        <textarea placeholder="Comment *" name="comment" required></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="comment-field">
                                                <input type="text" placeholder="Name *" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="comment-field">
                                                <input type="email" placeholder="Email *" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="comment-field">
                                                <input type="text" placeholder="Website" name="website">
                                            </div>
                                        </div>
                                    </div>

                                    <p class="form-submit"></p>
                                    <button class="btn btn-two arrow-btn" type="submit">Post Comment <img
                                            src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img"
                                            class="injectable"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <aside class="blog-sidebar">
                            <div class="blog-widget">
                                <h4 class="widget-title">Latest Blogs</h4>

                                @foreach ($latestBlogs as $blog)
                                    <div class="rc-post-item">
                                        <div class="rc-post-thumb">
                                            <a href="{{ url('blog/' . $blog->slug) }}">
                                                <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('assets/img/banner/popup-image.png') }}"
                                                    alt="{{ $blog->title }}">
                                            </a>
                                        </div>
                                        <div class="rc-post-content">
                                            <span class="date"><i class="flaticon-calendar"></i>
                                                {{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}</span>
                                            <h4 class="title">
                                                <a href="{{ url('blog/' . $blog->slug) }}">{{ $blog->title }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area-end -->

    </main>
    <!-- main-area-end -->
@endsection
@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const lightbox = GLightbox({
                selector: '.glightbox',
                touchNavigation: true,
                loop: true,
                closeOnOutsideClick: true,
            });
        });
    </script>
@endsection
