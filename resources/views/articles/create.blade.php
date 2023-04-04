<h3> Hello User</h3>
<form action="{{route('articles.store')}}" method="POST">
    @csrf
    <label>
        <input type="text" name="title" id="">
    </label>

    <label>
        <textarea name="body" cols="30" rows="10"></textarea>
    </label>

    <label for="">
       Tag : <select multiple name="tags[]">
            @foreach($tags as $tag)
                <option value="{{$tag->id}}"> {{$tag->name}}</option>
            @endforeach
        </select>
    </label>

    <label for="">
       Categories:  <select multiple name="categories[]">
            @foreach($categories as $category)
                <option value="{{$category->id}}"> {{$category->name}}</option>
            @endforeach
        </select>
    </label>
    <button type="submit">Send</button>
</form>


