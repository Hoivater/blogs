@extends('layouts.app')

@section('title')Новая категория@endsection

@section('scripts')

@endsection

@section('content')
<!-- Новая статья -->
        <div class="main_field">
        <div class="header_menu">
          <p class = "m-0 p-2">Создать новую группу |</p>
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
            <form name = "add" method = 'post' action = "{{ route('addGroupsRN') }}" enctype="multipart/form-data">
        	{{csrf_field()}}
              <div class="mb-3">
                <label for="nameGroups" class="form-label">Название группы</label>
                <input type="text" class="form-control" id="nameGroups" name = "name" aria-describedby="nameHelp" value = "{{ old('name') }}">
                <div id="nameHelp" class="form-text">...</div>
              </div>
              <div class="mb-3">
                <label for="descriptionGroups" class="form-label">Описание группы</label>
                <textarea class="form-control" id="nameGroups" name = "description" aria-describedby="descriptionHelp" value = "{{ old('name') }}"></textarea>
                <div id="descriptionHelp" class="form-text">...</div>
              </div>

              <button type="submit" class="btn btn-primary">Создать группу</button>
            </form>
        </div>
      </div>

@endsection

@section('script_footer')

@endsection