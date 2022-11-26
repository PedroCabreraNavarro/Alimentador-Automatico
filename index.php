<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cara Remake</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
$link = new mysqli("localhost", "id19883843_pedrillo", "K8KHxONsrnz0A#2%", "id19883843_datos_alimentador");
foreach ($link->query('SELECT * from alimentador') as $row){
?>
<div class="container-fluid p-5 bg-success text-white text-center">
  <h1>Alimentador RB</h1>
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>Estatus Actual</h3>
      <p>Humedad: <?php echo$row['humedad']?> %</p>
      <p>Temperatura: <?php echo$row['temperatura']?>°C</p>
      <p>Hora actual de alimentacion: <?php echo$row['hora_alimentacion']?></p>
      <p>Velocidad actual de alimentacion: <?php echo$row['velocidad']?></p>
      <p>Cantidad Actual: <?php echo$row['cantidad']?> gramos.</p>      
      <p>Presencia: <?php echo$row['presencia']?></p>
      <p>Almacenamiento: </p>
      <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width:<?php echo$row['almacenamiento']?>%"><?php echo$row['almacenamiento']?>%</div>
        </div>
    </div>
    <div class="col-md-8">
        <h3>Programacion de horarios</h3>
        <form method='POST' action='postmethis.php'>
        <h5>Velocidad:</h5>
<div class="form-check">
  <input type="radio" class="form-check-input" id="rapida" name="velocidad" value="Rapida" checked>Rapida
  <label class="form-check-label" for="rapida"></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="media" name="velocidad" value="Media">Media
  <label class="form-check-label" for="media"></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="lenta" name="velocidad" value="Lenta">Lenta
  <label class="form-check-label" for="lenta"></label>
</div>

    <h5>Cantidad:</h5>
<div class="form-check">
  <input type="radio" class="form-check-input" id="250" name="cantidad" value="250" checked>250 Gramos
  <label class="form-check-label" for="250"></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="500" name="cantidad" value="500">500 Gramos
  <label class="form-check-label" for="500"></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="750" name="cantidad" value="750">750 Gramos
  <label class="form-check-label" for="750"></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="1000" name="cantidad" value="1000">1000 Gramos
  <label class="form-check-label" for="1000"></label>
</div>

    <h5>Hora:</h5>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="00:00" value="00:00" checked/>
  <label class="form-check-label" for="00:00">00:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="01:00" value="01:00" />
  <label class="form-check-label" for="01:00">01:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="02:00" value="02:00" />
  <label class="form-check-label" for="02:00">02:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="03:00" value="03:00" />
  <label class="form-check-label" for="03:00">03:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="04:00" value="04:00" />
  <label class="form-check-label" for="04:00">04:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="05:00" value="05:00" />
  <label class="form-check-label" for="05:00">05:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="06:00" value="06:00" />
  <label class="form-check-label" for="06:00">06:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="07:00" value="07:00" />
  <label class="form-check-label" for="07:00">07:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="08:00" value="08:00" />
  <label class="form-check-label" for="08:00">08:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="09:00" value="09:00" />
  <label class="form-check-label" for="09:00">09:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="10:00" value="10:00" />
  <label class="form-check-label" for="10:00">10:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="11:00" value="11:00" />
  <label class="form-check-label" for="11:00">11:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="12:00" value="12:00" />
  <label class="form-check-label" for="12:00">12:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="13:00" value="13:00" />
  <label class="form-check-label" for="13:00">13:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="14:00" value="14:00" />
  <label class="form-check-label" for="14:00">14:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="15:00" value="15:00" />
  <label class="form-check-label" for="15:00">15:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="16:00" value="16:00" />
  <label class="form-check-label" for="16:00">16:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="17:00" value="17:00" />
  <label class="form-check-label" for="17:00">17:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="18:00" value="18:00" />
  <label class="form-check-label" for="18:00">18:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="19:00" value="19:00" />
  <label class="form-check-label" for="19:00">19:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="20:00" value="20:00" />
  <label class="form-check-label" for="20:00">20:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="21:00" value="21:00" />
  <label class="form-check-label" for="21:00">21:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="22:00" value="22:00" />
  <label class="form-check-label" for="22:00">22:00 hrs</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="hora" id="23:00" value="23:00" />
  <label class="form-check-label" for="23:00">23:00 hrs</label>
</div>
<p>           </p>
<button class="btn btn-primary" type="submit">Restablecer</button>
</form>
<p>           </p>
<h3>Galeria de monitoreo</h3>
<a href='https://carafedderremake.000webhostapp.com/galeria.php'>Galeria</a>
</div>
<p>           </p>
<p>           </p>
<p>           </p>
<p>           </p>
<p>           </p>
<p>           </p>
<?php
}

?>
