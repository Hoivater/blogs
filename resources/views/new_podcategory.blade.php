@extends('layouts.app')

@section('title')Новая подкатегория@endsection

@section('scripts')

@endsection

@section('content')
<!-- Новая статья -->
        <div class="main_field">
        <div class="header_menu">
          <p class = "m-0 p-2">Создать новую подкатегорию |</p>
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
            <form name = "add" method = 'post' action = "{{ route('addPodcategoryRN') }}" enctype="multipart/form-data">
        	{{csrf_field()}}
              <div class="mb-3">
                <label for="nameCategory" class="form-label">Название подкатегории</label>
                <input type="text" class="form-control" id="nameCategory" name = "name" aria-describedby="nameHelp" value = "{{old('name')}}">
                <div id="nameHelp" class="form-text">...</div>
              </div>

              <input type = "text" class="hidden" name = "id_podcategory" value = "{{ $id_podkategory }}">

              <button type="submit" class="btn btn-primary">Создать подкатегорию</button>
            </form>
        </div>
      </div>

@endsection

@section('script_footer')

@endsection