<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aktualitások</title>
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
                                Aktualitások
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
                            foreach($this->aktualitasokNav() as $key => $nav) {
                                if(isset($nav)) {
                                    echo '
                                        <div class="col '.($key != count($this->aktualitasokNav()) - 1 ? "pb-5 pb-md-4" : "").'">
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
                        <h2 class="main-heading-2">
                            <strong>
                                Élő egyház
                            </strong>
                        </h2>
                        <div>
                            <p>
                                Ferenc pápa 2023. októberére összehívta a püspöki szinódus rendes közgyűlését. Érdemes némi időt szánni az ezzel kapcsolatos hírekre. Ebben segíthetnek honlapunk <a class="link-primary" href="?page=ajanloView"><span class="text-uppercase">ajánló</span></a> menűpontja alatt összegyűjtott hírforrások.
                            </p>
                            <p>
                                Pl. a püspöki szinódus hírei a <span class="text-primary">Magyar Kurírban</span>, a <span class="text-primary">Vatican Newsban</span>.
                            </p>
                            <p>
                                A megnyitó eseményhez kapcsolódóan idézünk két hírt, melyet érdemes elolvasni. További jó böngészést kívánunk!
                            </p>
                        </div>
                        <h3>
                            <strong>
                                Ferenc pápa az új bíborosoknak: Legyetek az Egyház szinodalitásának a harmóniája
                            </strong>
                        </h3>
                        <div>
                            <p>
                                Szeptember 30-án szombaton délelőtt a Szent Péter téren tartották a bíborosok rendes konzisztóriumát, melynek során Ferenc pápa 21 új bíborost kreált, közülük 18 a választó és 3 a nem választó kardinális. Miként egykor Pünkösd napján, úgy most is nyelveik sokszínűsége új lélegzetet jelent az egyház számára - szólt a pápa homíliája, majd így buzdított: <span class="text-primary">"Legyetek evangelizált evangélisták és ne hivatalnokok"</span>.
                            </p>
                            <p>
                                <a href="https://www.vaticannews.va/hu/papa/news/2023-09/papa-konzisztorium-biboros-krealas-szinodus-szimfonia-egyhaz.html" class="link-primary">
                                    <strong>Részletekért katt ide.</strong>
                                </a>
                            </p>
                        </div>
                        <h3>
                            <strong>
                                Az Egyház kapui mindenki előtt nyitva állnak - Ferenc pápa megnyitotta a püspöki szinódus rendes közgyűlését
                            </strong>
                        </h3>
                        <div>
                            <p>
                                Ferenc pápa október 4-én a Szent Péter téren nyitotta meg a Püspöki Szinódus XVI. Rendes Közgyűlését. A mintegy 25 ezer fő részvételével celebrált szentmisén Ferenc pápa hangsúlyozta, hogy a szinódus nem az Egyház "parlamentje".
                            </p>
                            <p>
                                Néhány gondolat a homilíából:
                            </p>
                            <p>
                                <span class="text-primary">"Nem, nem parlamentként vagyunk itt, hanem azért, hogy együtt haladjunk Jézus tekintetétől kísérve, aki az Atyát áldja és befogadja azokat, akik elfáradtak és terheket hordoznak. Induljunk el Jézus tekintetétől, ami egy áldó és befogadó tekintet."</span>
                            </p>
                            <p>
                                Jézus áldó tekintete arra hívja az Egyházat, hogy <span class="text-primary">"ne veszítse el lelkesedését, ne keressen ideológiai kiskapukat, ne zárkózzon el a már megszerzett meggyőződései mögé, ne engedjen a kényelmes megoldásoknak, ne engedje, hogy a világ szabja meg, hogy mit kell tennie"</span> - hangsúlyozta Ferenc pápa.
                            </p>
                            <p>
                                A pápa elmondta, hogy a szinódus célja, hogy az Egyház tekintetét <span class="text-primary">"újra Istenre irányítsa, hogy olyan Egyház legyen, aki irgalommal tekint az emberiségre."</span> Jézus befogadó tekintetéről elmélkedve kiemelte, hogy ez a tekintet arra hív, hogy vendégszerető, nyitott Egyház legyünk, zárt ajtók nélkül:
                            </p>
                            <p>
                                <a href="https://777blog.hu/2023/10/04/az-egyhaz-kapui-mindenki-elott-nyitva-allnak-ferenc-papa-megnyitotta-a-puspoki-szinodus-rendes-kozgyuleset/" class="link-primary">
                                    <strong>Részletekért katt ide.</strong>
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