<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fotóalbumok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include(__DIR__ . "/../nav.php") ?>
            <main class="col pb-5 px-0 d-flex flex-column gap-5 text-bg-light">
                <header class="header-fix-height-sub header-sub-bg"></header>
                <section class="px-3 px-md-5 pt-5 text-center d-flex flex-column gap-5">
                    <article class="d-flex flex-column gap-3">
                        <h2 class="main-heading-2">
                            <strong>
                                Fotóalbumok
                            </strong>
                        </h2>
                    </article>
                    <article class="container-fluid px-0">
                        <div class="row row-cols-1 row-cols-md-3 justify-content-center">
                        <?php
                            foreach($this->fotoalbumokNav() as $key => $nav) {
                                if(isset($nav)) {
                                    echo '
                                        <div class="col '.($key != count($this->fotoalbumokNav()) - 1 ? "pb-5 pb-md-4" : "").'">
                                            <a href="'.$key.'" class="img-link-position-main text-center img-link-anim-main">
                                                <div class="ratio ratio-1x1 img-link-anim-sub">
                                                    <picture>
                                                        <img src="./assets/imgs/pics/minta.jpg" alt="'.$nav.'" class="w-100 h-100">
                                                    </picture>
                                                </div>
                                                <div class="img-link-position-sub-1">
                                                    <span class="img-link-position-sub-2">
                                                        '.$nav.'
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    ';
                                }
                            }
                        ?>
                        </div>
                    </article>
                </section>
                <section class="px-3 px-md-5 pt-5 d-flex flex-column gap-5">
                    <article class="d-flex flex-column gap-3">
                        <h2 class="main-heading-2 text-center">
                            <strong>
                                Impressziók a 2023. évi Szent Miklós napi rorátéról
                            </strong>
                        </h2>
                        <p>
                            Adventi szép szokás a rorate, vagyis a hajnali mise. Adventben hétfőtől péntekig a szentmise reggel 6-kor kezdődik. Hétfőtől csütörtökig találkozási lehetőség van a szentmise után a plébánia nagytermében. Mindenkit szeretettel várunk.
                        </p>
                        <div class="d-flex justify-content-center">
                            <div id="szentMiklosRorate" class="carousel slide">
                                <div class="carousel-inner h-100">
                                    <div class="carousel-item active h-100">
                                        <img src="./assets/imgs/pics/minta.jpg" class="d-block w-100 h-100" alt="szajkó">
                                    </div>
                                    <div class="carousel-item h-100">
                                        <img src="./assets/imgs/logo/templom_logo.png" class="d-block w-100 h-100" alt="szajkó">
                                    </div>
                                    <div class="carousel-item h-100">
                                        <img src="./assets/imgs/bg/templom_bg.jpg" class="d-block w-100 h-100" alt="szajkó">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#szentMiklosRorate" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#szentMiklosRorate" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </article>
                </section>
                <section class="px-3 px-md-5 pt-5 d-flex flex-column gap-5">
                    <article class="d-flex flex-column gap-3">
                        <h2 class="main-heading-2 text-center">
                            <strong>
                                A 2023. évi karácsonyi gyerekmise néhány pillanata
                            </strong>
                        </h2>
                        <div class="d-flex justify-content-center">
                            <div id="karacsonyGyerekMise2023" class="carousel slide">
                                <div class="carousel-inner h-100">
                                    <div class="carousel-item active h-100">
                                        <img src="./assets/imgs/pics/minta.jpg" class="d-block w-100 h-100" alt="szajkó">
                                    </div>
                                    <div class="carousel-item h-100">
                                        <img src="./assets/imgs/logo/templom_logo.png" class="d-block w-100 h-100" alt="szajkó">
                                    </div>
                                    <div class="carousel-item h-100">
                                        <img src="./assets/imgs/bg/templom_bg.jpg" class="d-block w-100 h-100" alt="szajkó">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#karacsonyGyerekMise2023" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#karacsonyGyerekMise2023" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </article>
                </section>
                <?php include(__DIR__ . "/../copyright.php") ?>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>