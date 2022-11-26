<!DOCTYPE html>
<html>
<head>
<head>
  <title>Galeria</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<div class="container-fluid p-5 bg-success text-white text-center">
  <h1>Galeria</h1>
</div>
<?php
$dir = 'imagenes/';
  if (is_dir($dir)){
    echo '<div class="flex-container">';
    $count = 1;
    $files = scandir($dir);
    rsort($files);
    foreach ($files as $file) {
      if ($file != '.' && $file != '..') {?>
        <div>
          <div class="card" style="width: 18rem;">
  <img src="<?php echo $dir . $file; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-title"><?php echo $file?></p>
  </div>
</div>
       </div>
<?php
       $count++;
      }
    }
  }
  if($count==1) { echo "<p>No images found</p>"; } 
?>
</body>
</html>