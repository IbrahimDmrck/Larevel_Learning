@extends('front.layouts.master')
@section('title','Blog-Anasayfa')
@section('content')
@include('front.widgets.categoryWidget')
                <div class="col-md-9 ">
                 @include('front.widgets.articleList')
                 
                </div>
@endsection
   