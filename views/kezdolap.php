<!doctype html>
<html lang="en">

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
            <main class="col py-5 d-flex flex-column gap-5">
                <header class="text-center pb-5">
                    <h1 class="d-flex flex-column gap-3 text-center">
                        <span>
                            <i>Szeretettel köszöntünk honlapunkon!</i>
                        </span>
                        <span class="main-h1-center">
                            <strong>Szent Adalbert Plébánia</strong>
                        </span>
                        <span class="pt-3">
                            <strong>Boldog Meszlényi Zoltán Templom</strong>
                        </span>
                    </h1>
                </header>
                <?php
                    for($i = 1; $i <= 10; ++$i) {
                        echo "
                            <section>
                                <article>
                                    <p>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore error unde, adipisci pariatur eveniet iure cum, sit maiores distinctio deserunt ullam nobis similique, possimus commodi! Earum optio nesciunt aut incidunt distinctio natus neque? Laborum, eum voluptas. Animi voluptatem eligendi id maiores, error ipsum molestias?
                                    </p>
                                </article>
                            </section>
                        ";
                    }
                ?>
            </main>
        </div>
        <!-- teljes oldal row vége -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>