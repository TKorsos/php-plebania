<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rólunk</title>
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
                                Rólunk
                            </strong>
                        </h2>
                        <h2 class="main-heading-2">
                            <strong>
                                Lelkipásztoraink
                            </strong>
                        </h2>
                        <h3 class="sub-1-heading-3 sub-1-heading-3-color">
                            <strong>
                                További információkért kattintson a képre!
                            </strong>
                        </h3>
                    </article>
                    <article class="container-fluid px-0">
                        <div class="row row-cols-1 row-cols-md-2 justify-content-center">
                        <?php
                            foreach($this->rolunkNav()[0] as $key => $nav) {
                                if(isset($nav)) {
                                    echo '
                                        <div class="col '.($key != count($this->rolunkNav()[0]) - 1 ? "pb-5 pb-md-4" : "").'">
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
                <section class="px-3 px-md-5 pt-5 text-center d-flex flex-column gap-5">
                    <article class="d-flex flex-column gap-3">
                        <h2 class="main-heading-2">
                            <strong>
                                Plébániánk
                            </strong>
                        </h2>
                        <h3 class="sub-1-heading-3 sub-1-heading-3-color">
                            <strong>
                                További információkért kattintson a képre!
                            </strong>
                        </h3>
                    </article>
                    <article class="container-fluid px-0">
                        <div class="row row-cols-1 row-cols-md-3 justify-content-center">
                        <?php
                            foreach($this->rolunkNav()[1] as $key => $nav) {
                                if(isset($nav)) {
                                    echo '
                                        <div class="col '.($key != count($this->rolunkNav()[1]) - 1 ? "pb-5 pb-md-4" : "").'">
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
                <section class="px-3 px-md-5 pt-5 text-center d-flex flex-column gap-5">
                    <article class="d-flex flex-column gap-3">
                        <h2 class="main-heading-2">
                            <strong>
                                Közösségeink
                            </strong>
                        </h2>
                        <h3 class="sub-1-heading-3 sub-1-heading-3-color">
                            <strong>
                                További információkért kattintson a képre!
                            </strong>
                        </h3>
                    </article>
                    <article class="container-fluid px-0">
                        <div class="row row-cols-1 row-cols-md-3 justify-content-center">
                        <?php
                            foreach($this->rolunkNav()[2] as $key => $nav) {
                                if(isset($nav)) {
                                    echo '
                                        <div class="col '.($key != count($this->rolunkNav()[2]) - 1 ? "pb-5 pb-md-4" : "").'">
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
                            <strong>Virtuális időutazásunk a templomszentelés 10. évfordulójára</strong>
                        </h2>
                        <div>
                            <p>
                                <strong>Lassan tíz éve</strong>, 2014.októnber 31-én <strong>szentelték fel templomunkat</strong>, a Boldog Meszlényi Zoltán-templomot.
                            </p>
                            <p>
                                Ebből az alkalomból egy <strong>virtuális időutazást indítottunk</strong> honlapunkon.
                            </p>
                            <div class="d-flex flex-column gap-4">
                                <strong>Itt az első videó:</strong>
                                <div class="d-flex justify-content-center text-center">
                                    <div class="w-100">
                                        <div class="ratio ratio-16x9">
                                            <iframe src="//www.youtube-nocookie.com/embed/0Jvt5U8YTAE?wmode=opaque" title="YouTube video" allowfullscreen loading="lazy"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <strong>Itt a második videó:</strong>
                                <div class="d-flex justify-content-center text-center">
                                    <div class="w-100">
                                        <div class="ratio ratio-16x9">
                                            <iframe src="//www.youtube-nocookie.com/embed/ZVUfgbklIsU?wmode=opaque" title="YouTube video" allowfullscreen loading="lazy"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <strong>Itt a harmadik s egyben legjobb videó:</strong>
                                <div class="d-flex justify-content-center text-center">
                                    <div class="w-100">
                                        <div class="ratio ratio-16x9">
                                            <iframe src="//www.youtube-nocookie.com/embed/snHBiJQxfEE?wmode=opaque" title="YouTube video" allowfullscreen loading="lazy"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>
                <section class="px-3 px-md-5 pt-5 d-flex flex-column gap-5">
                    <article class="d-flex flex-column gap-3">
                        <h3>
                            <strong>
                                Ministráns találkozó volt plébániánkon 2024. január 29-én
                            </strong>
                        </h3>
                        <div>
                            <p>
                                A 60-as években és 70-es évek elején felavatott, az akkori szükség kápolnában szolgálatot teljesítő ministránsok találkoztak plébániánkon.
                            </p>
                            <p>
                                A január 29-i fél 11-es szentmisén történő részvétel után az összejövetelre a Szent Adalbert teremben került sor.
                            </p>
                            <p>
                                <a href="https://photos.google.com/share/AF1QipOCSYuqa3engM-bzPpqiKe5mJdnFlKKgtwiPNuixzm95k7gY3hD9Mxv1yrvr3DMkg?pli=1&key=U1F4bWIxT0JxckdTV0gxUzJWMkdfUU1vMWppcmRn" class="link-primary">
                                    <strong>A szentmise képei itt megtekinthetők.</strong>
                                </a>
                            </p>
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