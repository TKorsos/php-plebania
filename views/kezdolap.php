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
    <!-- teljes oldal -->
    <div class="container-fluid">
        <div class="row">
            <!-- navigációs sáv -->
            <!-- MEGJEGYZÉS: bootstrap navigáció? -->
            <nav class="col-lg-3 text-center d-flex flex-column justify-content-between py-5 sticky-top nav-fix-height">
                <section>
                    <div>logó helye</div>
                    <div>
                        <strong>Szeretettel köszöntünk honlapunkon!</strong>
                    </div>
                </section>
                <section>
                    <ul class="list-group text-uppercase">
                        <?php
                            foreach($this->navigacioView() as $nav) {
                                echo '<li class="list-group-item border-0">'.$nav.'</li>';
                            }
                        ?>
                    </ul>
                </section>
                <section>
                    <div>
                        <span>
                            © 2022  Szent Adalbert Plébánia, 1119 Budapest, Etele út 3.
                        </span>
                    </div>
                    <div>
                        Sütik
                    </div>
                </section>
            </nav>
            <!-- tartalmi rész -->
            <main class="col pb-5 px-0 d-flex flex-column gap-5">
                <!-- MEGJEGYZÉS: háttérkép keresése -->
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

                <section class="px-3 px-md-5 text-center d-flex flex-column gap-5">
                    <article class="d-flex flex-column gap-3">
                        <!-- MEGJEGYZÉS: betűméret szrozók -> 2.5, 1.4, 1.7, 1.2 -->
                        <h2>
                            <strong>
                                Templom, plébánia, urnatemető egy helyen
                            </strong>
                        </h2>
                        <h3>
                            <strong>
                                AKADÁLYMENTESÍTETT
                            </strong>
                        </h3>
                        <div>
                            <strong>
                                1119 Budapest, Etele út 3
                            </strong>
                        </div>
                        <div>
                            <!-- MEGJEGYZÉS: link -->
                            <strong>
                                KATT IDE EGY VIRTUÁLIS SÉTÁÉRT A TEMPLOM KÖRÜL
                            </strong>
                        </div>
                    </article>
                    <article class="d-flex flex-column gap-5 d-md-flex flex-md-row gap-md-3">
                        <?php
                            // MEGJEGYZÉS: időpontok teszt jellegűek nem a valós!
                            for($i = 1; $i <= 3; ++$i) {
                                echo '
                                <div class="d-flex flex-column gap-5">
                                    <div>
                                        <picture>
                                            <img src="./assets/imgs/pics/minta.jpg" alt="szajkó'.$i.'" class="w-100">
                                        </picture>
                                    </div>
                                    <div class="d-flex flex-column gap-3">
                                        <h3>
                                            MISEREND
                                        </h3>
                                        <h3>
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
                
                <?php
                    for($i = 1; $i <= 10; ++$i) {
                        // bg-danger törölni!
                        echo '
                            <section class="px-3 px-md-5 bg-danger">
                                <article>
                                    <p>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore error unde, adipisci pariatur eveniet iure cum, sit maiores distinctio deserunt ullam nobis similique, possimus commodi! Earum optio nesciunt aut incidunt distinctio natus neque? Laborum, eum voluptas. Animi voluptatem eligendi id maiores, error ipsum molestias?
                                    </p>
                                </article>
                            </section>
                        ';
                    }
                ?>
            </main>
        </div>
        <!-- teljes oldal row vége -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>