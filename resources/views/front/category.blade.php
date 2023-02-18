@extends('front.layouts.master')
@section('title',$category->name.' Kategorisi | '.count($articles). ' Yazı Bulundu')
@section('content')  
@include('front.widgets.categoryWidget')
 <div class="col-md-9 ">
    @include('front.widgets.articleList')
 </div>
@endsection
   