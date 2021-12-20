@extends('layouts.app')

@section('title') Меню @endsection

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
          <a href = "#" data-bs-toggle="popover" data-bs-html='true' title="{{$key -> name_category}}" data-bs-content="
          @if(isset($key -> podkategory))   
          @foreach($key -> podkategory as $sub)
            <a href = '{{route('subcategory', $sub -> value_category)}}'>{{$sub -> name_category}}</a><br />
          @endforeach
          @endif

          <a href = '{{route('addPodCategory', $key -> id)}}'>Добавить подкатегорию</a>">
              <div class="container icon_desktop">
                <div class="row">
                  <div class="col-2">

                  </div>
                  <div class="col-8">
                    <img src = "{{ route('welcome').'/storage/'.$key -> images }}" class="img-fluid pt-3" />
                  </div>
                  <div class="col-2">

                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">{{$key -> name_category}}</p>

                  </div>
                </div>
              </div>
          </a>
        </div>
@endforeach
  
      	<div class="col-md-2">
      		<a href = "{{ route('newCategoryPage') }}">
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
                    <p class="text-center fw-bolder">Добавить пункт меню</p>
                  </div>
                </div>
              </div>
          </a>
      	</div>



</div>

@endsection