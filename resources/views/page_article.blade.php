@extends('layouts.app')

@section('title') {{$data_article -> name}} @endsection


@section('content')
<!-- Новая статья -->
        <div class="main_field">
        <div class="header_menu">
          <p class = "m-0 p-2">{{$data_article -> name}}</p>
          <div class = "close_h"><a href = "{{route('subcategory', $data_article -> key_subcategory)}}" class = 'close_href'>x</a></div>
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
            <hr />
        <div class="date text-center">
        	{{$data_article -> created_at}}
        </div>
         <div class="tags_block text-end">
         {!! $data_article -> tags !!}
         </div>
        </div>
      </div>

@endsection

@section('navigation_article')
<div class = "navigation_article text-center mt-3"><a href = '#' class="btn btn-primary">< Описание пророчества</a> <a class="soder scrollto btn btn-primary" id = "d_soder">Содержание</a> <a href = '#' class="btn btn-primary">Прощание ></a></div>




    <div class="menu_pod" id = "mod_soder">
      <div class="header_menu">
        <p class = "m-0 p-2">О сайте</p>
        <div class = "close"></div>
      </div>
      <div class="body_menu">
        <ol>
        	<li>
        		<a href = "#">Статья 1 lodod frifrig rjgij git dmiem ifemifir ring</a>	
        	</li>
        	<li>
        		<mark><a href = "#">Статья lodod frifrig rjgij</a></mark>
        	</li>
        	<li>
        		<a href = "#">Статья lodod frifrig rjgij</a>	
        	</li>
        	<li>
        		<a href = "#">Статья lodod frifrig rjgij4</a>	
        	</li>
        </ol>
      </div>
    </div>


@endsection

@section('commentary')
 <div class="main_field mt-3">
  <div class="header_menu">
    <p class = "m-0 p-2">Комментарии</p>
  </div>
  <div class="body_menu">
		Комментарии в разработке 
  </div>
</div>
@endsection

@section('footer_link')
<a href ="{{route('welcome')}}">Home</a>\<a href = "{{route('categoryPage', $data_article -> key_category)}}">{{$data_article -> value_category}}</a>\<a href = "{{route('subcategory', $data_article -> key_subcategory)}}">{{$data_article -> value_subcategory}}</a>\{{$data_article -> name}}.gifit
@endsection