@section('menu')
<div class="d-flex flex-column flex-shrink-0 bg-light sidebar" style="width: 4.5rem;">
    <a href="/" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="На главную">
      <img src="{{route('welcome')}}/data_image/logo.svg" alt = "логотип">
      <span class="visually-hidden">Icon-only</span>
    </a>
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">

      
      <li class="nav-item scrollto">
        <a href=" {{route('menus')}} "  class="nav-link py-3 border-bottom">
          <span class="fas fa-bars"></span>
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
        <a href="{{route('tags')}}" class="nav-link py-3 border-bottom">
            <span class="fas fa-hashtag"></span>
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
        <li><a class="dropdown-item" href="#">Изображения</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Выход</a></li>
      </ul>
    </div>
</div>