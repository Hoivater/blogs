@extends('layouts.app')

@section('title')Загрузка изображения@endsection

@section('scripts')

@endsection

@section('content')
<!-- Новая статья -->
        <div class="main_field">
        <div class="header_menu">
          <p class = "m-0 p-2">Загрузка изображения |</p>
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
            <form name = "add" method = 'post' action = "{{ route('addImageRN') }}" enctype="multipart/form-data">
        	{{csrf_field()}}
              <div class="mb-3">
                <label for="nameCategory" class="form-label">Название изображения</label>
                <input type="text" class="form-control" id="nameCategory" name = "name" aria-describedby="nameHelp" value = "">
                <div id="nameHelp" class="form-text">...</div>
              </div>
              <div class="mb-3">
                <label for="descCategory" class="form-label">Описание изображения</label>
                <input type="text" class="form-control" id="descCategory" name = "description" aria-describedby="nameHelp" value = "">
                <div id="nameHelp" class="form-text">...</div>
              </div>
              <div class="mb-3">
                <label for="reviewFoto" class="form-label">Выберите изображение</label>
                <input type="file" class="form-control" id="reviewFoto" name = "foto" aria-describedby="fotos" >
                
              </div>

              <button type="submit" class="btn btn-primary">Загрузить изображение</button>
            </form>
        </div>
      </div>

@endsection

@section('script_footer')

@endsection