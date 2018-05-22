<?php

    namespace sudnonk\FuriganaTsukeruyatsu;

    require __DIR__ . "/Convert.php";

    $str = "abced";
    try {
        var_dump(Convert::convert($str));
    } catch (\InvalidArgumentException $e) {
        die($e->getMessage());
    }
