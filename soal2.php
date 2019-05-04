<?php

function ValidasiForm($usrnm, $pass) {

    if ($usrnm != null && $pass != null) { //check apakah inputan null 
        if (strlen($usrnm)>=8 && strlen($pass)>=8) { // check apakah panjang inputan tidak lebih kecil dari 8
            if (!preg_match('@[A-Z]@', $pass) || !preg_match('@[a-z]@', $pass) ||
            !preg_match('@[0-9]@', $pass) || !preg_match('@[^\w]@', $pass)) { //regex untung mengeck apakah terdapat huruf besar, kecil, angka,dan spesial karakter
                echo "Fail Weak Password\n";
            }
            else {
                echo "Success!! You Have strong password\n";
            }
        }
        else {
            echo "Username or password must be 8 character\n";
            exit();
        }
    }
    else {
        echo "username or password cannt be null\n";
        exit();
    }


}

echo "input username : ";           //get input from user
$username = trim(fgets(STDIN));

echo "password : ";                 //get input from user
$password = trim(fgets(STDIN));


ValidasiForm($username,$password);      //memanggil fungsi validasi dengap paremeter inputan user