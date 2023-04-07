@extends('layout.portfolio-layout')
@section('style')
<style>
    .rusume {
                background: var(--continer-theme);
                width: 100%;
                padding: 12px 12px 10px 12px;
                border-radius: 5px;
              }
</style>
@endsection
@section('content')
    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>certificates</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Projects</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
          <p>
            Hi, I'm Khaled Ahmed, a passionate web developer with 2 years of experience in building beautiful and functional websites.
             I have a deep understanding of HTML, CSS, and JavaScript.
          </p>

          <p>
            Throughout my career, I have worked on a wide range of projects.
             I take pride in creating websites that are not only visually appealing but also user-friendly and optimized for search engines.
             My goal is to help businesses and individuals establish a strong online presence and achieve their goals through effective web development.
          </p>

          <p>
            Apart from technical skills, I also possess strong communication and collaboration skills,
             which enable me to work effectively in teams and communicate complex ideas to clients in a clear and concise manner.
        </p>

        <p>
            When I'm not coding, you can find me exploring new technologies, attending web development conferences,
             or contributing to open-source projects. I'm always looking for ways to expand my knowledge and stay up-to-date with the latest trends in web development.
        </p>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                <img src="{{asset('images/icon-design.svg')}}" alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web design</h4>

                <p class="service-item-text">
                  The most modern and high-quality design made at a professional level.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="{{asset('images/icon-dev.svg')}}" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web development</h4>

                <p class="service-item-text">
                  High-quality development of sites at the professional level.
                </p>
              </div>

            </li>




          </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Testimonials</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="{{asset('images/avatar-1.png')}}')}}" alt="Daniel lewis" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Daniel lewis</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="{{asset('images/avatar-2.png')}}')}}" alt="Jessica miller" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Jessica miller</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="{{asset('images/avatar-3.png')}}')}}" alt="Emily evans" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Emily evans</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="{{asset('images/avatar-4.png')}}')}}" alt="Henry william" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Henry william</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </section>


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="{{asset('images/avatar-1.png')}}')}}" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="{{asset('images/icon-quote.svg')}}" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

              <time datetime="2021-06-14">14 June, 2021</time>

              <div data-modal-text>
                <p>
                  Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                  lot of experience
                  and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                  consectetur adipiscing
                  elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                </p>
              </div>

            </div>

          </section>

        </div>


        <!--
          - clients
        -->

        <section class="clients">

          <h3 class="h3 clients-title">Skills</h3>

          <ul class="clients-list has-scrollbar">

            <li class="clients-item">
                <i class="devicon-java-plain-wordmark " style="font-size: 130px; color: aliceblue;"></i>
            </li>

            <li class="clients-item">
                <i class="devicon-javascript-plain" style="font-size: 130px; color: aliceblue;"></i>
            </li>

            <li class="clients-item">
                <i class="devicon-css3-plain" style="font-size: 130px; color: aliceblue;"></i>
            </li>

            <li class="clients-item">

                <i class="devicon-html5-plain"  style="font-size: 130px; color: aliceblue;"></i>

            </li>

            <li class="clients-item">

                <i class="devicon-bootstrap-plain" style="font-size: 130px; color: aliceblue;"></i>

            </li>

            <li class="clients-item">
                <i class="devicon-php-plain" style="font-size: 130px; color: aliceblue;"></i>
            </li>

            <li class="clients-item">

            <i class="devicon-laravel-plain" style="font-size: 130px; color: aliceblue;"></i>

            </li>

        <li class="clients-item">
            <i class="devicon-python-plain" style="font-size: 130px; color: aliceblue;"></i>
        </li>

        <li class="clients-item">
            <i class="devicon-mysql-plain-wordmark" style="font-size: 130px; color: aliceblue;"></i>
        </li>

        <li class="clients-item">

            <i class="devicon-github-original" style="font-size: 130px; color: aliceblue;"></i>

        </li>

        <li class="clients-item">
            <i class="devicon-git-plain-wordmark" style="font-size: 130px; color: aliceblue;"></i>
        </li>

        <li class="clients-item">

            <i class="devicon-composer-line-wordmark" style="font-size: 130px; color: aliceblue;"></i>

        </li>

        <li class="clients-item">
            <i class="devicon-flask-original-wordmark" style="font-size: 130px; color: aliceblue;"></i>
        </li>
        </ul>

        </section>

    </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Future Academy - Higher Future Institute For Specialized Technological Studies </h4>

              <span>2017 — 2021</span>

              <p class="timeline-text">
                Bachelor of Computer Science. I recently graduated from Computer Science with 3.41 GPA
              </p>

            </li>


          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Internship Trainee Information Technology Institute (ITI) · </h4>

              <span>Jul 2018 - Aug 2018 </span>

              <p class="timeline-text">
                Web application training using Python,
                 Flask provided for college students, training duration was 2 weeks with the final project must be delivered at the end of the training.
              </p>

            </li>


          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">
                <div class="mt-2 rusume" style="text-align: center;">
                    <iframe src="https://drive.google.com/file/d/1Qj4bZuAl9GIFboOVWE_Y_AxevaylQ5mw/preview" allow="autoplay" style="width:100%;height: 480px; "></iframe>
                  </div>

            </li>




          </ul>

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="certificates">

        <header>
          <h2 class="h2 article-title">Certification</h2>
        </header>

        <section class="projects">



          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web design</button>
              </li>

              <li class="select-item">
                <button data-select-item>Applications</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web development</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">


            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{asset('images/project-9.png')}}" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Arrival</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

          </ul>

        </section>

      </article>





      <!--
        - #BLOG
      -->

      <article class="blog" data-page="projects">

        <header>
          <h2 class="h2 article-title">Projects</h2>
        </header>

        <section class="blog-posts">

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

                  <h3 class="h3 blog-item-title">Best fonts every designer</h3>

                  <p class="blog-text">
                    Sed ut perspiciatis, nam libero tempore, cum soluta nobis est eligendi.
                  </p>

                </div>

              </a>
            </li>

          </ul>

        </section>

      </article>





      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>


        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

          <form action="#" class="form" data-form>

            <div class="input-wrapper">
              <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>

              <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
            </div>

            <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" type="submit" disabled data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>

          </form>

        </section>

      </article>

    </div>
@endsection
