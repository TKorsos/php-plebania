<?php

namespace controllers;

class UserController {
    use \traits\Utilities;

    function kezdolapView() {
        $this->getViewFile("kezdolap");
    }

    function navigacioView() {
        $nav = ["kezdőlap", "plébánia, templom, urnatemető", "védőszentjeink", "aktualitások", "rólunk", "hitélet", "elérhetőségünk", "ajánló", "média megjelenéseink", "fotóalbumok"];

        return $nav;
    }
}