<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plébánia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include("nav.php") ?>
            <main class="col pb-5 px-0 d-flex flex-column gap-5 text-bg-light">
                <header class="text-center d-flex justify-content-center align-items-center pb-5 header-fix-height header-bg">
                    <h1 class="d-flex flex-column gap-3 text-center">
                        <span class="main-h1-top">
                            <i>Szeretettel köszöntünk honlapunkon!</i>
                        </span>
                        <span class="main-h1-center">
                            <strong>Szent Adalbert Plébánia</strong>
                        </span>
                        <span class="main-h1-bottom pt-3">
                            <strong>Boldog Meszlényi Zoltán Templom</strong>
                        </span>
                    </h1>
                </header>
                <section class="px-3 px-md-5 pt-5 text-center d-flex flex-column gap-5">
                    <article class="d-flex flex-column gap-3">
                        <h2 class="main-heading-2">
                            <strong>
                                Templom, plébánia, urnatemető egy helyen
                            </strong>
                        </h2>
                        <h3 class="sub-1-heading-3 sub-1-heading-3-color text-uppercase">
                            <strong>
                                Akadálymentesített
                            </strong>
                        </h3>
                        <div class="sub-1-heading-3">
                            <strong>
                                1119 Budapest, <span class="text-primary">Etele</span> út <span class="text-primary">3</span>
                            </strong>
                        </div>
                        <div class="sub-1-heading-3">
                            <a href="https://www.google.com/maps/uv?pb=!1s0x4741dda32b2451a3%3A0x7138f44b7d6959b6!3m1!7e115!4s%2Fmaps%2Fplace%2Fboldog%2Bmeszl%25C3%25A9nyi%2Bbudapest%2F%4047.4627082%2C19.040642%2C3a%2C75y%2C24.9h%2C90t%2Fdata%3D*213m4*211e1*213m2*211soMcDnmwWk92k41vH_CrgEQ*212e0*214m2*213m1*211s0x4741dda32b2451a3%3A0x7138f44b7d6959b6%3Fsa%3DX!5sboldog%20meszl%C3%A9nyi%20budapest%20-%20Google-keres%C3%A9s!15sCgIgARICCAI&imagekey=!1e2!2soMcDnmwWk92k41vH_CrgEQ&hl=hu&sa=X&ved=2ahUKEwin6uzP44T-AhVo_SoKHS40BTQQpx96BQiEARAN&viewerState=im" class="link-primary">
                                <strong>
                                    KATT IDE EGY VIRTUÁLIS SÉTÁÉRT A TEMPLOM KÖRÜL
                                </strong>
                            </a>
                        </div>
                    </article>
                    <article class="d-flex flex-column gap-5 d-md-flex flex-md-row gap-md-3">
                        <?php
                            for($i = 1; $i <= 3; ++$i) {
                                echo '
                                <div class="d-flex flex-column gap-5">
                                    <div>
                                        <picture>
                                            <img src="./assets/imgs/pics/minta.jpg" alt="szajkó'.$i.'" class="w-100">
                                        </picture>
                                    </div>
                                    <div class="d-flex flex-column gap-3">
                                        <h3 class="sub-2-heading-3 text-uppercase">
                                            Miserend
                                        </h3>
                                        <h3 class="sub-3-heading-3">
                                            a Boldog Meszlényi Zoltán Templomban
                                        </h3>
                                        <div>
                                            <span>Hétfő, kedd szerda és csütörtök:</span>
                                            <span>7:00 és 8:00</span>
                                        </div>
                                        <div>
                                            <span>Péntek:</span>
                                            <span>7:00, 8:00 és 18:00</span>
                                        </div>
                                        <div>
                                            <span>Szombat:</span>
                                            <span>8:00, 16:00* és 18:00</span>
                                        </div>
                                        <div>
                                            <span>Vasárnap:</span>
                                            <span>7:00, 8:00, 9:00, 10:30 és 18:00</span>
                                        </div>
                                        <div>
                                            <span>
                                                Adventi időben roráték hétfőtől péntekig reggel 6 órakor vannak és 7 órai szentmise elmarad.
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                *Koreai közösség miséje.
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                                A fentiektől eltérő miserend külön kerül meghirdetésre.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                ';
                            }
                        ?>
                    </article>
                </section>
                <section class="px-3 px-md-5 pt-5 text-center d-flex flex-column gap-5">
                    <article class="d-flex flex-column gap-5">
                        <h2 class="main-heading-2">
                            <strong>Közelgő jubileumunk hírei</strong>
                        </h2>
                        <div class="d-flex justify-content-center">
                            <div class="w-100">
                                <picture>
                                    <img src="./assets/imgs/pics/minta.jpg" alt="szajkó" class="w-100">
                                </picture>
                            </div>
                        </div>
                    </article>
                    <article class="d-flex flex-column gap-3 text-start">
                        <h3 class="sub-0-heading-3 text-center text-sm-start text-primary">
                            <strong>Virtuális időutazásunk a végéhez közeledik</strong>
                        </h3>
                        <div>
                            <p>
                                <strong>Lassan tíz éve</strong>, 2014.októnber 31-én <strong>szentelték fel templomunkat</strong>, a Boldog Meszlényi Zoltán-templomot.
                            </p>
                            <p>
                                Ebből az alkalomból egy <strong>virtuális időutazást indítottunk</strong> honlapunkon.
                            </p>
                            <p>
                                <strong>Itt a harmadik s egyben legjobb videó:</strong>
                            </p>
                            <div class="d-flex justify-content-center text-center">
                                <div class="w-100">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="//www.youtube-nocookie.com/embed/snHBiJQxfEE?wmode=opaque" title="YouTube video" allowfullscreen loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="d-flex flex-column gap-3 text-start">
                        <h3 class="sub-0-heading-3 text-center text-sm-start text-primary">
                            <strong>Folytatódik a virtuális időutazás</strong>
                        </h3>
                        <div>
                            <p>
                                <strong>Lassan tíz éve</strong>, 2014.októnber 31-én <strong>szentelték fel templomunkat</strong>, a Boldog Meszlényi Zoltán-templomot.
                            </p>
                            <p>
                                Ebből az alkalomból egy <strong>virtuális időutazást indítottunk</strong> honlapunkon.
                            </p>
                            <p>
                                <strong>Itt a második videó:</strong>
                            </p>
                            <div class="d-flex justify-content-center text-center">
                                <div class="w-100">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="//www.youtube-nocookie.com/embed/ZVUfgbklIsU?wmode=opaque" title="YouTube video" allowfullscreen loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="d-flex flex-column gap-3 text-start">
                        <h3 class="sub-0-heading-3 text-center text-sm-start text-primary">
                            <strong>Virtuális időutazás</strong>
                        </h3>
                        <div>
                            <p>
                                <strong>Lassan tíz éve</strong>, 2014.októnber 31-én <strong>szentelték fel templomunkat</strong>, a Boldog Meszlényi Zoltán-templomot.
                            </p>
                            <p>
                                Ebből az alkalomból egy <strong>virtuális időutazást indítottunk</strong> honlapunkon.
                            </p>
                            <p>
                                <strong>Itt az első videó:</strong>
                            </p>
                            <div class="d-flex justify-content-center text-center">
                                <div class="w-100">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="//www.youtube-nocookie.com/embed/0Jvt5U8YTAE?wmode=opaque" title="YouTube video" allowfullscreen loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="d-flex flex-column gap-3 text-start">
                        <h3 class="sub-0-heading-3 text-center text-sm-start text-primary">
                            <strong>Emlékkönyv ajándékba?</strong>
                        </h3>
                        <div class="d-flex justify-content-center">
                            <div class="w-100">
                                <picture>
                                    <img src="./assets/imgs/pics/minta.jpg" alt="szajkó" class="w-100">
                                </picture>
                            </div>
                        </div>
                    </article>
                </section>
                <section class="px-3 px-md-5 pt-5 text-center d-flex flex-column gap-5">
                    <article class="d-flex flex-column gap-3">
                        <h2 class="main-heading-2">
                            <strong>Aktuális hirdetéseink</strong>
                        </h2>
                    </article>
                    <article class="d-flex flex-column gap-3">
                        <div class="d-flex justify-content-center">
                            <div class="w-100">
                                <picture>
                                    <img src="./assets/imgs/pics/minta.jpg" alt="szajkó" class="w-100">
                                </picture>
                            </div>
                        </div>
                    </article>
                    <article class="d-flex flex-column gap-3">
                        <div class="d-flex justify-content-center">
                            <div class="w-100">
                                <picture>
                                    <img src="./assets/imgs/pics/minta.jpg" alt="szajkó" class="w-100">
                                </picture>
                            </div>
                        </div>
                    </article>
                    <article class="d-flex flex-column gap-3">
                        <div class="d-flex justify-content-center">
                            <div class="w-100">
                                <picture>
                                    <img src="./assets/imgs/pics/minta.jpg" alt="szajkó" class="w-100">
                                </picture>
                            </div>
                        </div>
                    </article>
                    <article class="d-flex flex-column gap-3">
                        <div class="d-flex justify-content-center">
                            <div class="w-100">
                                <picture>
                                    <img src="./assets/imgs/pics/minta.jpg" alt="szajkó" class="w-100">
                                </picture>
                            </div>
                        </div>
                    </article>
                    <article class="d-flex flex-column gap-3 text-start">
                        <h3 class="sub-0-heading-3 text-uppercase text-center text-sm-start">
                            <strong>Évközi 29. vasárnap</strong>
                        </h3>
                        <p class="sub-1-heading-3">
                            <strong class="d-flex gap-3 justify-content-center justify-content-sm-start">
                                <span class="text-primary">Hirdetéseink</span>
                                <span>2024. október 20.</span>
                            </strong>
                        </p>
                        <ul class="list-group list-group-numbered">
                            <li class="list-group-item border-0 px-0">
                                Ma országos gyűjtés van a missziók javára.
                            </li>
                            <li class="list-group-item border-0 px-0">
                                Nemzeti ünnepünkön (október 23-án, szerdán) szentmise lesz templomunkban reggel 8-kor és este 6-kor.
                            </li>
                            <li class="list-group-item border-0 px-0">
                                Nézzük együtt "A kiválasztott" sorozatot pénteken az esti szentmise után a plébánia nagytermében.
                            </li>
                            <li class="list-group-item border-0 px-0">
                                Október a rózsafüzér hónapja. Köszöntsük esténként közösen Égi Édesanyánkat az imádság közös végzésével. Tesszük ezt templomunkban hétfőtől péntekig este 17:30-kor.
                            </li>
                            <li class="list-group-item border-0 px-0">
                                Október 31-én (csütörtökön) emlékezünk meg az esti szentmise keretében templomunk felszentelésének 10. évfordulójáról. A szentmise után - átvonulva a nagyterembe - agapéval fejezzük be a megemlékezést, melyhez sós és édes sütemény hozzájárulást kérünk.
                            </li>
                            <li class="list-group-item border-0 px-0">
                                "Templom épült…" címmel egy értékes kiadvány jelenik meg a templomszentelés évfordulójára templomunk történetéről Alapítványunk támogatásával. A könyvről bővebb információ plébániánk honlapján található.
                            </li>
                            <li class="list-group-item border-0 px-0">
                                Idén is novemberben a péntek esti valamint a vasárnap 10:30-kor kezdődő szentmisét (továbbá: nov. 1.: esti, dec. 26. és ápr. 21. 10:30-as szentmisét) mindazon halottakért ajánljuk fel, akik neveit felírjuk a kihelyezett papírokra, és adományunkkal együtt borítékba téve leadhatunk a sekrestyében vagy a kihelyezett kosárba tehetünk.
                            </li>
                            <li class="list-group-item border-0 px-0">
                                <span>
                                    November 1-én (pénteken) Mindenszentek ünnepén szentmise lesz templomunkban 7-kor, 8-kor, 9-kor és este 6-kor. Az esti szentmise után imádkozunk elhunyt szeretteinkért. Mindenszentek ünnepe parancsolt ünnep.
                                </span>
                                <div class="pt-3 ps-sm-5">
                                    Mindenszentek ünnepén altemplomunk látogatható: 8-12-ig, ill. 14-től 17:30-ig.
                                </div>
                            </li>
                            <li class="list-group-item border-0 px-0">
                                <span>
                                    November 2-án (szombaton) Halottak napján szentmise lesz templomunkban 8-kor, valamint az altemplomban az ott nyugvókért 9-kor. Este 6-kor vasárnap előesti szentmisét tartunk szokott módon. Este 7-kor lesz szentmise minden elhunytért. A szentmise liturgikus zenéje: Mozart: Requiem.
                                </span>
                                <div class="pt-3 ps-sm-5">
                                    Halottak napján altemplomunk látogatható: 9-12-ig, ill. 15:30- 17:30-ig.
                                </div>
                            </li>
                            <li class="list-group-item border-0 px-0">
                                Szeretettel ajánlok egy zarándoklatot nov. 23-ra, melynek lekivezetője leszek. A programban Majk és Heiligenkreuz felkeresése szerepel. Részletek plébániánk honlapján találhatóak.
                            </li>
                        </ul>
                    </article>
                    <article class="d-flex flex-column gap-3">
                        <h2 class="main-heading-2">
                            <strong>
                                Aktuális kiadványaink itt elérhetőek:
                            </strong>
                        </h2>
                        <h3 class="sub-1-heading-3 sub-1-heading-3-color">
                            <strong>
                                A nyári időszakban kiadványaink megjelenése szünetel.
                            </strong>
                        </h3>
                        <div class="sub-1-heading-3">
                            <a href="#" class="link-primary">
                                <strong>
                                    Plébánia lap
                                </strong>
                            </a>
                        </div>
                        <div class="sub-1-heading-3">
                            <a href="#" class="link-primary">
                                <strong>
                                    Veled Vagyunk
                                </strong>
                            </a>
                        </div>
                    </article>
                </section>
                <section class="px-3 px-md-5 pt-5 text-center d-flex flex-column gap-5">
                    <article class="d-flex flex-column gap-3">
                        <h2 class="main-heading-2">
                            <strong>
                                A honlap tartalmai
                            </strong>
                        </h2>
                        <h3 class="sub-1-heading-3 sub-1-heading-3-color">
                            <strong>
                                További információkért kattintson a képre!
                            </strong>
                        </h3>
                    </article>
                    <article class="container-fluid px-0">
                        <div class="row row-cols-1 row-cols-md-3">
                        <?php
                            foreach($this->navigacioView() as $key => $nav) {
                                if(isset($nav) && $nav != "kezdőlap") {
                                    echo '
                                        <div class="col '.($key != count($this->navigacioView()) - 1 ? "pb-5 pb-md-4" : "").'">
                                            <a href="#" class="img-link-position-main text-center">
                                                <div class="ratio ratio-1x1">
                                                    <picture>
                                                        <img src="./assets/imgs/pics/minta.jpg" alt="'.$nav.'" class="w-100 h-100">
                                                    </picture>
                                                </div>
                                                <div class="img-link-position-sub-1">
                                                    <span class="img-link-position-sub-2">
                                                        '.(ucfirst($nav)).'
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
                <section class="px-3 px-md-5 pt-5 text-center d-flex justify-content-center d-lg-none">
                    <article class="d-flex flex-column gap-3 align-items-center text-center">
                        <div>
                            <span>
                                © 2022  Szent Adalbert Plébánia, 1119 Budapest, Etele út 3.
                            </span>
                        </div>
                        <div>
                            Sütik
                        </div>
                    </article>
                </section>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>