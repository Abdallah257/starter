@foreach($articles as $article)
    <h1> Title : {{ $article->title}} </h1>

    <h4> Body : {{ $article->body}}</h4>
@endforeach
