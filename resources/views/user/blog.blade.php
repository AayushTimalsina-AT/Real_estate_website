@extends('layouts.header')
@section('title','Blog')


@section('content-section')

<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">Our Amazing Posts</h1>
                    <span class="color-text-a">News</span>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            News
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--/ Intro Single End /-->

<!--/ News Grid Star /-->
<section class="news-grid grid">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card-box-b card-shadow news-box">
                    <div class="img-box-b">
                        <img src="{{asset('user/img/post-1.jpg')}}" alt="" class="img-b img-fluid">
                    </div>
                    <div class="card-overlay">
                        <div class="card-header-b">
                            <div class="card-category-b">
                                <a href="#" class="category-b">House</a>
                            </div>
                            <div class="card-title-b">
                                <h2 class="title-2">
                                    <a href="blog-single.html">House is comming
                                        <br> new</a>
                                </h2>
                            </div>
                            <div class="card-date">
                                <span class="date-b">18 Sep. 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-b card-shadow news-box">
                    <div class="img-box-b">
                        <img src="{{asset('user/img/post-2.jpg')}}" alt="" class="img-b img-fluid">
                    </div>
                    <div class="card-overlay">
                        <div class="card-header-b">
                            <div class="card-category-b">
                                <a href="blog-single.html" class="category-b">Room</a>
                            </div>
                            <div class="card-title-b">
                                <h2 class="title-2">
                                    <a href="blog-single.html">Room is comming
                                        <br> new</a>
                                </h2>
                            </div>
                            <div class="card-date">
                                <span class="date-b">18 Sep. 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-b card-shadow news-box">
                    <div class="img-box-b">
                        <img src="{{asset('user/img/post-3.jpg')}}" alt="" class="img-b img-fluid">
                    </div>
                    <div class="card-overlay">
                        <div class="card-header-b">
                            <div class="card-category-b">
                                <a href="#" class="category-b">Flat</a>
                            </div>
                            <div class="card-title-b">
                                <h2 class="title-2">
                                    <a href="blog-single.html">Flat is comming
                                        <br> new</a>
                                </h2>
                            </div>
                            <div class="card-date">
                                <span class="date-b">18 Sep. 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-b card-shadow news-box">
                    <div class="img-box-b">
                        <img src="{{asset('user/img/post-4.jpg')}}" alt="" class="img-b img-fluid">
                    </div>
                    <div class="card-overlay">
                        <div class="card-header-b">
                            <div class="card-category-b">
                                <a href="#" class="category-b">House</a>
                            </div>
                            <div class="card-title-b">
                                <h2 class="title-2">
                                    <a href="blog-single.html">House is comming
                                        <br> new</a>
                                </h2>
                            </div>
                            <div class="card-date">
                                <span class="date-b">18 Sep. 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-b card-shadow news-box">
                    <div class="img-box-b">
                        <img src="{{asset('user/img/post-5.jpg')}}" alt="" class="img-b img-fluid">
                    </div>
                    <div class="card-overlay">
                        <div class="card-header-b">
                            <div class="card-category-b">
                                <a href="#" class="category-b">Flat</a>
                            </div>
                            <div class="card-title-b">
                                <h2 class="title-2">
                                    <a href="blog-single.html">Flat is comming
                                        <br> new</a>
                                </h2>
                            </div>
                            <div class="card-date">
                                <span class="date-b">18 Sep. 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-b card-shadow news-box">
                    <div class="img-box-b">
                        <img src="{{asset('user/img/post-6.jpg')}} " alt="" class="img-b img-fluid">
                    </div>
                    <div class="card-overlay">
                        <div class="card-header-b">
                            <div class="card-category-b">
                                <a href="#" class="category-b">Room</a>
                            </div>
                            <div class="card-title-b">
                                <h2 class="title-2">
                                    <a href="blog-single.html">Room is comming
                                        <br> new</a>
                                </h2>
                            </div>
                            <div class="card-date">
                                <span class="date-b">18 Sep. 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <nav class="pagination-a">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">
                                <span class="ion-ios-arrow-back"></span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item ">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item next">
                            <a class="page-link" href="#">
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection
