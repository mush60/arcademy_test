<?php

function CetakGambar($param) {

    for ($i=0; $i<$param; $i++) {
        for ($j=0; $j<$param; $j++) {

            if ($i == ceil($param/2)-1) {
                
                echo "* ";

            }
            else {
                if($j==0 || $j==$param-1) {

                    echo "* ";

                } 
                else {

                echo "= ";
                
                }
            }

        }
        
        echo "\n";

    }
}

echo "input username : ";           //get input from user
$baris = trim(fgets(STDIN));

if($baris%2 == 1 ) {
    CetakGambar($baris);
}
else {
    exit();
}



