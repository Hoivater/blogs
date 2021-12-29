<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <!-- local CSS -->
    <link rel="stylesheet" href="{{route('welcome')}}/css/app.css">
    <!-- local JavaScript -->
    <script type="text/javascript" src="{{route('welcome')}}/js/app.js"></script>
    <!-- Font Awesome -->
    @yield('scripts')
    <script src="https://kit.fontawesome.com/de9f65bcf0.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{route('welcome')}}/favicon.svg" type="image/x-icon">
    <title>@yield('title')</title>
</head>
<body>
<main>
@include('inc.menu')



<div class="container-fluid content"  id = "link_desktop">

<div class="block d-flex align-items-start flex-column">
    
    <div class="header m-2 mt-3  ml-0 pl-0">
        <img src="{{ route('welcome')}}/data_image/header.svg">
    </div>
    <div class="container-fluid desktop_border">
    @yield('content')
    @yield('navigation_article')
    @yield('commentary')
    </div>

    




@include('inc.site')



    <div class="navigation mt-auto" id = "read_article">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-9">
              <h5 class="string_info">@yield('footer_link')</h5> 
          </div>
          <div class="col-md-3"><h5 class="text-end">© GIFIT.RU, 2021</h5></div>
        </div>
      </div>
    </div>
</div>



















</div>

</main>





</body>

<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
return new bootstrap.Tooltip(tooltipTriggerEl)
});
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
});

@yield('script_footer')
</script>
</html>