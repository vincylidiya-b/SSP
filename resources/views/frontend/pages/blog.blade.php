@extends('frontend.layouts.subpage')
@section('title', 'Blogs')
@section('description', 'Stay updated with the latest trends in education technology, school management tips, and SmartSchool Plus updates.')
@section('keywords', 'Education blog, edtech trends, school management tips, SmartSchool updates, education technology news')
@section('content')

    <main class="main-area fix">
        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h1 class="title">Blogs</h1>
                            <nav class="breadcrumb">
                                <span><a href="{{ url('/') }}">Home</a></span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span>Blogs</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->
         <div class="container">
    <div class="text-center py-5">
        <h2 style="font-size:42px; font-weight:700; color:#0c0c44;">
            Insights That Inspire Education
        </h2>
        <p style="font-size:18px; color:#666;">
           
        Explore the latest trends, ideas, and innovations in education and school management.
Stay updated with smart technologies, digital learning strategies, and modern solutions transforming the future of education.

        </p>
    </div>
</div>

        <!-- blog-area -->
        <section class="blog-area section-py-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="row gutter-20">
                            @foreach ($blogs as $blog)
                                <div class="col-xl-4 col-md-6">
                                    <div class="blog__post-item shine__animate-item">
                                        <div class="blog__post-thumb">
                                            <a href="{{ url('blog/' . $blog->slug) }}" class="shine__animate-link">
                                                <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('assets/img/banner/popup-image.png') }}"
                                                    alt="{{ $blog->title }}">
                                            </a>
                                            {{-- <a href="{{ url('blog/category/' . $blog->category) }}"
                                                class="post-tag">{{ $blog->category ?? 'General' }}</a> --}}
                                        </div>
                                        <div class="blog__post-content">
                                            <div class="blog__post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>
                                                        {{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}
                                                    </li>
                                                    <li><i class="flaticon-user-1"></i> by <a
                                                            href="#">{{ $blog->author ?? 'Admin' }}</a></li>
                                                </ul>
                                            </div>
                                            <h4 class="title"><a
                                                    href="{{ url('blog/' . $blog->slug) }}">{{ $blog->title }}</a></h4>
                                            <p>{{ Str::limit($blog->excerpt, 80) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <nav class="pagination__wrap mt-25">
                            {{-- {{ $blogs->links('vendor.pagination.bootstrap-4') }} --}}
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
