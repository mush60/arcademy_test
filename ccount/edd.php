<?php

if ($_GET['id'] != null) {
        include 'config.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select * from kandidat where id_kandidat='$id'");
        while($d = mysqli_fetch_array($data)){
            

        $nvote = $d['jml_vote'];
        $upvote = $nvote + 1 ;

        mysqli_query($koneksi,"update kandidat set jml_vote='$upvote' where id_kandidat='$id'");
        
    }

    header("location:index.php");
}


