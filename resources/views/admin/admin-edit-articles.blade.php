@extends('layout.portfolio-layout')
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/thinline.css">
<style>
    /*upload image design*/
  .center {
  height:100%;
  display:flex;
  align-items:center;
  justify-content:center;

}
.form-input {
  width:350px;
  padding:20px;


}
.form-input input {
  display:none;

}
.form-input label {
  display:block;
  width:45%;
  height:45px;
  margin-left: 25%;
  line-height:50px;
  text-align:center;
  background:#1172c2;

  color:#fff;
  font-size:15px;
  font-family:"Open Sans",sans-serif;
  text-transform:Uppercase;
  font-weight:600;
  border-radius:5px;
  cursor:pointer;
}

.form-input img {
  width:100%;
  display:none;

  margin-bottom:30px;
}
.title img{
  max-width: 21px;
}
.title h2{
  font-size: 21px;
  font-weight: 600;
  margin-left: 8px;
}
.wrapper .content{
  margin: 10px 0;
}
.content p{
  font-size: 15px;
}
.content ul{
  display: flex;
  flex-wrap: wrap;
  padding: 7px;
  margin: 12px 0;
  border-radius: 5px;
  border: 1px solid #a6a6a6;
}
.content ul  li{
  color: #333;
  margin: 4px 3px;
  list-style: none;
  border-radius: 5px;
  background: #F2F2F2;
  padding: 5px 8px 5px 10px;
  border: 1px solid #e3e1e1;
}
.content ul li i{
  height: 20px;
  width: 20px;
  color: #808080;
  margin-left: 8px;
  font-size: 12px;
  cursor: pointer;
  border-radius: 50%;
  background: #dfdfdf;
  justify-content: center;
}
.content ul input{
  flex: 1;
  padding: 5px;
  border: none;
  outline: none;
  font-size: 16px;
}
.wrapper .details{
  justify-content: space-between;
}
.details button{
  border: none;
  outline: none;
  color: #fff;
  font-size: 14px;
  cursor: pointer;
  padding: 9px 15px;
  border-radius: 5px;
  background: #5372F0;
  transition: background 0.3s ease;
}
.details button:hover{
  background: #2c52ed;
}

/* end upload image design*/

/*tags design*/

ul {
    margin-block-start: 0;
    margin-block-end: 0;
    padding-inline-start: 0px;
}

li {
    list-style: none;
}

.tag-area {
    padding: 1rem;
    outline: none;
    width: 600px;
    border: 2px solid #2e2e32;
    border-radius: 17px;
    transition: all 0.2s;
    cursor: text;
    display: flex;
    align-items: center;
    position: relative;
}



.tag-area ul {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}



.tag {
    padding-left: 0.8rem;
    border-radius: 100px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 0.5rem;
    color:#dfdfdf;
}

.tag-input {
    padding: 0.5rem;
    outline: none;
    border: none;
    width: 150px;
    margin-left: 0.5rem;
    background: transparent;
    font-size: 20px;
}

.cross {
    cursor: pointer;
    display: flex;
    margin-left: 0.5rem;
    justify-content: center;
    align-items: center;
    padding: 1.3rem;
    transform: rotate(45deg);
    border-radius: 50%;
    background: #414141;
}

.cross:hover {
    background: #818181b1;
}

.cross::before {
    content: "";
    width: 2px;
    height: 16px;
    position: absolute;
    background: rgb(255, 255, 255);
}

.cross::after {
    content: "";
    height: 2px;
    width: 16px;
    position: absolute;
    background: rgb(255, 255, 255);
}

@media (max-width: 650px) {
    .tag-area {
        width: 300px;
    }
}
/*end tag design*/
 </style>
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

        <a href="#">  <h2 class="h2 "><ion-icon name="arrow-back-outline"></ion-icon></h2></a>


        <header>
            <h2 class="h2 article-title">Edit Article</h2>


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
            <form id="myForm" class="form" method="POST"  action="{{route('articles-update',$article->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="input-wrapper">

                <input type="text" name="title" class="form-input" value="{{$article->title}}"  >
                </div>
                <div class="input-wrapper">


                    <div class="input-group mb-3">
                        <label class="input-group-text"   for="inputGroupSelect01">Options</label>
                        <select class="form-select" name="type" id="inputGroupSelect01">
                            @if ($article->type == 0)
                            <option selected>Projects</option>
                            @elseif($article->type == 1)
                            <option selected>experinces</option>
                            @elseif($article->type == 2)
                            <option selected>certificates</option>
                            @endif
                        <option value="0">Projects</option>
                        <option value="1">experinces</option>
                        <option value="2">certificates</option>
                        </select>
                    </div>

                </div>

                <div class="tag-area input-wrapper">
                    <ul>
                        <input type="text" class="tag-input" id="tag-input" name="tags" value="{{$article->tags}}" />
                    </ul>
                </div>
                <div class="input-wrapper">
                    <input type="file" name="image" value="{{ asset('images/'.$article->image) }}">
                </div>
                <textarea id="full-featured-non-premium" name="description">
                    {{ $article->description }}
                    </textarea>

                <button type="submit" class="btn btn-success mt-3">Edit</button>



            </form>
            <div class="app">
            </div>
        </section>

    </article>









    </div>
@endsection
@section('script')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js"></script>
    <script src="{{ asset('js/editor.js') }}"></script>
<script type="text/javascript">
/*upload image js*/
    function showPreview(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-ip-1-preview");
      preview.src = src;
      preview.style.display = "block";
    }
  }

/* end upload image js*/
/*tags design*/
let myform =  document.getElementById("myForm")
console.log(myform)
myform.addEventListener("submit", function(e){
    console.log(e)
e.preventDefault()


document.querySelector(".tag-input").value = tags.join(",")
myform.submit()
})

  const tagInput = document.querySelector(".tag-input");

const tagArea = document.querySelector(".tag-area");
const ul = document.querySelector(".tag-area ul");
const label = document.querySelector(".label");

let tags = [];

function addEvent(element) {
    tagArea.addEventListener("click", () => {
        element.focus();
    });

    element.addEventListener("focus", () => {
        tagArea.classList.add("active");
        label.classList.add("label-active");
    });

    element.addEventListener("blur", (e) => {
        tagArea.classList.remove("active");
        if (element.value === "" && tags.length === 0) {
            label.classList.remove("label-active");
        }
        if (!element.value.match(/^\s+$/gi) && element.value !== "") {
            tags.push(e.target.value.trim());
            element.value = "";
            renderTags();
        }
    });
    /**
     * NOTE: Keyboard events works unexpected on mobile devices.
     * For mobile devices you need to add this code
     * to get the last character user entered.
     * value[value.length - 1] === " "
     *
     * keycode 32 is for SpaceBar
     * keycode 13 is for EnterKey
     */

    element.addEventListener("keydown", (e) => {
        console.log(e);
        const value = e.target.value;
        if (
            (e.keyCode === 32 ||
                e.keyCode === 13 ||
                value[value.length - 1] === " ") &&
            !value.match(/^\s+$/gi) &&
            value !== ""
        ) {
            tags.push(e.target.value.trim());
            element.value = "";
            renderTags();
        }
        if (e.keyCode === 8 && value === "") {
            tags.pop();
            renderTags();
        }
    });
}
addEvent(tagInput);

function renderTags() {
    ul.innerHTML = "";
    tags.forEach((tag, index) => {
        createTag(tag, index);
    });
    const input = document.createElement("input");
    input.type = "text";
    input.className = "tag-input";
    input.setAttribute("name" , "tags")
    addEvent(input);
    ul.appendChild(input);
    input.focus();
    setTimeout(() => (input.value = ""), 0);
}

function createTag(tag, index) {
    const li = document.createElement("li");
    li.className = "tag";
    const text = document.createTextNode(tag);
    const span = document.createElement("span");
    span.className = "cross";
    span.dataset.index = index;
    span.addEventListener("click", (e) => {
        tags = tags.filter((_, index) => index != e.target.dataset.index);
        renderTags();
    });
    li.appendChild(text);
    li.appendChild(span);
    ul.appendChild(li);
}
/*end tags js*/
  </script>
@endsection
