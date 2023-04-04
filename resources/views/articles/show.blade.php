@if($article->status == 'approved')
    <h1> ArticleTitle : {{ $article->title }} </h1>
    <h4> ArticleBody : {{ $article->body }} </h4>
@else
    <h1> Article Is Pending Now</h1>
@endif
