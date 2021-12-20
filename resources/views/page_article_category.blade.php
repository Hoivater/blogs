@extends('layouts.app')

@section('title') Gifit - {{$data_subc[0] -> name_category}} @endsection


@section('content')

@if(is_array($data_article))
<div class="row" data-masonry='{"percentPosition": true }'>
@foreach($data_article as $key)
    <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-html='true' title="{{$key -> name}}" data-bs-content="<a href = '{{route('addPodCategory', $key -> id)}}'>Добавить подкатегорию</a>">
              <div class="container icon_desktop">
                <div class="row">
                  <div class="col-2">

                  </div>
                  <div class="col-8">
                    <img src = "{{ route('welcome').'/storage/'.$key -> foto }}" class="img-fluid pt-3" />
                  </div>
                  <div class="col-2">

                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">{{$key -> name}}</p>

                  </div>
                </div>
              </div>
          </a>
        </div>
@endforeach
@endif
    <div class="pagi">
      <nav aria-label="..." class="mt-3 ">
        <ul class="pagination pagination-sm">
          <li class="page-item active" aria-current="page">
            <span class="page-link">1</span>
          </li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
      </nav>
    </div>

@endsection