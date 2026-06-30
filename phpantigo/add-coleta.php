<?php

  if(isset($_POST['submit'])) 

  {
 
    include_once('config.php');

    $especie_id = $_POST['especie_id'];
    $coletor_id = $_POST['coletor_id'];
    $id_image = $_POST['id_image'];
    $accession = $_POST['accession'];
    $collector = $_POST['collector'];
    $addcoll = $_POST['addcoll'];
    $prefix = $_POST['prefix'];
    $number = $_POST['number'];
    $suffix = $_POST['suffix'];
    $colldd = $_POST['colldd'];
    $collmm = $_POST['collmm'];
    $collyy = $_POST['collyy'];
    $dateres = $_POST['dateres'];
    $detby = $_POST['detby'];
    $detdd = $_POST['detdd'];
    $detmm = $_POST['detmm'];
    $detyy = $_POST['detyy'];
    $country = $_POST['country'];
    $majorarea = $_POST['majorarea'];
    $minorarea = $_POST['minorarea'];
    $gazetteer = $_POST['gazetteer'];
    $locality_notes = $_POST['locality_notes'];
    $origindb = $_POST['origindb'];
    $observacoes_gerais = $_POST['observacoes_gerais'];
    $lat = $_POST['lat'];
    $ns = $_POST['ns'];
    $longitude = $_POST['longitude'];
    $ew = $_POST['ew'];
    $alt = $_POST['alt'];
    $altmax = $_POST['altmax'];
    $altres = $_POST['altres'];

    $result = mysqli_query($conexao, "INSERT INTO coleta(especie_id,coletor_id,id_image,accession,collector,addcoll,prefix,number,suffix,colldd,collmm,collyy,dateres,detby,detdd,detmm,detyy,country,majorarea,minorarea,gazetteer,locality_notes,origindb,observacoes_gerais,lat,ns,longitude,ew,alt,altmax,altres) VALUES ('$especie_id','$coletor_id','$id_image','$accession','$collector','$addcoll','$prefix','$number','$suffix','$colldd','$collmm','$collyy','$dateres','$detby','$detdd','$detmm','$detyy','$country','$majorarea','$minorarea','$gazetteer','$locality_notes','$origindb','$observacoes_gerais','$lat','$ns','$longitude','$ew','$alt','$altmax','$altres')");
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="">
  <title>Add | Coletor</title>
</head>

<body>
  <section>
    <div class="form-box">
      <div class="form-value">
        <form action="add-coleta.php" method="POST">
          <h2>Adicione uma coleta</h2>
          <div class="inputbox">
            <input type="text" name="especie_id" required>
            <label for="">ID da espécie</label>
          </div>
          <div class="inputbox">
            <input type="text" name="coletor_id" required>
            <label for="">ID do coletor</label>
          </div>
          <div class="inputbox">
            <input type="text" name="id_image" required>
            <label for="">ID da imagem</label>
          </div>
          <div class="inputbox">
            <input type="text" name="accession" required>
            <label for="">Accession</label>
          </div>
          <div class="inputbox">
            <input type="text" name="collector" required>
            <label for="">Collector</label>
          </div>
          <div class="inputbox">
            <input type="text" name="addcoll" required>
            <label for="">Addcoll</label>
          </div>
          <div class="inputbox">
            <input type="text" name="prefix" required>
            <label for="">Prefix</label>
          </div>
          <div class="inputbox">
            <input type="text" name="number" required>
            <label for="">Number</label>
          </div>
          <div class="inputbox">
            <input type="text" name="suffix" required>
            <label for="">Suffix</label>
          </div>
          <div class="inputbox">
            <input type="text" name="colldd" required>
            <label for="">Colldd</label>
          </div>
          <div class="inputbox">
            <input type="text" name="collmm" required>
            <label for="">Collmm</label>
          </div>
          <div class="inputbox">
            <input type="text" name="collyy" required>
            <label for="">Collyy</label>
          </div>
          <div class="inputbox">
            <input type="text" name="dateres" required>
            <label for="">Dateres</label>
          </div>
          <div class="inputbox">
            <input type="text" name="detby" required>
            <label for="">Detby</label>
          </div>
          <div class="inputbox">
            <input type="text" name="detdd" required>
            <label for="">Detdd</label>
          </div>
          <div class="inputbox">
            <input type="text" name="detmm" required>
            <label for="">Detmm</label>
          </div>
          <div class="inputbox">
            <input type="text" name="detyy" required>
            <label for="">Detyy</label>
          </div>
          <div class="inputbox">
            <input type="text" name="country" required>
            <label for="">Country</label>
          </div>
          <div class="inputbox">
            <input type="text" name="majorarea" required>
            <label for="">Majorarea</label>
          </div>
          <div class="inputbox">
            <input type="text" name="minorarea" required>
            <label for="">Minorarea</label>
          </div>
          <div class="inputbox">
            <input type="text" name="gazetteer" required>
            <label for="">Gazetteer</label>
          </div>
          <div class="inputbox">
            <input type="text" name="locality_notes" required>
            <label for="">Locality Notes</label>
          </div>
          <div class="inputbox">
            <input type="text" name="origindb" required>
            <label for="">Origindb</label>
          </div>
          <div class="inputbox">
            <input type="text" name="observacoes_gerais" required>
            <label for="">Observações</label>
          </div>
          <div class="inputbox">
            <input type="text" name="lat" required>
            <label for="Lat">Lat</label>
          </div>
          <div class="inputbox">
            <input type="text" name="ns" required>
            <label for="">Ns</label>
          </div>
          <div class="inputbox">
            <input type="number" name="longitude" required>
            <label for="">Longitude</label>
          </div>
          <div class="inputbox">
            <input type="text" name="ew" required>
            <label for="">Ew</label>
          </div>
          <div class="inputbox">
            <input type="text" name="alt" required>
            <label for="">Alt</label>
          </div>
          <div class="inputbox">
            <input type="text" name="altmax" required>
            <label for="Altmax">Altmax</label>
          </div>
          <div class="inputbox">
            <input type="text" name="altres" required>
            <label for="">Altres</label>
          </div>
    
         <br>

         <button type="submit" name="submit" id="submit">Adicionar</button>
         <a href='coleta.php'>Voltar</a>
        </form>
      </div>
    </div>
  </section>
</body>

</html>