@extends('layouts.app')

@section('title') Gifit - Группы статей @endsection

@section('content')


@if(session('success'))
  <div class='alert alert-success'>
    {{ session('success')}}
  </div>
@endif

<!-- <div class="row"> -->
<div class="row" data-masonry='{"percentPosition": true }'>

@foreach($data as $key)
        <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-html='true' title="{{$key -> name_groups}}" data-bs-content="
             <ol>
          {{$key -> id_articles}}
          
          <li>
          <a href = '{{route('addArticleGroup', $key -> id)}}'>Добавить статью</a>
        </li>
      </ol>
      <p>{{$key -> description}}</p>">
              <div class="container icon_desktop">
                <div class="row">
                  <div class="col-2">

                  </div>
                  <div class="col-8">
                    <img src = "{{ route('welcome').'/data_image/folder.png' }}" class="img-fluid pt-3" />
                  </div>
                  <div class="col-2">

                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">{{$key -> name_groups}}</p>

                  </div>
                </div>
              </div>
          </a>
        </div>
@endforeach
  
      	<div class="col-md-2">
      		<a href = "{{ route('newgroups') }}">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">

                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/data_image/add.png" class="img-fluid pt-3" />
                  </div>
                  <div class="col-2">

                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Создать новую группу</p>
                  </div>
                </div>
              </div>
          </a>
      	</div>

  <div class="container-fluid mt-3">
    <div class="pagination_bootstrap">
    {{ $data -> links() }}
    </div>
  </div>

</div>

@endsection

@section('footer_link')
<a href ="{{route('welcome')}}">Home</a>\<a href = "#">Группы статей</a>\
@endsection