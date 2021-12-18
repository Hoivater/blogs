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
    <link rel="stylesheet" href="css/app.css">
    <!-- local JavaScript -->
    <script type="text/javascript" src="js/app.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/de9f65bcf0.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="{{route('welcome')}}/favicon.ico" type="image/x-icon">
    <title>@yield('title')</title>
</head>
<body>
<main>
<div class="d-flex flex-column flex-shrink-0 bg-light sidebar" style="width: 4.5rem;">
    <a href="/" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="На главную">
      <img src="{{route('welcome')}}/data_image/logo.svg" alt = "логотип">
      <span class="visually-hidden">Icon-only</span>
    </a>
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">

      <li>
        <a href="#" class="nav-link py-3 border-bottom scrollto" id = "article"  title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Статья">
          <i class="fas fa-desktop"></i> Home
        </a>
      </li>
      <li class="nav-item scrollto">
        <a href="#"  class="nav-link py-3 border-bottom scrollto" id = "menu" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Меню">
          <i class="fas fa-bars p-2" id = 'd_menu'></i>
        </a>
      </li>

      <li>
        <a href="#" class="nav-link py-3 border-bottom scrollto" id = "groups" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Группы">
            <i class="far fa-object-group p-2" id = 'd_groups'></i>
        </a>
      </li>

      <!-- <li>
        <a href="#" class="nav-link py-3 border-bottom scrollto" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Комментарии">
            <i class="far fa-comments"></i>
        </a>
      </li> -->
      <li>
        <a href="#" class="nav-link py-3 border-bottom scrollto" id = "tags"  title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Теги">
            <i class="fas fa-hashtag p-2" id = 'd_tags'></i>
        </a>
      </li>

      <li>
        <a href="#" class="nav-link py-3 border-bottom scrollto" id = "search" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Поиск">
            <i class="fas fa-search p-2" id = 'd_search'></i>
        </a>
      </li>

    </ul>


    <div class="dropdown border-top">
      <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3" style="">
        <li><a class="dropdown-item" href="#">Создать статью</a></li>
        <li><a class="dropdown-item" href="#">Мои картинки, загрузка</a></li>
        <li><a class="dropdown-item" href="#">Управление статьями</a></li>
        <li><a class="dropdown-item" href="#">Управление комментариями</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Выход</a></li>
      </ul>
    </div>
</div>



<div class="container-fluid content"  id = "link_desktop">

<div class="block d-flex align-items-start flex-column">
    
    <div class="header m-2 mt-3  ml-0 pl-0">
        <img src="{{ route('welcome')}}/data_image/header.svg">
    </div>
    <div class="container-fluid desktop_border">

      <div class="row">
        <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-html='true' title="<a href = 'link'>Полное название статьи. Может быть длинным например настолько</a>" data-bs-content="Комментировали: 32<br /> Теги: <a href = '#11'>#тег</a>">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">
                    
                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/user_image/1.jpg" class="img-fluid" />
                  </div>
                  <div class="col-2">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Название статьи</p>
                  </div>
                </div>
              </div>
          </a>
        </div>
 

 <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-trigger="focus" title="Полное название статьи. Может быть длинным например настолько" data-bs-html='true' data-bs-content="Комментировали: 32<br /> Теги: <a href = '#'>#тег</a>">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">
                    
                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/user_image/1.jpg" class="img-fluid" />
                  </div>
                  <div class="col-2">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Название статьи</p>
                  </div>
                </div>
              </div>
          </a>
        </div>

         <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-trigger="focus" title="Полное название статьи. Может быть длинным например настолько" data-bs-html='true' data-bs-content="Комментировали: 32<br /> Теги: <a href = '#'>#тег</a>">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">
                    
                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/user_image/1.jpg" class="img-fluid" />
                  </div>
                  <div class="col-2">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Название статьи</p>
                  </div>
                </div>
              </div>
          </a>
        </div>


         <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-trigger="focus" title="Полное название статьи. Может быть длинным например настолько" data-bs-html='true' data-bs-content="Комментировали: 32<br /> Теги: <a href = '#'>#тег</a>">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">
                    
                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/user_image/1.jpg" class="img-fluid" />
                  </div>
                  <div class="col-2">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Название статьи</p>
                  </div>
                </div>
              </div>
          </a>
        </div>


         <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-trigger="focus" title="Полное название статьи. Может быть длинным например настолько" data-bs-html='true' data-bs-content="Комментировали: 32<br /> Теги: <a href = '#'>#тег</a>">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">
                    
                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/user_image/1.jpg" class="img-fluid" />
                  </div>
                  <div class="col-2">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Название статьи</p>
                  </div>
                </div>
              </div>
          </a>
        </div>
        
         <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-trigger="focus" title="Полное название статьи. Может быть длинным например настолько" data-bs-html='true' data-bs-content="Комментировали: 32<br /> Теги: <a href = '123'>#тег</a>">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">
                    
                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/user_image/1.jpg" class="img-fluid" />
                  </div>
                  <div class="col-2">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Название статьи</p>
                  </div>
                </div>
              </div>
          </a>
        </div>


      </div>




      <div class="row">
        <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-html='true' title="<a href = 'link'>Полное название статьи. Может быть длинным например настолько</a>" data-bs-content="Комментировали: 32<br /> Теги: <a href = '#11'>#тег</a>">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">
                    
                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/user_image/1.jpg" class="img-fluid" />
                  </div>
                  <div class="col-2">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Название статьи</p>
                  </div>
                </div>
              </div>
          </a>
        </div>
 

 <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-trigger="focus" title="Полное название статьи. Может быть длинным например настолько" data-bs-html='true' data-bs-content="Комментировали: 32<br /> Теги: <a href = '#'>#тег</a>">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">
                    
                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/user_image/1.jpg" class="img-fluid" />
                  </div>
                  <div class="col-2">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Название статьи</p>
                  </div>
                </div>
              </div>
          </a>
        </div>

         <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-trigger="focus" title="Полное название статьи. Может быть длинным например настолько" data-bs-html='true' data-bs-content="Комментировали: 32<br /> Теги: <a href = '#'>#тег</a>">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">
                    
                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/user_image/1.jpg" class="img-fluid" />
                  </div>
                  <div class="col-2">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Название статьи</p>
                  </div>
                </div>
              </div>
          </a>
        </div>


         <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-trigger="focus" title="Полное название статьи. Может быть длинным например настолько" data-bs-html='true' data-bs-content="Комментировали: 32<br /> Теги: <a href = '#'>#тег</a>">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">
                    
                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/user_image/1.jpg" class="img-fluid" />
                  </div>
                  <div class="col-2">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Название статьи</p>
                  </div>
                </div>
              </div>
          </a>
        </div>


         <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-trigger="focus" title="Полное название статьи. Может быть длинным например настолько" data-bs-html='true' data-bs-content="Комментировали: 32<br /> Теги: <a href = '#'>#тег</a>">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">
                    
                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/user_image/1.jpg" class="img-fluid" />
                  </div>
                  <div class="col-2">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Название статьи</p>
                  </div>
                </div>
              </div>
          </a>
        </div>
        
         <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-trigger="focus" title="Полное название статьи. Может быть длинным например настолько" data-bs-html='true' data-bs-content="Комментировали: 32<br /> Теги: <a href = '123'>#тег</a>">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">
                    
                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/user_image/1.jpg" class="img-fluid" />
                  </div>
                  <div class="col-2">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Название статьи</p>
                  </div>
                </div>
              </div>
          </a>
        </div>


      </div>



      <div class="row">
        <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-html='true' title="<a href = 'link'>Полное название статьи. Может быть длинным например настолько</a>" data-bs-content="Комментировали: 32<br /> Теги: <a href = '#11'>#тег</a>">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">
                    
                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/user_image/1.jpg" class="img-fluid" />
                  </div>
                  <div class="col-2">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Название статьи</p>
                  </div>
                </div>
              </div>
          </a>
        </div>
 

 <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-trigger="focus" title="Полное название статьи. Может быть длинным например настолько" data-bs-html='true' data-bs-content="Комментировали: 32<br /> Теги: <a href = '#'>#тег</a>">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">
                    
                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/user_image/1.jpg" class="img-fluid" />
                  </div>
                  <div class="col-2">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Название статьи</p>
                  </div>
                </div>
              </div>
          </a>
        </div>

         <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-trigger="focus" title="Полное название статьи. Может быть длинным например настолько" data-bs-html='true' data-bs-content="Комментировали: 32<br /> Теги: <a href = '#'>#тег</a>">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">
                    
                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/user_image/1.jpg" class="img-fluid" />
                  </div>
                  <div class="col-2">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Название статьи</p>
                  </div>
                </div>
              </div>
          </a>
        </div>


         <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-trigger="focus" title="Полное название статьи. Может быть длинным например настолько" data-bs-html='true' data-bs-content="Комментировали: 32<br /> Теги: <a href = '#'>#тег</a>">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">
                    
                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/user_image/1.jpg" class="img-fluid" />
                  </div>
                  <div class="col-2">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Название статьи</p>
                  </div>
                </div>
              </div>
          </a>
        </div>


         <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-trigger="focus" title="Полное название статьи. Может быть длинным например настолько" data-bs-html='true' data-bs-content="Комментировали: 32<br /> Теги: <a href = '#'>#тег</a>">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">
                    
                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/user_image/1.jpg" class="img-fluid" />
                  </div>
                  <div class="col-2">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Название статьи</p>
                  </div>
                </div>
              </div>
          </a>
        </div>
        
         <div class="col-md-2">
          <a href = "#" data-bs-toggle="popover" data-bs-trigger="focus" title="Полное название статьи. Может быть длинным например настолько" data-bs-html='true' data-bs-content="Комментировали: 32<br /> Теги: <a href = '123'>#тег</a>">
              <div class="container icon_desktop ">
                <div class="row">
                  <div class="col-2">
                    
                  </div>
                  <div class="col-8">
                    <img src = "{{route('welcome')}}/user_image/1.jpg" class="img-fluid" />
                  </div>
                  <div class="col-2">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center fw-bolder">Название статьи</p>
                  </div>
                </div>
              </div>
          </a>
        </div>


      </div>


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



      

    </div>






    <div class="menu_pod" id = "mod_menu">
      <div class="header_menu">
        <p class = "m-0 p-2">Меню для gifit.ru.html</p>
        <div class = "close"></div>
      </div>
      <div class="body_menu">
           <h5>&lt;nav class = 'menu'&gt;</h5>
            <h5>&nbsp; &lt;a href = '/conspect'&gt;</h5> 
            <h5>&nbsp;&nbsp;<a href = '#' class = 'm_menu'>Конспект [17]</a> <small><i class="fas fa-arrow-right"></i> <a href = '#' class = 'v_menu'>Laravel [10]</a> /  <a href = '#' class = 'v_menu'>Laravel [10]</a> /  <a href = '#' class = 'v_menu'>Laravel [10]</a> /  <a href = '#' class = 'v_menu'>Laravel [10]</a> /  <a href = '#' class = 'v_menu'>Laravel [10]</a> / <a href = '#' class = 'v_menu'>Github[23]</a>  / <a href = '#' class = 'v_menu'>SASS и SCSS[3]</a></small></h5>
            <h5>&nbsp; &lt;/a&gt;</h5>
            <h5>&nbsp; &lt;a href = ''&gt;</h5> 
            <h5>&nbsp;&nbsp;<a href = '#' class = 'm_menu'>Самые официальные страницы [1]</a> <small><i class="fas fa-arrow-right"></i> <a href = '#'>MyPtoBot [10]</a></small></h5>
            <h5>&nbsp; &lt;/a&gt;</h5>
        <h5>&lt;/nav&gt;</h5>
      </div>
    </div>
    




   <div class="menu_pod" id = "mod_search">
        <div class="header_menu">
          <p class = "m-0 p-2">Поиск</p>
          <div class = "close"></div>
        </div>
        <div class="body_menu">
          <form name="search" action ="#" method="post">
              <div class="input-group p-3">
                <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Поиск</button>
              </div>
          </form>

        </div>
      </div>







    <div class="menu_pod" id = "mod_groups">
      <div class="header_menu">
        <p class = "m-0 p-2">Группы</p>
        <div class = "close"></div>
      </div>
      <div class="body_menu">

      </div>
    </div>





    <div class="menu_pod" id = "mod_tags">
      <div class="header_menu">
        <p class = "m-0 p-2">Теги для gifit.ru.html</p>
<div class = "close"></div>
      </div>
      <div class="body_menu">
           <h5>&lt;nav class = 'tag'&gt;</h5>
            <h5>&nbsp; &lt;a href = '/tags'&gt;</h5> 
            <h5>&nbsp;&nbsp;<a href = '#' class = 'm_menu'>Конспект {32}</a> , <a href = '#' class = 'm_menu'>CSS</a> , <a href = '#' class = 'm_menu'>CSS</a> , <a href = '#' class = 'm_menu'>CSS</a> , <a href = '#' class = 'm_menu'>CSS</a> , <a href = '#' class = 'm_menu'>CSS</a> , <a href = '#' class = 'm_menu'>CSS</a> , <a href = '#' class = 'm_menu'>CSS</a> , <a href = '#' class = 'm_menu'>CSS</a> , <a href = '#' class = 'm_menu'>CSS</a> , <a href = '#' class = 'm_menu'>CSS</a> , <a href = '#' class = 'm_menu'>CSS</a> </h5>
            <h5>&nbsp; &lt;/a&gt;</h5>
        <h5>&lt;/nav&gt;</h5>
      </div>
    </div>




    <div class="navigation mt-auto" id = "read_article">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-9">
              <h5 class="string_info"><a href =''>Home\Конспект</a>\<a href =''>GitHub</a></h5> 
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
</script>
</html>