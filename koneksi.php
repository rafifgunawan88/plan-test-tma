<?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $database = "plantest";

    $koneksi = mysqli_connect($localhost, $username, $password, $database) or die ("Gagal Terhubung ke Database");

