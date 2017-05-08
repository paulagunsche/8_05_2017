<?php include('header.php')?>
<section>

<?php
  $la_url = $_GET['url'];
  $json = file_get_contents($la_url);
  $datos = json_decode($json,true);
?>





<h3>PHP+GeoJSON:</h3>

<p>En esta página vemos el detalle de </p>

<h1><strong><?php print($datos['properties']['mag']);?></strong></h1>
<h2><strong><?php print($datos['properties']['place']);?></strong></h2>
<h3><strong><?php print($datos['properties']['type']);?></strong></h3>

<?php if($datos["properties"]["mag"] >=6 ){?>
  <div class="alert alert-danger"><p>¡EVACUACIÓN! Dirígete a zonas de seguridad.</p></div>
  <?php };?>
  <?php if($datos["properties"]["mag"] <=5.8 ){?>
    <div class="alert alert-danger"><p> Sismo de mediana intensidad</p></div>
  <?php };?>




<pre><?php print_r($datos)?></pre>


<div class="alert alert-danger">
<p>Genere una ficha donde se muestren los datos más importantes del movimiento sístimo que se observa en detalle.</p>
</div>

</section>
<?php include('footer.php');?>
