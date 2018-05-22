<?php

    namespace sudnonk\FuriganaTsukeruyatsu;

    $str = "abced";
    try {
        var_dump(Convert::convert($str));
    } catch (\InvalidArgumentException $e) {
        die($e->getMessage());
    }
