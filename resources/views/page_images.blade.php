@extends('layouts.app')

@section('title') Загруженные изображения @endsection


@section('content')
<!-- Новая статья -->
        <div class="main_field">
        
        <div class="row" data-masonry='{"percentPosition": true }'>
          @foreach($data as $key)
        	 <div class="col-md-2 all_icon">
          <a href = "#" >
              <input type = "text" class="hidden" id = "input{{$key -> id}}" value = "/storage/{{$key->link}}">
              <div class="container icon_desktop">
                <div class="row">
                  <div class="col-2">

                  </div>
                  <div class="col-8">
                    <img src = "{{ route('welcome').'/storage/'.$key -> link }}" class="img-fluid pt-3 copy_image_code" id = "{{$key -> id}}"/>
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
          <a href = "#" data-bs-toggle="popover" data-bs-html='true' class="info_article" title="{{$key -> name}}" data-bs-content="
            <p>
              {{$key -> link}}
            </p>
            <hr/>
            {{$key -> description}}
            <hr/>
            <p>{{$key -> created_at}}</p>">
            <i class="fas fa-info p-2 pl-3"></i>
          </a>
      </div>
          @endforeach
        </div>




<div class="col-md-2">
  <a href = "{{ route('pageImageLoad') }}">
      <div class="container icon_desktop ">
        <div class="row">
          <div class="col-2">

          </div>
          <div class="col-8">
            <img src = "{{route('welcome')}}/data_image/add.png" class="img-fluid p-2" />
          </div>
          <div class="col-2">

          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p class="text-center fw-bolder">Загрузить изображение</p>
          </div>
        </div>
      </div>
  </a>
</div>



      </div>

<div class="container-fluid mt-3">
    <div class="pagination_bootstrap">
    {{ $data -> links() }}
    </div>
  </div>
@endsection


@section('footer_link')
<a href ="{{route('welcome')}}">Home</a>\<a href = "{{route('folder_images')}}">Изображения</a>\
@endsection