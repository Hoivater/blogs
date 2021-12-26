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
              <div class="col-6">
                <p><b>Id</b></p>
              </div>
              <div class="col-3">
                <p><b>Название</b></p>
              </div>
              <div class="col-3">
                <p><b>Описание</b></p>
              </div>
            </div>


            @foreach($data as $key)
            <div class="row">
              <div class="col-6">
                <p class="copy_id" id = '{{$key -> link}}'>{{$key -> link}}</p>
              </div>
              <div class="col-3">
                <p>{{$key -> name}}</p>
              </div>
              <div class="col-3">
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
      <label for="artGroups" class="form-label">Перечисление ссылок статей: </label>
      <textarea type="text"  id="artGroups" class="form-control" name = "id_articles">{{$description_data -> id_articles}}</textarea>
    <button type="submit" class="btn btn-primary">Создать группу</button>
    </div>
    <input type = 'text' class="hidden" value = '{{$description_data -> id}}' name = 'id' />

  </form>
@endsection