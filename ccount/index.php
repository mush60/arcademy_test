<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Quick Count</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
    <?php 
      
      include 'config.php';

      $data = mysqli_query($koneksi,"select * from kandidat");

      while($d = mysqli_fetch_array($data)){

    ?>

    

    <div class="container m-t lessmar">
      <div class="panel panel-default lessmar">
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-4 col-md-3">
              <a href="#" class="thumbnail lessmar">
                <img style="height:100px;width:100px;" src="<?php echo $d['img_candidat']; ?>" alt="">
              </a>
            </div>
            <div class="tnama col-xs-8 col-md-6">
              <h2 class="lessmar"><?php echo $d['nama_kandidat']; ?></h2>
              <h3 class="lessmar">Perolehan suara : <?php echo $d['jml_vote']; ?></h3>
            </div>
            <div class="tnama col-xs-8 col-md-6">
              <a href="edd.php?id=<?php echo $d['id_kandidat']; ?>" type="button" class="btn btn-success">Vote</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php 
		}
		?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>