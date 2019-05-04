<?php

function PrintStr($jml) {

    for($i=0; $i<$jml; $i++) {

        $strarr[$i] = md5($i);
        //agar tidak ada string sama maka 
        //tiap character yang dihash harus berbeda

    }

    print_r($strarr);

}

echo "input jumlah output : ";
$jmlstr = trim(fgets(STDIN));


PrintStr($jmlstr);
