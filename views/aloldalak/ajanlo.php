<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajánló</title>
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
                                Ajánló
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
                            foreach($this->ajanloNav() as $key => $nav) {
                                if(isset($nav)) {
                                    echo '
                                        <div class="col '.($key != count($this->ajanloNav()) - 1 ? "pb-5 pb-md-4" : "").'">
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
                                Évvégi hálaadásra - Szilveszter este
                            </strong>
                        </h2>
                        <h3 class="sub-1-heading-3 sub-1-heading-3-color">
                            <strong>
                                Szerző: Szénégető István-Barnabás
                            </strong>
                        </h3>
                    </article>
                    <article class="d-flex flex-column gap-3">
                        <p>
                            December 31-e, óesztendő napja, a római kalendáriumban Szent Szilveszter pápa ünnepe. Római születésű volt, s majdnem huszonkét évig, 314-től 335-ig volt pápa. A szerény Szilveszter pápa alakja a legendák fényében világtörténelmileg egyedülálló jelentőségű, mert ő volt az a pápa, aki Nagy Konstantinnal együtt történelmet formált.
                        </p>
                        <p>
                            Liturgikus szempontból karácsony nyolcadában vagyunk. A keresztény világ a Szent Karácsony napját követő nyolc napban -összefüggő, egyetlen ünnepként- a megtestesülés titkáról elmélkedik, a Betlehemben megszületett Jézust ünnepli, imádja. Az emberbarát Istent, aki Mária és József szeretetében, törékeny valójában ennyire közel jött hétköznapjainkhoz, az angyalok kórusával tovább dicsőítjük: Dicsőség a magasságban Istennek, és a földön békesség minden jóakaratú embernek.
                        </p>
                        <p>
                            December 31-e a ugyanakkor a polgári év utolsó napja. Katolikus templomainkban ezen a napon az esti órákban az év utolsó szentmiséjére jövünk össze hálát adni. Sok helyen hagyomány, hogy az év utolsó napján közösen mondunk hálát Istennek az egész évben kapott áldásokért. Van, ahol gyakorlattá tették azt is, hogy a köszönetet nem csak általánosságban fogalmazzák meg, hanem előbb összegzik az elmúlt évi eseményeket, tapasztalatokat, megpróbálják levonni a tanulságokat és úgy állnak Isten elé köszönetet mondani. A közösség apraja-nagyja, gyermekek és felnőttek, külön és együtt is az élő Úr elé térdelnek, hogy hálát adjanak. Elénekeljük a Te Deumot, a Szentháromságot dicsérő himnuszt. Valóban, nemcsak a szív igénye ezen a napon, hanem kötelességünk is, hogy köszönetet mondjunk Istennek és dícsérjük Őt, aki örökre velünk van az időben és őrködik az emberiség felett irgalmas szeretetének hűségével.
                        </p>
                        <p>
                            Az év elején elindultunk sokféle tervvel. Menet közben találkoztunk sokféle akadállyal. Remélhetőleg van, amit sikerült megvalósítanunk a tervekből, s valószínűleg van több minden, amit nem sikerült. Hogyan értékeljük ennek az évnek a sikereit, eredményeit, és hogyan magyarázzuk a kudarcait?
                        </p>
                        <p>
                            Olyan jellemző, hogy ilyenkor ki hogyan beszél erről. Vannak emberek, akik a legtermészetesebb módon dicsekszenek. Mutogatják a teljesítményeiket. Munkájuknak a gyümölcsét. "Ezzel a két kézzel hoztam létre mindent"- mondogatják. És azt a két kezet vajon ki adta? Ki őrizte meg egy éven át egészségben, épségben? Az Isten, aki szeret és akar téged. Mert terve van veled. Van, aki ma panaszkodik. Másokat vádol. Van aki sajnáltatja magát. Vannak, akik magyarázkodnak. Megmagyarázzák, hogy mit miért nem végeztek el idén és mi miért nem sikerült.
                        </p>
                        <p>
                            <strong>Mi hogyan értékeljük ezt a mögöttünk levő esztendőt?</strong> Hogyan zárjuk ezt az évet? Helyesen értékelni csak az tud, aki a teljes valóságot látja. A teljes valóságot csak az látja, aki ismeri az élő Istent, és látja, számon tartja az Ő cselekedeteit. Aki ismeri az élő Istent, és látja az Ő cselekedeteit, az pedig önkéntelenül is megalázza magát előtte, és kitüntetésnek tartja, hogy előtte alázhatja meg magát. Innen fakad az imádás, a hála, a dicsőítés. Ha most vissztekintünk az elmúlt évre, lássuk meg benne az Úr jótéteményeit. Köszönjük meg a mindennapi kenyeret. De a mindennapi Igét is, mivel táplált. A szentmiséket, a szentségek kegyelmeit, az Egyházat, a közösséget. Köszönjük meg a munkát, az egészséget, de a próbákat és nehéz perceket is. Köszönjük meg Istennek nagy ajándékát: a testvért! A jó szót, bátorítást, a mosolyt, amit egymásnak adthattunk. S adjak hálát, hogy másnak megbocsáthattam és hogy nekem is megbocsátottak! Istené legyen minden dicsőség! Szívből dicsőítsük, áldjuk és magasztalják Őt. Múltunkat bízzuk irgalmára, jelenünket szeretetébe, jövőnket pedig gondviselésére.
                        </p>
                        <p>
                            Ma este mindnyájunknak el kell döntenünk, <strong>mit viszünk tovább az új esztendőbe</strong>, és mi az, amit hagyunk veszni ezzel az elmúló évvel. Jó lenne, ha minél kevesebb terhet vinnénk át a következő esztendőre. Nagyon fontos lenne az, hogy semmi feleslegeset ne vigyünk magunkkal. Például semmi sérelmet, keserűséget, bosszúvágyat, megbántottságot, haragot. Ma este mindezt lerakhatjuk az Úr Jézus lábaihoz. Mindezt szívből megbocsáthatjuk azoknak, akik ebben az évben bármit is vétettek ellenünk. Minden kárt, kellemetlenséget, keserűséget szívből megbocsáthatunk.
                        </p>
                        <p>
                            De szilveszter estéjén <strong>előre is kell tekinteni</strong>, célokkal, tervekkel kell belépni az új esztendőbe. Holnap is feladatok várnak rám. Fényt, szeretetet kell vinnem egy különös világba. Michaella nővér négysorosát idézem. Címe: Kockacukor. <em>Valahol ízetlen, keserú az élet, / Az isteni Jóság oda dob be téged. / Zümmögsz, kockacukor, mint áldozati dal, / S elfogysz. De édesül a keserű ital.</em>
                        </p>
                        <p>
                            <strong>Forrás: https://zarandok.ma</strong>
                        </p>
                    </article>
                </section>
                <section class="px-3 px-md-5 pt-5 text-center d-flex flex-column gap-5">
                    <article class="d-flex flex-column gap-3">
                        <h2 class="main-heading-2">
                            <strong>
                                Egy mindet lelket megérintő Te Deum, érdemes meghallgatni!
                            </strong>
                        </h2>
                        <div class="d-flex justify-content-center text-center">
                            <div class="w-100">
                                <div class="ratio ratio-16x9">
                                    <iframe src="//www.youtube-nocookie.com/embed/c9_aw2VhTEQ?wmode=opaque" title="YouTube video" allowfullscreen loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>
                <section class="px-3 px-md-5 pt-5 text-center d-flex flex-column gap-5">
                    <article class="d-flex flex-column gap-3">
                        <h2 class="main-heading-2">
                            <strong>
                                Hálaadás templomunkban 2023.12.31-én
                            </strong>
                        </h2>
                        <h3 class="sub-1-heading-3 sub-1-heading-3-color">
                            <strong>
                                Te Deum a misén résztvevő közösségünk előadásában
                            </strong>
                        </h3>
                        <div class="d-flex justify-content-center text-center">
                            <div class="w-100">
                                <div class="ratio ratio-16x9">
                                    <iframe src="//www.youtube-nocookie.com/embed/MQFtSWg7bJ8?wmode=opaque" title="YouTube video" allowfullscreen loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>
                <section class="px-3 px-md-5 pt-5 text-center d-flex flex-column gap-5">
                    <article class="d-flex flex-column gap-3">
                        <div class="d-flex justify-content-center">
                            <div class="w-100">
                                <picture>
                                    <img src="./assets/imgs/pics/minta.jpg" alt="szajkó" class="w-100">
                                </picture>
                            </div>
                        </div>
                        <p>
                            <strong class="text-primary">Laci atya is ott volt!</strong>
                        </p>
                        <div class="d-flex justify-content-center">
                            <div class="w-100">
                                <picture>
                                    <img src="./assets/imgs/pics/minta.jpg" alt="szajkó" class="w-100">
                                </picture>
                            </div>
                        </div>
                        <p>
                            <a href="https://mediaklikk.hu/video/2023/05/27/csiksomlyoi-punkosdi-bucsu-kozvetitese-2023" class="link-primary">
                                <strong>A Duna TV 2023. évi csiksomlyói búcsúról készült műsora itt megtekinthető.</strong>
                            </a>
                        </p>
                    </article>
                </section>
                <?php include(__DIR__ . "/../copyright.php") ?>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>