@include("section.head")
@include('section.nav')
<br>
<a href="/add" class="btn btn-primary mx-4">Add book here</a>
<div class=" d-flex ">
@foreach ($books as $book)
<div id="cardsDiv" class="card m-5" style="width: 15rem;">
    <img src="{{$book['book_image']}}" class="card-img-left" alt="..." style="height: 300px;">
    <div class="card-body">
      <h5 class="card-title">{{$book['book_title']}}</h5>
      <p class="card-text">{{$book['book_auther']}}</p>
      <p class="card-text">{{$book['description']}}</p>
      <a href="delete/{{$book['id']}}"  class="btn btn-danger">Delete</a>
      <a href="update/{{$book['id']}}" class="btn btn-info">Update</a>
    </div>
  </div>

  @endforeach
</div>
  <footer>
   
  </footer>
</body>
</html>