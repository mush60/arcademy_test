<?php

function PrintStr($jml) {

    for($i=0; $i<$jml; $i++) {

        $strarr[$i] = md5(rand(1,1000));

        // echo strlen($strarr[$i])."\n";

    }

    print_r($strarr);


}

echo "input jumlah output : ";           //get input from user
$jmlstr = trim(fgets(STDIN));


PrintStr($jmlstr);
