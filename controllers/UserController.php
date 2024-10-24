<?php

namespace controllers;

class UserController {
    use \traits\Utilities;

    function kezdolapView() {
        $this->getViewFile("kezdolap");
    }
}