<?php

namespace controllers;

class UserController
{
    use \traits\Utilities;

    function kezdolapView()
    {
        $this->getViewFile("kezdolap");
    }

    function plebaniaView()
    {
        $this->getViewFileSub("plebania");
    }

    function vedoszentjeinkView()
    {
        $this->getViewFileSub("vedoszentjeink");
    }

    function aktualitasokView()
    {
        $this->getViewFileSub("aktualitasok");
    }

    function rolunkView()
    {
        $this->getViewFileSub("rolunk");
    }

    function hiteletView()
    {
        $this->getViewFileSub("hitelet");
    }

    function elerhetosegunkView()
    {
        $this->getViewFileSub("elerhetosegunk");
    }

    function ajanloView()
    {
        $this->getViewFileSub("ajanlo");
    }

    function mediaView()
    {
        $this->getViewFileSub("media");
    }

    function fotoalbumokView()
    {
        $this->getViewFileSub("fotoalbumok");
    }

    function errorView()
    {
        $this->getViewFileSub("error");
    }

    function navigacioView()
    {
        $nav = ["kezdolap" => "kezdőlap", "plebania" => "plébánia, templom, urnatemető", "vedoszentjeink" => "védőszentjeink", "aktualitasok" => "aktualitások", "rolunk" => "rólunk", "hitelet" => "hitélet", "elerhetosegunk" => "elérhetőségünk", "ajanlo" => "ajánló", "media" => "média megjelenéseink", "fotoalbumok" => "fotóalbumok"];

        return $nav;
    }

    function vedoszentekNav()
    {
        $vedoszentek = ["https://mindszentyalapitvany.hu/szentte-avatas/magyar-szentek/szent-adalbert-puspok-es-vertanu-az-esztergomi-budapesti-foegyhazmegye-vedoszentje" => "Szent Adalbert", "https://www.mindszentyalapitvany.hu/szentte-avatas/magyar-boldogok/boldog-meszlenyi-zoltan-puspok-es-vertanu" => "Boldog Meszlényi Zoltán"];

        return $vedoszentek;
    }

    function aktualitasokNav()
    {
        $aktualitasok = ["?page=hirdeteseinkView" => "Hírdetéseink", "https://evangelium.katolikus.hu/" => "Napi evangélium", "https://www.magyarkurir.hu/ferenc-papa/altalanos-kihallgatas-katekezis" => "Aktuális pápai katekézis", "https://ferenc2023.hu/hu/galeria" => "Pápalátogatás fotogalériája"];

        return $aktualitasok;
    }

    function rolunkNav()
    {
        $lelkipasztoraink = ["https://www.esztergomi-ersekseg.hu/papsag/kelemen-laszlo" => "Plébániai kormányzó", "https://www.esztergomi-ersekseg.hu/papsag/musits-antal" => "Nyugalmazott plébános"];

        $plebaniank = ["https://www.esztergomi-ersekseg.hu/plebaniak/szent-adalbert-plebania-budapest-lagymanyos/#tortenet" => "Szent Adalbert Plébánia", "https://mega.nz/file/BsFjQbpJ#AMBG2d2iVHdwCfkJBTNFUkObp1CThoEWVl2k7rtJ60A" => "Boldog Meszlényi Zoltán Templom", "?page=urnatemetoView" => "Altemplom és urnatemető", "?page=kapolnainkView" => "SZERKESZTÉS ALATT: Kápolnáink"];

        $kozossegeink = ["?page=boldogGizellaTarsulatView" => "Boldog Gizella Társulat", "?page=szentAdalbertMisszioAlapitvanyView" => "Szent Adalbert Misszió Alapítvány", "?page=lisztFerencKorusView" => "Liszt Ferenc Kórus", "?page=hazasHittanView" => "Házas Hittan", "https://www.facebook.com/1108SzentTarziciuszCserkeszcsapat" => "1108.sz Szent Tarziciusz cserkészcsapat"];

        return [$lelkipasztoraink, $plebaniank, $kozossegeink];
    }

    function hiteletNav()
    {
        $hitelet = ["?page=szentsegekView" => "Szentségek", "?page=szentelmenyekView" => "Szentelmények", "?page=mozgoUnnepekAltalanosInformaciokView" => "Mozgó ünnepek és általános információk", "?page=szentsegekFelveteleView" => "Szentségek felvétele plébániánkon", "?page=meggondolasraView" => "Meggondolásra", "?page=konyorgesekView" => "Könyörgések"];

        return $hitelet;
    }

    function ajanloNav()
    {
        $ajanlo = ["https://katolikus.hu/" => "Magyar Katolikus Egyház", "https://www.esztergomi-ersekseg.hu/" => "Esztergom-Budapesti Főegyházmegye", "https://www.magyarkurir.hu/" => "Magyar Kurír", "https://bizdramagad.hu/kuldetesunk/" => "Bízd rá magad", "https://evangelium.katolikus.hu/" => "Napi evangélium", "https://www.katolikusradio.hu/" => "Katolikus Rádió", "https://katolikus.tv/" => "Katolikus TV - EWTN", "https://www.mariaradio.hu/" => "Mária Rádió", "https://www.szentistvanradio.hu/" => "Szent István Rádió", "https://www.facebook.com/777blog.hu/" => "A hit nem magánügy", "https://www.vaticannews.va/hu.html" => "Vatikáni Hírek", "https://sites.google.com/view/szentadalbertinfo" => "Emlékeink"];

        return $ajanlo;
    }

    function fotoalbumokNav()
    {
        $fotoalbumok = [
            "https://mega.nz/folder/MkdEwDIS#YwttZxsZmVEy3X_SEHKNEA" => "Mindenszentek (2024.11.01.)",
            "https://mega.nz/folder/R0NBlABC#DpRZuCkM08Fi4Fuz0nChog" => "Templomszentelés 10. évfordulója (2024.10.31.)",
            "https://mega.nz/folder/11c10bAI#MnNnI53rzpb4J-jo2li8lw" => "Veni Sancte - hitoktatók (2024.09.09.)",
            "https://mega.nz/folder/4k9ygAwS#4GuSL-sS7EyPE8jvr650RQ" => "Szent István nap (2024.08.20.)",
            "https://mega.nz/folder/599gBCyS#EGoMP7yo3WHaPSkpx-jvSg" => "Nagyboldogasszony (2024.08.15.)",
            "https://mega.nz/folder/x5FVwSxK#z-tuL_FtYDRwQZZ3aL1G0g" => "Tóni atya 78 éves (2024.07.07.)",
            "https://mega.nz/folder/4wEzmSzI#vo7_r5zD4sLbEvLvAOnR5w" => "Szent Péter és Pál (2024.06.29.)",
            "https://mega.nz/folder/d49VXIyL#YXRz3AR--owJbwUSlWLvHQ" => "Tóni atya Aranymiséje (2024.06.21.)",
            "https://mega.nz/folder/UhViDKIK#BHxnnuCo6VENZ02diqxTmw" => "Te Deum Hitoktatók (2024.06.11.)",
            "https://mega.nz/folder/Bw9Q0YRB#_S5zk2Ce-7DdJ56FekJkDA" => "Úrnapja (2024.06.02.)",
            "https://mega.nz/folder/Q9MzDTID#ChdzcZ45o7YJDm-r-pVLyQ" => "Pünkösdvasárnap (2024.05.19.)",
            "https://mega.nz/folder/QplAjZCJ#mstVuvThdVWL4cnz9VyvXw" => "Elsőáldozás (2024.04.28.)",
            "https://mega.nz/folder/d8k0yJiY#4E1zeuhKPNcXaQfdTskE0Q" => "Plébánia búcsú (2024.04.23.)",
            "https://mega.nz/folder/g8MiRbqI#uoDVVuyxwu00ogrmtD8z-Q" => "Húsvét (2024.03.31.)",
            "https://mega.nz/folder/k893HQgB#167FA2w49GD-emLXstY7Iw" => "Nagyszombat (2024.03.30.)",
            "https://mega.nz/folder/E4tg1aib#8lj3kM-QKKnAisDTgFY8rA" => "Nagypéntek (2024.03.29.)",
            "https://mega.nz/folder/10c2mZiD#S9HlxYg_VjVKaLwWSpckUg" => "Virágvasárnap (2024.03.24.)",
            "https://mega.nz/folder/UoMCGISY#XmEaYIBVWnI_VaMosKR4QQ" => "Ünnepi szentmise (2024.03.04.)",
            "https://mega.nz/folder/YodTkKiD#ZzZXLWO6U9HscyAlnTDuYQ" => "Szentmise és zenés áhitat az imperfectum együttessel (2024.03.03.)",
            "https://mega.nz/folder/Q8FgHbRC#9glJ2euD8z_yfPm3Q_4lFw" => "Gyertyaszentelő Boldogasszony (2024.02.02.)",
            "https://mega.nz/folder/5o1Bia7a#ky3mGfeik6VhiFO8rwgx7w" => "Vízkereszt (2024.01.06.)",
            "https://mega.nz/folder/Exk2SCIL#UKinnAyfrEK3FL7-zuNtCA" => "Mária Isten anyasága ünnepe (2024.01.01.)",
            "https://mega.nz/folder/8hlGlZpJ#wUtOqfjQLOwLrmUjkZ8dFA" => "Szent Család ünnepe (2023.12.31.)",
            "https://mega.nz/folder/dtEWzKhR#r1fJ6e9D7u2TUzhkspADow" => "Pásztorjáték (2023.12.24.)",
            "https://mega.nz/folder/t88SUSJY#Mxj9FoIg81JBApOyuU5kiA" => "Szent Erzsébet ünnepe (2023.11.19.)",
            "https://mega.nz/folder/Q98X0AaI#RPC3Qvd6PFRD3bKXsiordg" => "Mindenszentek - esti mise (2023.11.01.)",
            "https://mega.nz/folder/lktznKKZ#BUUkRvioezoAZKFhhbj7wQ" => "Mindenszentek - 9 órás mise (2023.11.01.)",
            "https://mega.nz/folder/Uh1BwJTS#EWxSppM7iY5vJbEjcLgKAQ" => "Templomszentelés 9. évfordulója (2023.10.31.)",
            "https://mega.nz/folder/Q90kgAZL#Z1VsuwwM71MvilcO6ikmcg" => "Veni Sancte Domonkos Pál Péter Általánosiskola (2023.09.08.)",
            "https://mega.nz/folder/RwMgEaxZ#j-b2_3F3Ce6mtNtpvqPPyQ" => "Szent István nap (2023.08.20.)",
            "https://mega.nz/folder/kgViTZgC#yyavfx4Eov6yA5N-_qnCZg" => "Nagyboldogasszony (2023.08.15.)",
            "https://mega.nz/folder/x58AEJ4J#rwiXgAB1lr4wqIxvotagkA" => "Tóni atya 77 éves (2023.07.07.)",
            "https://mega.nz/folder/IgsV3bCR#hSdv9ZInTek7Ra_mCnVQ9g" => "Szent László nap (2023.06.27.)",
            "https://mega.nz/folder/0ht3wC4D#szozvqduagBUyPS-HXzNtA" => "Te Deum hitoktatók (2023.06.13.)",
            "https://mega.nz/folder/pw9EEbpb#xqkUaQ7GbLuk3X6jZdznTg" => "Te Deum Domonkos Pál Péter Általánosiskola (2023.06.13.)",
            "https://mega.nz/folder/h1MwjDRR#bZcVaNdwQBsEJvZdzMu3Mw" => "Úrnapja (2023.06.11.)",
            "https://mega.nz/folder/s9kRDDxJ#cGB9tKXkcd9fN0tksWHs_g" => "Pünkösdvasárnap (2023.05.28.)",
            "https://mega.nz/folder/EklkXZrA#eadyKm0IOdHgS7XIn-fGqA" => "Elsőáldozás (2023.05.14.)",
            "https://mega.nz/folder/5lEFxKQK#DkPqxpvMVOQ7WfIN790SVg" => "Ünnepi szentmise (2023.04.24.)",
            "https://mega.nz/folder/1h11VQLT#VALTQP59yysLeCV9C163bw" => "Húsvét (2023.04.09.)",
            "https://mega.nz/folder/JwE22ZbK#Xa_pgmdXEht7UXCmjApAZQ" => "Nagyszombat (2023.04.08.)",
            "https://mega.nz/folder/4pczgSbB#JgoSZAIetuNdAV9fgGL9yQ" => "Nagypéntek (2023.04.07.)",
            "https://mega.nz/folder/9xsVGQKL#K_vqPSosBXscGvCRF9_QMw" => "Nagycsütörtök (2023.04.06.)",
            "https://mega.nz/folder/g0VHiLTS#YeS5keeK7caKpXKDvND2bw" => "Virágvasárnap (2023.04.02.)",
            "https://mega.nz/folder/Vgd0zSqY#evYYHaHjrKZfixyxu-xLDg" => "Laci atya 36 éves (2023.03.30.)",
            "https://mega.nz/folder/h5Mw3KLQ#73fdS41wQoZ4Dm2mD9DVXw" => "Az első koreai mise (2023.03.18.)",
            "https://mega.nz/folder/AkFSwK4Y#N119EMbX7XGY9Len9H2ppw" => "Nagyböjt péntek esti szentmise és zenés imaóra az imperfectum együttessel (2023.02.24.)",
            "https://mega.nz/folder/hg0VjBBT#g6TSiWlfgAmkYSFRoDu9kQ" => "Gyertyaszentelő Boldogasszony (2023.02.02.)",
            "https://mega.nz/folder/t91lxKiC#Ba_-5RTxPapN4EQwtb51ng" => "Kis Jézus köszöntése (2022.12.24.)",
            "https://mega.nz/folder/V9diGQgL#4lq-cnGGIezOT_OgCasXbw" => "Mindenszentek (2022.11.01.)",
            "https://mega.nz/folder/s9NGSY7S#X5y_u28zmGXQUvocZfCE1g" => "Templomszentelés 8. évfordulója (2022.10.31.)"
        ];

        return $fotoalbumok;
    }
}
