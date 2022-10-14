<!DOCTYPE html>
<html @lang('en')>
@include('section.head')
@include('section.nav')
<br>
<body>
    <div class="container w-50">
    <form action="/req" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Book title</label>
          <input name="book_title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text"></div>
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Book author</label>
            <input name="book_auther" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Book image </label>
            <input name="book_image" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Book Description</label>
            <textarea name="description" type="text" class="form-control" id="exampleInputPassword1" row="3" > </textarea>
          </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
    </div>
</body>
</html>