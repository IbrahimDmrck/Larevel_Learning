@extends('front.layouts.master')
@section('title',$article->title)
@section('bg',$article->image)
@section('content')
@include('front.widgets.categoryWidget')

            <div class="col-md-9 col-lg-8 col-xl-7">
               {!!$article->content!!}
                <br>
               <span class="text-danger"> Okunma Sayısı : <b>{{$article->hit}}</b></span>
            </div>

@endsection