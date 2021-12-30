@extends('layouts.app')

@section('title') {{$data_article -> name}} @endsection


@section('content')
<!-- Новая статья -->
        <div class="main_field">
        <div class="header_menu">
          <a name = "hrefup"></a>
          <p class = "m-0 p-2">{{$data_article -> name}}</p>
          <div class = "close_h"><a href = "{{route('subcategory', $data_article -> key_subcategory)}}" class = 'close_href'>x</a></div>

          @auth
          <div class = "redaction"><a href = "{{route('redactionArticle', $data_article -> id)}}" class = 'close_href'>/</a></div>
          <div class = "deletearticle"><a href = "{{route('deleteArticle', $data_article -> id)}}" class = 'close_href'>/del</a></div>
          @endauth
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
       @if(session('success'))
       <mark>{{session('success')}}</mark>
       @endif
        <div class="text_article">
            {!!$data_article -> text!!}
        </div>
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


@section('menu')
  @parent
      <li>
        <a href="#hrefup" class="nav-link py-3 border-bottom" title="">
            <span class="fas fa-chevron-up"></span>
        </a>
      </li> 
      <li>
        <a href="#hrefcomment" class="nav-link py-3 border-bottom scrollto" title="">
            <span class="far fa-comments"></span>
        </a>
      </li>
@endsection







@section('navigation_article')

@if(isset($data_article -> navi))
<div class = "navigation_article text-center mt-3"><a href = "{{route('articles', $data_article -> keyA)}}" class="btn btn-primary">< {{$data_article -> valueA}}</a> <a class="soder scrollto btn btn-primary" id = "d_soder">Содержание</a> <a href = "{{route('articles', $data_article -> keyB)}}" class="btn btn-primary">{{$data_article -> valueB}} ></a></div>





    <div class="menu_pod" id = "mod_soder">
      <div class="header_menu">
        <p class = "m-0 p-2">Содержание группы</p>
        <div class = "close"></div>
      </div>
      <div class="body_menu">
        <ol>
        {!!$data_article -> html_soder!!}
        </ol>
      </div>
    </div>
@endif

@endsection

@section('commentary')
 <div class="main_field mt-3" >
  <div class="header_menu">
    <p class = "m-0 p-2">Комментарии</p><a name = "hrefcomment"></a>
  </div>
  <div class="body_menu">
    <h4 class="com435 levelUp btn btn-outline-primary">Добавить комментарий</h4>
		
    @foreach($commentary as $comment)
    <div class="commentary_block mt-2 pt-2">
      <p class="name_commentaru"><a href="#" class = "levelUp" id = "a{{$comment -> id}}">{{$comment -> author}} </a> <i class="fas fa-reply"></i></p>
      <p>{{$comment -> text}}</p>
      @if($comment -> numbers > 0)
        <p class="text-end two_level openUpLevel" id = "o{{$comment -> id}}"><i class="far fa-clock"></i> {{$comment -> created_at}}| <i class="far fa-comments"></i> {{$comment -> numbers}} Ответа</p>
      @else
      <p class="text-end two_level" id = "o{{$comment -> id}}"><i class="far fa-clock"></i> {{$comment -> created_at}}</p>
      @endif
    </div>
      @if($comment -> twoLevel)
        <div class="commentLvlTwo" id = "lv{{$comment -> id}}"> 
          @foreach($comment -> twoLevel as $key_tl)  
            <div class="commentary_two_level">
              <div class="commentary_block">
                <p class="name_commentaru">{{$key_tl -> author}}</p>
                <p>{{$key_tl -> text}}</p>
                <p class="text-end">{{$key_tl -> created_at}}</p>
              </div>
            </div>
            @endforeach
        </div>
      @endif
    @endforeach

      
  </div>
</div>



<div class="menu_pod" id = "mod_comments" style='z-index: 1000;'>
        <div class="header_menu">
          <p class = "m-0 p-2">Поиск</p>
          <div class = "close"></div>
        </div>
        <div class="body_menu">
    <form name = "add_commentary_modal" action = "{{ route('add_commentary') }}" method="post">
      {{csrf_field()}}
      <input type="text" class="commentary form-control mt-3" name = "name" id = "namess" placeholder="Ваше имя/ник">
      <input type = "text" class="hidden" name = "id" value = "{{ $data_article -> id }}">
      <input type = "text" class="hidden" name = "link" value = "{{ $data_article -> link }}">
      <input type = "text" class="hidden" id = "levelss" name = "level"  value = "0">
      <input type = "text" class="hidden" name = "emails" value = "inkognito@mail.ru">
      <textarea class="form-control mt-3" name = "text" id = "textss" placeholder="Ваш комментарий..." 
      ></textarea>
      <input type="submit" name="sub" value="Комментировать" class="btn btn-outline-primary mt-3">
    </form>

        </div>
      </div>



@endsection

@section('footer_link')
<a href ="{{route('welcome')}}">Home</a>\<a href = "{{route('categoryPage', $data_article -> key_category)}}">{{$data_article -> value_category}}</a>\<a href = "{{route('subcategory', $data_article -> key_subcategory)}}">{{$data_article -> value_subcategory}}</a>\{{$data_article -> name}}.gifit
@endsection