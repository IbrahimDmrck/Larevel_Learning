@if(count($articles)>0)
@foreach ($articles as $article)
<!-- Post preview-->
<div class="post-preview">
    <a href="{{route('single',[$article->getCategory->slug,$article->slug])}}">
        <h2 class="post-title">{{$article->title}}</h2>
        <img src="{{$article->image}}"/>
        <h3 class="post-subtitle">{!!substr($article->content,0,100,)!!}...</h3>
    </a>
    <p class="post-meta">
       Kategori : 
        <a href="#!">{{$article->getCategory->name}} </a>
        <span style="float:right;">   {{$article->created_at->diffforHumans()}}</span>
    </p>
</div>
<!-- Divider-->
<hr class="my-4" />
@endforeach
{{$articles->links('pagination::bootstrap-4')}}
@else
<div class="alert alert-danger text-center">
    <h1>Bu Kategoriye Ait Yazı Bulunamadı</h1>
</div>
@endif