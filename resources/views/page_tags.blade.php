@extends('layouts.app')

@section('title') Теги @endsection


@section('content')
<!-- Новая статья -->
        <div class="main_field">
        <div class="header_menu">
          <p class = "m-0 p-2">ХешТеги</p>
          <div class = "close_h"><a href = "#" class = 'close_href'>x</a></div>
        </div>
        <div class="body_menu">
          @foreach($data as $key)
        	<a  href ="{{ route('tagsOne', $key -> tags_transcript)}}" class="btn btn-outline-primary"><b>#{{$key -> tags}} </b><small>({{$key -> count}})</small></a>
          @endforeach
        </div>
      </div>

@endsection


@section('footer_link')
<a href ="{{route('welcome')}}">Home</a>\<a href = "{{route('tags')}}">Теги</a>\
@endsection