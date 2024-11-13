<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plébánia, templom, urnatemető</title>
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
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>