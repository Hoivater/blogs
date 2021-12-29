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
          <a href = "#" data-bs-toggle="popover" data-bs-html='true' title="<a href = '{{route('welcome')}}/category/{{$key -> value_category}}'>{{$key -> name_category}}</a>" data-bs-content="
          @if(isset($key -> podkategory))   
          @foreach($key -> podkategory as $sub)
            <a href = '{{route('subcategory', $sub -> value_category)}}'>{{$sub -> name_category}}</a> 
            @auth
            <a href = '{{route('deleteSubcategory', $sub -> value_category)}}'>del</a> 
            @endauth

            <br />
          @endforeach
          @endif
          @auth
          <a href = '{{route('addPodCategory', $key -> id)}}'>Добавить подкатегорию</a>
          @endauth
          ">

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
  @auth
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
@endauth


</div>

@endsection

@section('footer_link')
<a href ="{{route('welcome')}}">Home</a>\<a href = "{{route('menus')}}">Меню</a>\
@endsection