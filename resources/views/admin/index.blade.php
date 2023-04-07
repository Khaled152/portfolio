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



            <ul class="blog-posts-list">
                @foreach($projects as $project)


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
                            <button  onclick="window.location.href='{{route('articles.show',['id'=>$project->id])}}';" type="button" class="btn btn-outline-warning">View</button>
                            <button type="button" class="btn btn-outline-info">Edit</button>
                            <button  onclick="window.location.href='{{route('articles.delete',['id'=>$project->id])}}';" type="button"  id="{{$project->id}}" class="btn btn-outline-danger">Delete</button>
                        </div>

                    </a>


                </li>
                @endforeach
            </ul>

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
                        <button  onclick="window.location.href='{{route('articles.show',['id'=>$certificate->id])}}';" type="button" class="btn btn-outline-warning">View</button>
                        <button type="button" class="btn btn-outline-info">Edit</button>
                        <button  onclick="window.location.href='{{route('articles.delete',['id'=>$certificate->id])}}';" type="button"  id="{{$certificate->id}}" class="btn btn-outline-danger">Delete</button>
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


            <ul class="blog-posts-list">


                @foreach($experinces as $experince)
                <li class="blog-post-item">


                        <figure class="blog-banner-box">
                            <img src="{{$experince->image}}" alt="Best fonts every designer" loading="lazy">
                        </figure>

                        <div class="blog-content">

                            <div class="blog-meta">
                                <p class="blog-category">{{$experince->tags}}</p>

                                <span class="dot"></span>

                                <time datetime="2022-02-23">Fab 23, 2022</time>
                            </div>

                            <h3 class="h3 blog-item-title">{{$experince->title}}</h3>

                            <p class="blog-text">
                                {{$experince->description}}


                            </p>
                            <button onclick="window.location.href='{{route('articles.show',['id'=>$experince->id])}}';" type="button" class="btn btn-outline-warning">View</a></button>
                            <button type="button" class="btn btn-outline-info">Edit</button>
                            <button  onclick="window.location.href='{{route('articles.delete',['id'=>$experince->id])}}';" type="button"  id="{{$experince->id}}" class="btn btn-outline-danger">Delete</button>

                        </div>


                </li>
                @endforeach

            </ul>

        </section>

    </article>





</div>
@endsection
