@extends('layout.portfolio-layout')
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
<!--- #main-content-->

<div class="main-content">

    <!--- #NAVBAR-->

    <nav class="navbar">

        <ul class="navbar-list">

            <li class="navbar-item">
                <button class="navbar-link  active" data-nav-link>projects</button>
            </li>


            <li class="navbar-item">
                <button class="navbar-link" data-nav-link>certificates</button>
            </li>

            <li class="navbar-item">
                <button class="navbar-link" data-nav-link>experience</button>
            </li>

        </ul>

    </nav>





    <!--- #Projects-->

    <article class="about  active" data-page="projects">

        <header>
            <h2 class="h2 article-title">Projects <button onclick="window.location.href='{{route('articles-create')}}';"
                    type="button" class="btn btn-outline-warning"><ion-icon name="add-outline"></ion-icon></button></h2>


        </header>





        <!--- testimonials modal -->

        <div class="modal-container" data-modal-container>

            <div class="overlay" data-overlay></div>

            <section class="testimonials-modal">

                <button class="modal-close-btn" data-modal-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                </button>



            </section>

        </div>

        <section class="blog-posts">


            @foreach($projects as $project)
            <ul class="blog-posts-list">



                <li class="blog-post-item">
                    <a href="#">

                        <figure class="blog-banner-box">
                            <img src="{{asset('images/blog-2.jpg')}}" alt="Best fonts every designer" loading="lazy">
                        </figure>

                        <div class="blog-content">

                            <div class="blog-meta">


                                <span class="dot"></span>

                                <time datetime="2022-02-23"></time>
                            </div>

                            <h3 class="h3 blog-item-title">{{$project['title']}}</h3>

                            <p class="blog-text">
                                {{$project['description']}}
                            </p>

                        </div>

                    </a>
                </li>

            </ul>
            @endforeach
        </section>

    </article>










    <!--- #certificates-->

    <article class="portfolio" data-page="certificates">

        <header>
            <h2 class="h2 article-title">Certification <button type="button"
                    onclick="window.location.href='{{route('articles-create')}}';"
                    class="btn btn-outline-warning"><ion-icon name="add-outline"></ion-icon></button></h2>
        </header>

        <section class="projects">



            <div class="filter-select-box">

                <button class="filter-select" data-select>

                    <div class="select-value" data-selecct-value>Select category</div>

                    <div class="select-icon">
                        <ion-icon name="chevron-down"></ion-icon>
                    </div>

                </button>



            </div>
            @foreach($certificates as $certificate)
            <ul class="project-list">


                <li class="project-item  active" data-filter-item data-category="web development">
                    <a href="#">

                        <figure class="project-img">
                            <div class="project-item-icon-box">
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>

                            <img src="{{asset('images/project-9.png')}}" alt="arrival" loading="lazy">
                        </figure>

                        <h3 class="project-title">{{$certificate['title']}}</h3>

                        <p class="project-category">{{$certificate['description']}}</p>

                    </a>
                </li>

            </ul>
            @endforeach
        </section>

    </article>





    <!--- #experience-->

    <article class="blog" data-page="experience">

        <header>
            <h2 class="h2 article-title">experience <button type="button"
                    onclick="window.location.href='{{route('articles-create')}}';"
                    class="btn btn-outline-warning"><ion-icon name="add-outline"></ion-icon></button></h2>
        </header>

        <section class="blog-posts">
            @foreach($experinces as $experince)
            <ul class="blog-posts-list">



                <li class="blog-post-item">
                    <a href="#">

                        <figure class="blog-banner-box">
                            <img src="{{asset('images/blog-2.jpg')}}" alt="Best fonts every designer" loading="lazy">
                        </figure>

                        <div class="blog-content">

                            <div class="blog-meta">
                                <p class="blog-category">Design</p>

                                <span class="dot"></span>

                                <time datetime="2022-02-23">Fab 23, 2022</time>
                            </div>

                            <h3 class="h3 blog-item-title">{{$experince['title']}}</h3>

                            <p class="blog-text">
                                {{$experince['description']}}
                            </p>

                        </div>

                    </a>
                </li>
                @endforeach
            </ul>

        </section>

    </article>





</div>
@endsection
