<!--=:: Header ::=-->
<header id="header" class="d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="<?= BASE_URL ?>">Simplix</a></h1>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link active" href="<?= BASE_URL ?>">Home</a></li>
        <li><a class="nav-link" href="<?= BASE_URL . 'news'?>">News</a></li>
        <li><a class="nav-link" href="<?= BASE_URL . 'services'?>">Services</a></li>
        <li class="dropdown"><a href="<?= BASE_URL ?>">Drop Down <i class="bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#">Drop Deeper <i class="bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li>
        <li><a class="nav-link" href="<?= BASE_URL . 'about'?>">About</a></li>
        <li><a class="nav-link" href="<?= BASE_URL . 'contact'?>">Contact</a></li>
      </ul>

    </nav>

  </div>
</header>
