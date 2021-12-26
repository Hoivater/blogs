@extends('layouts.app')

@section('title') Редактировать статью @endsection

@section('scripts')

<!-- Font Aweomse 4 CSS -->
<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css'>

<!-- Rich Text Editor CSS -->
<link rel="stylesheet" href="{{route('welcome')}}/component/wysihtml/css/rich-text-editor.css">

<!-- Angular JS -->
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js'></script>
<!-- Angular Sanitize JS -->
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular-sanitize.min.js'></script>
<!-- Text Angular JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/textAngular/1.1.2/textAngular.min.js'></script>
@endsection

@section('content')
<!-- Новая статья -->
        <div class="main_field">
        <div class="header_menu">
          <p class = "m-0 p-2">Редактирование страницы |</p>
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
            <form name = "add" method = 'post' action = "{{route('redactionArticleRN')}}" enctype="multipart/form-data">
        	{{csrf_field()}}
              <div class="mb-3">
                <label for="nameArticle" class="form-label">Название статьи</label>
                <input type="text" class="form-control" id="nameArticle" name = "name" aria-describedby="nameHelp" value = "{{$data -> name}}">
                <div id="nameHelp" class="form-text">Название статьи отображается в title, на рабочем столе отображается лишь 50 первых символов</div>
              </div>
              <div class="mb-3">
                <label for="descriptionArticle" class="form-label" >Короткое описание</label>
                <textarea class="form-control" id="descriptionArticle" aria-describedby="descriptionHelp" name = "description">{{$data -> description}}</textarea>
                <div id="descriptionHelp" class="form-text">Необходимо для meta:description, около 150 символов</div>
              </div>
              <div class="mb-3">
                <label for="tags" class="form-label" >Теги</label>

                <input type="text" class="form-control" id="tags" name = "tags" aria-describedby="nameHelp" value = "" >
                <div id="tags" class="form-text">Введите новые теги через запятую. Текущие теги: {!!$data -> tags!!}</div>
              </div>
              <div class="mb-3">
                <label for="reviewFoto" class="form-label">Выберите новое фото</label>
                <input type="file" class="form-control" id="reviewFoto" name = "foto" aria-describedby="fotos" >
                <div id="fotos" class="form-text">Отображение этого фото будет происходить лишь на рабочем столе</div>
              </div>
              
              <input type = "text" class="form-control mt-3" name = "category" value = "{{$category}}">
              <input type = "text" class="form-control mt-3" name = "podcategory" value = "{{$podcategory}}">
              <div class="mb-3">
                <label for="descriptionArticle" class="form-label">Содержание страницы</label>
		                <div ng-app="textAngularTest" ng-controller="wysiwygeditor" class="container app">

						  <div text-angular="text-angular" name="htmlcontent" ng-model="htmlcontent" ta-disabled='disabled'>  </div>

						  <!-- <textarea ng-model="htmlcontent" style="width: 100%"></textarea> -->

						  <div class="d-none" ta-bind="text" ng-model="htmlcontent" ta-readonly='disabled'></div>
						</div>
              </div>



              <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
      </div>

@endsection

@section('script_footer')
   angular.module("textAngularTest", ['textAngular']);
	function wysiwygeditor($scope) {
		$scope.orightml = '';
		$scope.htmlcontent = $scope.orightml;
		$scope.disabled = false;
  };
@endsection