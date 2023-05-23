<?php
    $dta["NAMA"] = "jeni";
    $dta["TGL_LAHIR"] = "2004-04-10";
    $dta["JKEL"] = "p";
    $dta["ALAMAT"] = "denpasar";
    $dta["HOBI"] = "tidur";
    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);