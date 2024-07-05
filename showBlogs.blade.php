@extends('admin.layout')

@section('mycontent')
<h1>SHOW ALL BLOGS</h1>
<hr>

@foreach($abc as $data)
  <!-- <h1> {{$data['blogtitle']}} - {{$data['blogauthor']}} - {{$data['blogcontent']}} </h1> -->

  <div class="container">
  <div class="row">
    <div class="card1 col-sm-4">

    <div class="card" style="width: 18rem;">
      <img src="{{asset('images/blog.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> {{$data['blogtitle']}}</h5>
    <p class="card-text">{{$data['blogcontent']}}</p>
    <a href="/editblog/{{$data['id']}}" class="btn btn-primary">Edit</a>
  </div>
</div>

</div>
</div>
    </div>

@endforeach
@endsection