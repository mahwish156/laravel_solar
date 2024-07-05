@extends('admin.layout')

@section('mycontent')
<h1>ADD NEW BLOG</h1>
<hr>

<form action="{{url('saveblog')}}" method="POST" class="container">



@csrf

  <div class="form-group mb-3">
    <label for="exampleInputEmail1" class="form-label">Blog Title</label>
    <input type="text" class="form-control" id="t1" name="txtblogtitle" aria-describedby="emailHelp">
    <div id="emailHelp"></div>
  </div>

  <div class="form-group mb-3">
    <label for="exampleInputEmail1" class="form-label">Blog Author</label>
    <input type="text" class="form-control" id="t2" name="txtblogauthor" aria-describedby="emailHelp">
    <div id="emailHelp"></div>
  </div>

  <div class="form-group mb-3">
    <label for="exampleInputEmail1" class="form-label">Blog Content</label>
    <input type="text" class="form-control" id="t3" name="txtblogcontent" aria-describedby="emailHelp">
    <div id="emailHelp"></div>
  </div>

<div class="form-group mb-3"> 
    <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</div> 

</form>

@endsection