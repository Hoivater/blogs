@extends('layouts.app')

@section('title') {{$data_article -> name}} @endsection


@section('content')
<!-- Новая статья -->
        <div class="main_field">
        <div class="header_menu">
          <p class = "m-0 p-2">{{$data_article -> name}}</p>
        </div>
        <div class="body_menu">
        	@if($errors -> any())
				<div class='erorrs'>
					<ul>
						@foreach($errors -> all() as $error)
						<li>
						     {{$error}}
						</li>
						@endforeach
					</ul>
				</div>
			@endif
            {!!$data_article -> text!!}
         <div class="tags">
         	<a href = "#" class="tags">#Тег 1</a>, <a href = "#" class="tags">#Тег</a>, <a href = "#" class="tags">#Тег 2</a>, <a href = "#" class="tags">#Тег 3</a>, <a href = "#" class="tags">#Тег 4</a>
         </div>
        <div class="date">
        	{{$data_article -> created_at}}
        </div>
        </div>
      </div>

@endsection


@section('footer_link')
<a href ="{{route('welcome')}}">Home</a>\<a href = "{{$data_article -> key_category}}">{{$data_article -> value_category}}</a>\<a href = "{{$data_article -> key_subcategory}}">{{$data_article -> value_subcategory}}</a>\{{$data_article -> name}}.gifit
@endsection