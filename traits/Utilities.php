<?php

namespace traits;

trait Utilities {
    function getViewFile($file) {
        include(__DIR__."/../views/".$file.".php");
    }

    function getViewFileSub($file) {
        include(__DIR__."/../views/aloldalak/".$file.".php");
    }
}