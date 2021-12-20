@extends('layouts.app')

@section('title')Новая категория@endsection

@section('scripts')

@endsection

@section('content')
<!-- Новая статья -->
        <div class="main_field">
        <div class="header_menu">
          <p class = "m-0 p-2">Создать новую категорию |</p>
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
            <form name = "add" method = 'post' action = "{{ route('addCategoryRN') }}" enctype="multipart/form-data">
        	{{csrf_field()}}
              <div class="mb-3">
                <label for="nameCategory" class="form-label">Название категории</label>
                <input type="text" class="form-control" id="nameCategory" name = "name" aria-describedby="nameHelp" value = "{{ old('name') }}">
                <div id="nameHelp" class="form-text">...</div>
              </div>
              <div class="mb-3">
                <label for="reviewFoto" class="form-label">Выберите заглавное фото</label>
                <input type="file" class="form-control" id="reviewFoto" name = "foto" aria-describedby="fotos" >
                <div id="fotos" class="form-text">Отображение этого фото будет происходить лишь на рабочем столе</div>
              </div>

              <button type="submit" class="btn btn-primary">Создать категорию</button>
            </form>
        </div>
      </div>

@endsection

@section('script_footer')

@endsection