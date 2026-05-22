@extends('frontend.layouts.subpage')
@section('title', $blog->title)
@section('content')
    <!-- Start page-content -->
    <div class="main-content">

        <section id="page-banner" class="pt-30 pb-30 bg_cover bd" data-overlay="9"
            style="background-image: url({{ asset('assets/images/page-banner-1.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-banner-cont">
                            <h2>{{ $blog->title }}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }} ">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
                                </ol>
                            </nav>
                        </div> <!-- page banner cont -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </section>

        <!-- Section: About -->
        <section id="course-part" class="container-fluid py-5">
            <div class="container">
                <div class="section-content">
                    @if ($blog->feature_image)
                        <img width="300px" height="300px"
                            src="{{ asset($blog->feature_image ? asset('storage/' . $blog->feature_image) : asset('assets/img/news-events/1.JPG')) }}"
                            alt="{{ $blog->title }} - Featured Image">
                    @else
                        <img src="{{ asset('assets/assets/images/dummy.jpg') }}" style="width:200px; height:200px;"
                            alt="Default Blog Image">
                    @endif

                    <p>{{ $blog->excerpt }}</p>
                    <br>
                    @if (!empty($blog->content))

                        @foreach ($blog->content as $block)
                            @php
                                $dataBlock = $block['data'];
                                $content = data_get($dataBlock, 'content');
                                $alt = data_get($dataBlock, 'alt');
                                $image = data_get($dataBlock, 'image');
                                $images = data_get($dataBlock, 'images');
                                $url = data_get($dataBlock, 'url');
                                $level = data_get($dataBlock, 'level');

                            @endphp
                            @switch($block['type'])
                                @case('heading')
                                    {!! "<$level>$content</$level>" !!}
                                @break

                                @case('Rich Editor')
                                    {!! $content !!}
                                @break

                                @case('TipTap Editor')
                                    {!! tiptap_converter()->asHTML($content) !!}
                                @break

                                {{-- @case('image')
                                    @if ($blog->mediaImage)
                                        <img src="{{ asset("storage/{$blog->mediaImage->path}") }}" alt="{{ $alt }}">
                                    @endif
                                @break

                                @case('Multiple Images')
                                    @if ($images && count($images) > 0)
                                        @foreach ($images as $image)
                                            @php 
                                                $imagePath = \App\Helpers\Common::getImage($image);
                                            @endphp
                                             <img src="{{ asset("storage/{$imagePath}") }}" alt="{{ $alt }}">
                                        @endforeach
                                    @endif
                                @break --}}
                                @case('image')
                                    @if ($url)
                                        <img src="{{ asset("storage/$url") }}" alt="{{ $alt }}">
                                    @endif
                                @break

                                @case('Multiple Images')
                                    @if (is_array($url) && count($url))
                                        @foreach ($url as $item)
                                            <img src="{{ asset("storage/$item") }}" alt="{{ $alt }}">
                                        @endforeach
                                    @endif
                                @break

                                @default
                                    <div>{{ 'Block type not recognized.' }}</div>
                            @endswitch
                        @endforeach
                    @endif

                </div>
            </div>
        </section>

    </div>
    <!-- end page-content -->
@endsection
