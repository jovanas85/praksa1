
<form action="{{route('postupdate', $post->id)}}" method="POST">

{{ csrf_field() }}

    Title:<input type="text" name="title" value="{{$post->title}}"> <br>
    Content:<input type="text" name= "content" value="{{$post->content}}"> <br>
    <br>

    <input type="submit" value="Save changes" >


</form>