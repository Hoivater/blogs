@extends('layouts.app')

@section('title') #{{$value_tags}} @endsection


@section('content')

<div class="row" data-masonry='{"percentPosition": true }'>
@foreach($data_article as $key)
    <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-html='true' title="<a href = '{{route('articles', $key -> link)}}'>{{$key -> name}}" data-bs-content="
            <p>
              <small>
                <a href = '{{route('categoryPage', $key -> key_category)}}'>{{$key -> value_category}}</a> 
                > 
                <a href = '{{route('subcategory', $key -> key_subcategory)}}'>{{$key -> value_subcategory}}</a>
              </small>
            <p>
              {{$key -> description}}
            </p>
            <hr/>
            {{$key -> tags}}
            <hr/>
            <p>{{$key -> created_at}}</p>">
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
</div>
    <div class="container-fluid mt-3">
      <div class="pagination_bootstrap">
      {{ $data_article -> links() }}
      </div>
    </div>
@endsection


@section('footer_link')
<a href ="{{route('welcome')}}">Home</a>\<a href = "{{route('tags')}}">Теги</a>\#{{$value_tags}}
@endsection