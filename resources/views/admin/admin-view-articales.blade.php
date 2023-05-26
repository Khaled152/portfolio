@extends('layout.portfolio-layout')
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/thinline.css">

@endsection
@section('content')
    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #Projects
      -->

      <article class="about  active" data-page="projects">

        <a href="{{route('admin-home')}}"> <h2 class="h2 "><ion-icon name="arrow-back-outline"></ion-icon></h2></a>


        <header>
            <h2 class="h2 article-title">{{$article->title}} </h2>
            <div id="DivTags">
            <span class="badge rounded-pill text-bg-warning " id="tags" style="display: none; ">{{$article->tags}}</span>
            </div>

        </header>



        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>



          </section>

        </div>

        <section class="blog-posts">
            <div class="container text-align-center" >
            <img src="{{url($article->image) }}" style="width:300px;margin-bottom: 10px; ">
            <?php
            echo html_entity_decode($article->description);
            ?>

            </div>

          </section>

    </article>


    </div>
@endsection
@section('script')
<script>
let myInput = document.getElementById("tags");
let value = myInput.innerHTML;
let spiltValue = value.split(",");
console.log(spiltValue);

let myDiv = document.getElementById("DivTags");

for (let i = 0; i < spiltValue.length; i++) {
    let mySpan = document.createElement("span");
    mySpan.innerHTML = spiltValue[i];
    mySpan.style.display = "inline-block";
    mySpan.style.marginRight = "10px";
    mySpan.style.padding = "5px";
    mySpan.style.backgroundColor = "#ffc107";
    mySpan.style.borderRadius  = "20px";
    mySpan.style.fontSize  = "10px";
    mySpan.style.fontWeight  = "bold";
    mySpan.style.marginBottom  = "10px";

    myDiv.appendChild(mySpan);
}
</script>
@endsection
