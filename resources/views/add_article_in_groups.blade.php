@extends('layouts.app')

@section('title')Обновление состава группы@endsection

@section('scripts')

@endsection

@section('content')
<!-- Новая статья -->
        <div class="main_field">
        <div class="header_menu">
          <p class = "m-0 p-2">Список статей |</p>
        </div>
        <div class="body_menu">
          <div class="container-fluid">
            <div class="row">
              <div class="col-1">
                <p>Id</p>
              </div>
              <div class="col-5">
                <p>Название</p>
              </div>
              <div class="col-4">
                <p>Описание</p> 
              </div>
            </div>


            @foreach($data as $key)
            <div class="row">
              <div class="col-1">
                <p class="copy_id" id = '{{$key -> id}}'>{{$key -> id}}</p>
              </div>
              <div class="col-5">
                <p>{{$key -> name}}</p>
              </div>
              <div class="col-4">
                <p>{{$key -> description}}</p> 
              </div>
            </div>
            @endforeach


          </div>
        </div>
              <div class="container-fluid mt-3">
            <div class="pagination_bootstrap">
            {{ $data -> links() }}
            </div>
          </div>
      </div>
@endsection



@section('footer_link')
<form name = "add" method = 'post' action = "{{ route('addArticleInGroupsRN') }}" enctype="multipart/form-data">
{{csrf_field()}}
    <div class="mb-3">
      <label for="artGroups" class="form-label">Перечисление ID статей: </label>
      <input type="text"  id="artGroups" name = "id_articles" aria-describedby="nameHelp" value = "{{$description_data -> id_articles}}">
    <button type="submit" class="btn btn-primary">Создать группу</button>
    </div>
    <input type = 'text' class="hidden" value = '{{$description_data -> id}}' name = 'id' />

  </form>
@endsection