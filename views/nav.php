<nav class="col-lg-3 navbar navbar-expand-lg text-center d-flex flex-column justify-content-between py-0 py-lg-2 py-xl-3 py-xxl-4 sticky-top nav-fix-height bg-light">
  <div class="container-fluid d-lg-flex flex-lg-column justify-content-between h-100">
    <div>
        <img src="./assets/imgs/logo/templom_logo.png" alt="templom logó" class="logo-pic">
    </div>
    <div>
        <strong class="udvozlo-font">Szeretettel köszöntünk honlapunkon!</strong>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav text-uppercase d-flex-lg flex-lg-column">
            <?php
                foreach($this->navigacioView() as $nav) {
                    if(isset($nav)) {
                        echo '<li class="nav-item border-0">
                                <a class="nav-link" href="#">
                                    '.$nav.'
                                </a>
                              </li>';
                    }
                }
            ?>
        </ul>
    </div>
    <div class="d-none d-lg-flex flex-column copyright-font">
        <div>
            <span>
                © 2022  Szent Adalbert Plébánia, 1119 Budapest, Etele út 3.
            </span>
        </div>
        <div>
            Sütik
        </div>
    </div>
  </div>
</nav>