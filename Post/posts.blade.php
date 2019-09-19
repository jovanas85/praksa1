<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     -->
    
    <title>Posts</title>
</head>
<body>
<div class="container">
  <h2>Posts</h2> <a href="/posts/create">Create new post</a>
  @foreach ($posts as $post)
  
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">{{$post->title}}</h4>
      <p class="card-text">{{$post->content}}</p>
      <a href="/posts/show/{{$post->id}}" class="card-link">Edit</a>
      <a href="/posts/delete/{{$post->id}}" class="card-link">Delete</a> 
      <form action="{{route('likepost', $post->id)}}" method="GET">
      <button class= type="submit">Like</button>
      {{$post->likes}}
      </form>

    </div>
  </div>
  @endforeach
  <a href="/posts/create">Create new post</a>
</div>

    

    
</body>
</html>
