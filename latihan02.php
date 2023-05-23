<?php
    $dta[0]["NAMA"] = "jeni";
    $dta[0]["TGL_LAHIR"] = "2004-04-10";
    $dta[0]["JKEL"] = "p";
    $dta[0]["ALAMAT"] = "denpasar";
    $dta[0]["HOBI"] = "tidur";

    $dta[1]["NAMA"] = "eka";
    $dta[1]["TGL_LAHIR"] = "2003-10-24";
    $dta[1]["JKEL"] = "p";
    $dta[1]["ALAMAT"] = "karangasem";
    $dta[1]["HOBI"] = "healing";

    $dta[2]["NAMA"] = "nadya";
    $dta[2]["TGL_LAHIR"] = "2003-12-9";
    $dta[2]["JKEL"] = "p";
    $dta[2]["ALAMAT"] = "denpasar";
    $dta[2]["HOBI"] = "healing";

    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);