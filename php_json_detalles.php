<?php include('header.php')?>
<section>

<?php
  $la_url = $_GET['url'];
  $json = file_get_contents($la_url);
  $datos = json_decode($json,true);
?>

<h3>PHP+JSON:</h3>

<h5>En esta página vemos el detalle de los indicadores del <?php echo('Smart Citizen Kit '.$datos['id'].' instalado en '.$datos['data']['location']['city'].', '.$datos['data']['location']['country']);?>:</h5>

<p>El kit está instalado en:<strong><?php echo ($datos ["data"]["location"]["country"]);?>,<?php echo ($datos ["data"]["location"]["city"]);?></strong></P>
<p>La temperatura es:<strong><?php echo round ($datos ["data"]["sensors"][3]["value"],2);?></strong></p>
<p> La humedad ambiental es:<strong><?php echo round ($datos ["data"]["sensors"][2]["value"]);?></strong></p>
<p>La iluminación:<strong><?php echo round ($datos ["data"]["sensors"][0]["value"]);?></strong></p>
<p>El ruido: <strong><?php echo round ($datos ["data"]["sensors"][4]["value"]);?></strong></p>

<pre><?php print_r($datos)?></pre>

<div class="alert alert-danger">
<p>Genere una ficha donde se muestren los indicadores generados por los sensores del <?php echo('Smart Citizen Kit '.$datos['id']);?>.</p>
</div>

</section>
<?php include('footer.php');?>
