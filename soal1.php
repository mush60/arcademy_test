<?php

function ReturnJson() {

    if (!isset($myData)) 
    $myData = new stdClass();

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
    $myJson = json_encode($myData);

    echo $myJson."\n";
}

ReturnJson();



