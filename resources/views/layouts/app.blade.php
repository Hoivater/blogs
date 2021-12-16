<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <!-- local CSS -->
    <link rel="stylesheet" href="css/app.css">
    <!-- local JavaScript -->
    <script type="text/javascript" src="js/app.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/de9f65bcf0.js" crossorigin="anonymous"></script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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
      <li class="nav-item scroll_gao">
        <a href="#" class="nav-link  py-3 border-bottom" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Меню">
          <i class="fas fa-bars"></i>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Статья">
          <i class="fas fa-hashtag"></i>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Комментарии">
            <i class="far fa-comments"></i>
        </a>
      </li>

      <li>
        <a href="#" class="nav-link py-3 border-bottom" title="" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-search"></i>
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



<div class="container-fluid">

<div class="header mt-3 ml-0 pl-0">
    <img src="{{ route('welcome')}}/data_image/header.svg">
</div>

<p>
    Reprehenderit saepe soluta inventore doloremque tenetur et, aliquam deleniti recusandae possimus ipsam fugit mollitia eos pariatur ducimus ipsum earum! Quas labore adipisci vel quo at quis a. Facere tempora officia cupiditate repellendus ducimus eaque, sit, accusantium amet ut eius. Nobis perferendis repudiandae placeat earum fuga quaerat iure incidunt? Debitis neque magnam possimus voluptate autem id consequuntur nisi tempora a quam magni deserunt molestiae commodi culpa ab quisquam, dolorum reprehenderit iusto ipsum sunt amet eius cumque. Sequi quibusdam perspiciatis fuga aut labore necessitatibus, officia ipsam aspernatur obcaecati quo, tempore et cupiditate doloribus qui magnam officiis, praesentium delectus atque porro sunt dolorum accusamus magni maxime assumenda itaque. Culpa, similique quis magni excepturi, omnis, unde minima consectetur molestias temporibus necessitatibus atque quibusdam corrupti velit expedita explicabo consequuntur quasi possimus fuga. Officia nulla sed architecto. Omnis consequatur voluptatibus atque non veritatis expedita voluptate saepe doloremque delectus dolorum ea dolor, illo vitae quaerat sint modi facere magnam perspiciatis deleniti. Odit officia reiciendis accusantium porro aperiam consequatur beatae natus aliquid. Qui aperiam exercitationem perferendis autem excepturi obcaecati dignissimos in culpa modi magnam molestias ipsum voluptatum, doloribus natus possimus rem cumque quia distinctio ducimus. Voluptate non totam ipsum dicta, velit. Mollitia odit maiores corrupti expedita exercitationem rem voluptates deleniti quasi, vel eos! Molestias fugit recusandae veritatis tempora dicta culpa maiores totam suscipit, omnis repudiandae, enim ratione minus nemo beatae accusantium ut nulla assumenda. Suscipit, explicabo illo! Voluptatem at quibusdam enim. Qui ipsum ut sunt aliquam modi voluptas dicta enim inventore reprehenderit. Quis cupiditate officia exercitationem quos odio nesciunt laboriosam quas rerum harum voluptates autem voluptate similique veniam facere quae architecto eos voluptas, dicta optio quam explicabo cumque hic. Sapiente aliquid, voluptate quia maiores ipsum sit id, iusto et? Cupiditate eius neque eveniet tenetur, tempora ullam quae atque error alias et facere facilis, repellat eligendi hic reprehenderit cumque eum dignissimos expedita minus maiores asperiores nisi ratione? Nostrum, tempore adipisci. Numquam eum, cumque quidem voluptatum, non laudantium. Ad quidem ullam quis quia numquam odit fuga aliquam, libero, assumenda tempora reprehenderit dolorum iure quibusdam, a vel, dolor velit porro nisi animi minima pariatur maxime hic aliquid labore. Possimus illum ab explicabo, enim cupiditate expedita soluta. Nostrum beatae, laudantium velit dolores, repellat veniam eveniet eligendi explicabo ea tenetur consequatur. Deleniti sint explicabo architecto consequatur accusamus. Provident quos itaque architecto sapiente, cumque. Cupiditate nesciunt magnam eos autem exercitationem voluptatibus officiis deleniti officia facere ullam recusandae, delectus asperiores, in, esse, debitis reprehenderit iste. At sequi iusto quasi nisi excepturi id, quo quos architecto obcaecati ipsam, libero praesentium, exercitationem veniam corrupti delectus quae porro necessitatibus dicta, est! Enim ad eius molestias ex asperiores est perspiciatis reiciendis quaerat incidunt quas officia ratione aspernatur fugiat accusantium quam eum doloremque veritatis dicta, eligendi possimus nulla. Eveniet rerum id in doloribus sequi. Eum dolore excepturi, officiis rerum neque quisquam velit quasi rem consequuntur. Repellendus rem recusandae cum! Omnis, natus ad eum, ullam quia temporibus iste harum. Asperiores ab adipisci facilis soluta, qui tempore non accusantium perferendis nemo similique laborum temporibus tempora iure ex ea corporis vitae tenetur esse aliquam in cum impedit, saepe. Repellat tempore accusamus fugit, tenetur officiis et, recusandae eius, dolore fugiat dolor, earum iure enim? Saepe odit, odio fuga ratione quod, error, quibusdam excepturi corporis repellat porro ex quasi rem repellendus nobis nostrum, soluta pariatur. Voluptate ut aut fuga, laboriosam soluta dolorem tempore expedita et ad autem eos laborum, adipisci saepe sit? Odit, exercitationem maiores iste iure repudiandae, debitis eum facilis velit veniam autem maxime vero tempore quae fugiat cumque porro corrupti. Nesciunt alias nostrum totam est, consequatur autem, eius sint reprehenderit quo corrupti culpa sapiente voluptates dolor reiciendis in. Optio repellendus beatae, vel rem alias. Minima, labore, quisquam. Animi ut aliquid, asperiores beatae velit, molestias consectetur facilis fugit sequi voluptatibus saepe vitae repudiandae, vel earum dolore inventore eius repellat atque? Doloremque culpa veniam, fuga quisquam quae aperiam nam labore quia laborum, similique assumenda accusantium voluptates tempora nesciunt voluptate molestiae amet quos. Sunt dignissimos, veniam voluptas mollitia dolore recusandae harum repudiandae fugit esse sed non at praesentium iusto voluptatum aut debitis hic sapiente quibusdam ducimus natus, facere similique illo maxime aperiam. Cumque, rerum fuga distinctio modi recusandae tempora numquam explicabo totam, cupiditate unde praesentium odio assumenda repellendus incidunt sequi laboriosam natus necessitatibus. Totam error reiciendis suscipit, iusto beatae vel praesentium, nobis asperiores cum, id nihil illum expedita eveniet. Nisi quam corporis et soluta accusantium consequuntur velit labore, hic reprehenderit at illum dolor tenetur minus magnam? Nulla iure molestiae est atque praesentium saepe cum magni sunt eos et nemo illo eligendi expedita fuga distinctio ad cupiditate magnam soluta, perspiciatis quas! Non saepe repellat vel, distinctio nobis, laboriosam soluta quas mollitia vero perspiciatis quia possimus necessitatibus aperiam qui sit, ullam ab in commodi accusamus similique aspernatur, reiciendis modi ipsam sapiente! Quasi sit possimus similique, deleniti voluptates nam eveniet laborum? Dolores, atque, adipisci. Itaque atque illo voluptatibus debitis consequuntur eaque dolore, rerum aspernatur suscipit exercitationem dolor soluta excepturi aliquam vitae ex eveniet. Quibusdam aliquid maxime, exercitationem facere accusantium blanditiis ullam sequi reiciendis, quasi officia excepturi hic tenetur fugiat iste voluptate deserunt ad alias ex quo recusandae facilis mollitia voluptas cupiditate neque. Eius vel laboriosam magnam quas, est minus, soluta? Optio tenetur quae aliquid excepturi repudiandae dolore, perspiciatis, suscipit ipsum necessitatibus! Minima nisi alias et hic autem, nihil, sunt suscipit est, accusantium repellat cumque saepe! Ut deleniti, facere quae reiciendis. Illum, iste a quidem nostrum numquam minima odio mollitia aut perferendis suscipit laboriosam impedit molestias vel rerum libero provident, cumque? Quo natus facilis voluptas repellat aliquam minima error enim assumenda magnam, culpa in omnis architecto impedit nulla quisquam ipsam nobis harum cupiditate iste, aperiam dolorum ut! Quas cumque rem cupiditate eos magnam. Consequuntur mollitia dolores qui inventore quod! Aspernatur, delectus tenetur recusandae pariatur? Exercitationem, expedita corrupti eos enim harum quibusdam animi repellendus sit libero natus non ullam aliquam dolorem eligendi id dolor optio, earum quas ratione. Ipsa reiciendis labore distinctio molestiae quibusdam, incidunt, deleniti, repudiandae unde similique, eum inventore? Molestias, eligendi. Error dicta natus vero sequi vitae doloribus dolorem doloremque sit quas voluptatem ipsam, at! Harum ea itaque exercitationem, non. Atque cumque excepturi natus aut iusto repudiandae repellat inventore omnis aperiam, tempore voluptatibus hic mollitia blanditiis. Neque aut magnam, dolore corrupti quasi reiciendis ea odio nesciunt consectetur aperiam? Autem provident commodi in culpa reprehenderit, dignissimos odio officia voluptatem, asperiores eos sunt ad nostrum adipisci! Quod, magnam, soluta! Temporibus unde aspernatur tenetur architecto ut recusandae voluptatem nemo, molestias, aliquam dolor voluptas, eius vitae odit. Expedita, qui magni maiores quasi ratione nostrum dolorum dignissimos fuga maxime! Culpa maiores labore numquam, debitis consectetur dolorum at quis eius dolores esse, ad laboriosam, quae nulla. Minima sunt et, neque quia corrupti voluptatibus veritatis omnis mollitia sint non ullam odit officiis aliquam ad vero doloribus, modi aliquid delectus, quis impedit eos ipsam obcaecati nesciunt. Asperiores laudantium vitae, illo dolore nihil laboriosam. Totam esse laudantium aliquid cupiditate iusto praesentium laborum facere a pariatur sequi cumque, ex eum, voluptates, reiciendis. Reprehenderit optio, ipsum ratione nam minima ea rerum amet doloremque? Voluptates reprehenderit assumenda, nam dolore aliquid id non molestias, consequatur. Quam illum nobis, assumenda sequi voluptatibus eum nisi quaerat? Dolorum fugiat dicta nemo nulla voluptatem error ipsum recusandae, ab sunt pariatur harum veritatis blanditiis inventore veniam consequuntur labore eaque nobis sapiente, commodi suscipit molestias repudiandae dolore accusamus deleniti. Commodi tenetur iusto temporibus harum quidem nemo dignissimos nobis similique distinctio doloribus, perferendis quod sit expedita iure debitis sint quia natus quo a? Provident a voluptas corporis beatae sunt doloremque eum illum nam cupiditate? Omnis obcaecati dolorum deserunt cumque officia asperiores, quasi, iure ea earum dignissimos reprehenderit sunt non voluptatum voluptates temporibus eum corporis animi excepturi dolorem laboriosam voluptate? Eligendi mollitia ipsam unde praesentium, assumenda, nemo illo obcaecati delectus ipsa, fugit repudiandae architecto beatae autem necessitatibus accusamus esse impedit, reiciendis dolorum quis tenetur consequatur. Dolore expedita illum provident id odit aspernatur earum amet distinctio in exercitationem eum soluta ducimus eligendi, cupiditate officia rerum explicabo, magni accusantium dolor, quas illo totam ex? Harum aspernatur omnis, cumque. Illum, iste! Pariatur, laborum repudiandae quo eaque rerum iusto quis maiores voluptates inventore vitae accusamus in voluptas temporibus repellat cupiditate ea soluta nemo nesciunt unde repellendus? Omnis eaque, quos, fugiat quaerat delectus corrupti qui aspernatur veniam earum numquam minima reiciendis, iure quam porro reprehenderit sed? Illum vero iure tenetur saepe quod dolorum rerum quo aliquam sunt omnis animi, nihil! Assumenda voluptate voluptates, aliquam, necessitatibus beatae adipisci, consequatur quis dicta voluptas explicabo, veniam quae expedita quia vel. Nobis doloremque mollitia cumque dolorum. Ipsam molestiae ullam quaerat veritatis nemo non quibusdam assumenda officiis obcaecati, et laborum ea necessitatibus labore exercitationem totam, inventore! Fuga praesentium doloremque, dicta possimus consequuntur recusandae rem iste! Fugiat dolor laborum corrupti quos dolorem velit esse nam eos similique, odio fuga sunt tempora delectus minus vel, officia, commodi nobis harum praesentium ratione facere eligendi asperiores, dolore vitae suscipit. Animi iste distinctio cum ad itaque minus enim ullam facilis ipsa odit, necessitatibus corrupti provident, sapiente nihil ipsum ipsam iusto, modi reiciendis, natus nemo incidunt dolore voluptas. Quidem nobis esse illum natus modi eligendi quisquam exercitationem qui numquam expedita, perferendis atque dignissimos. Similique ad ratione alias quis incidunt sed illo perferendis ex pariatur repudiandae id tenetur inventore molestiae explicabo blanditiis voluptatibus, eum magnam, labore officia. Eaque asperiores debitis soluta labore, cupiditate quidem enim fuga sit officiis, facilis voluptatibus aperiam, architecto ea quo recusandae quam! Minus, animi quos laudantium cum vel, sint magni adipisci sit numquam porro. Esse, dolore laborum nihil voluptatum sunt. At earum nesciunt laboriosam adipisci animi quia fugiat fugit, hic harum odit accusantium illum a vitae libero nihil, alias doloremque deleniti ullam natus quo magnam. Fugit omnis eveniet, enim harum, eos facere. Modi, qui eius architecto facilis nam aliquam nesciunt a beatae, tempora velit quaerat sed. Molestias illo, officiis itaque aspernatur assumenda ea iusto veritatis id veniam odio dolor laborum maxime voluptatum cumque illum magni! Doloribus quod nostrum, sit mollitia facilis temporibus perspiciatis incidunt error assumenda omnis maiores iure et, recusandae neque non nulla modi quis! Excepturi tempore deleniti, harum temporibus, quaerat doloribus dolorum quis illum eveniet delectus rem soluta, facilis praesentium voluptatem, tenetur corporis quas veritatis provident sapiente hic veniam debitis vitae mollitia possimus. Rerum, cumque officiis eaque quasi alias, est blanditiis corrupti dolorum nam cum voluptate accusantium amet omnis molestiae quisquam quam? Necessitatibus vel dolore, consequuntur inventore porro adipisci ex suscipit eligendi nihil blanditiis, perferendis sapiente. Voluptas saepe velit a beatae modi adipisci provident natus quaerat laborum, voluptatum dolores dolorem culpa facilis aspernatur! Minus, officiis obcaecati soluta ipsum commodi autem fuga deleniti voluptatum eos quo? Libero quibusdam aliquid esse quis maxime magnam et eum perspiciatis aspernatur, autem sed mollitia architecto voluptatem, velit nihil ullam. Perspiciatis, dicta corporis explicabo. Officiis odit, vitae asperiores, iure architecto necessitatibus vero. Laboriosam, sapiente molestiae pariatur eligendi. Velit natus, incidunt necessitatibus laudantium accusantium nobis a, quo voluptate obcaecati, in, iste quis omnis officiis voluptatem doloribus et! Dolore sapiente, pariatur deleniti deserunt doloremque.
</p>

</main>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Поиск по блогу</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form name="search" action ="#" method="post">

            <div class="input-group p-3">
              <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">Поиск</button>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



</body>

<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
</html>