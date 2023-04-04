<h3> Hello User Edit Article</h3>
<form action="{{route('articles.update', [$article])}}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" name="title" id="" value="{{$article->title}}">
    <textarea name="body" cols="30" rows="10"> {{$article->body}} </textarea>

    <button type="submit">Update</button>
</form>

<form action="{{route('articles.destroy', [$article])}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
