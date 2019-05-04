<?php

function ReturnJson() {
    //menginisialisasi defaul object variabel dengan stdClass agar tidak terjadi eror warning
    if (!isset($myData)) 
    $myData = new stdClass();

    //mengisi var $myData dengan value-value yang di butuhkan
    $myData->nama = "Muhammad Sholeh";
    $myData->alamat = "Kabupaten Siwa, Sulawesi Selatan";
    $myData->hobby = array("Nonton", "Membaca", "Berpikir");
    $myData->merit = false;
    $myData->school = [
        'HighScool' => 'SMAN 1 SAWERIGADI', 
        'University' => 'HALU OLEO UNIVERSITY'
    ];
    $myData->skill = array(

                [
                    'Manajemen' => 'Sedang',
                    'Disiplin' => 'Sedang'
                ],
                [
                    'Desain' => array('Photoshop', 'Inkscape'),
                    'Programming' => array('PHP', 'Java')
                ]

            );
    
    //$mengconvert $myData tipe data object kedalam string JSON $myJson
    $myJson = json_encode($myData);

    //memprint variable $myJson yang sudah berupa string Json
    echo $myJson."\n";
}

ReturnJson();



