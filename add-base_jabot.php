 
<?php

if(isset($_POST['submit'])) 

{

include_once('config.php');

  $numtombo = $_POST['numtombo'];
  $sufixo = $_POST['sufixo'];
  $family = $_POST['family'];
  $genus = $_POST['genus'];
  $cf = $_POST['cf'];
  $sp1 = $_POST['sp1'];
  $author1 = $_POST['author1'];
  $rank1 = $_POST['rank1'];
  $sp2 = $_POST['sp2'];
  $author2 = $_POST['author2'];
  $rank2 = $_POST['rank2'];
  $sp3 = $_POST['sp3'];
  $author3 = $_POST['author3'];
  $vernacular = $_POST['vernacular'];
  $typestat = $_POST['typestat'];
  $country = $_POST['country'];
  $majorarea = $_POST['majorarea'];
  $minorarea = $_POST['minorarea'];
  $gazetteer = $_POST['gazetteer'];
  $uc = $_POST['uc'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];
  $latgrau = $_POST['latgrau'];
  $latmin = $_POST['lat_min'];
  $latseg = $_POST['lat_seg'];
  $ns = $_POST['ns'];
  $longgrau = $_POST['long_grau'];
  $longmin = $_POST['long_min'];
  $longseg = $_POST['long_seg'];
  $ew = $_POST['ew'];
  $altprof = $_POST['altprof'];
  $altprofmax = $_POST['altprofmax'];
  $unidmedaltprof = $_POST['unidmedaltprof'];
  $locnotes = $_POST['locnotes'];
  $flor = $_POST['flor'];
  $fruto = $_POST['fruto'];
  $fuste = $_POST['fuste'];
  $altura = $_POST['altura'];
  $unidmedaltura = $_POST['unidmedaltura'];
  $collector = $_POST['collector'];
  $numero = $_POST['numero'];
  $addcoll = $_POST['addcoll'];
  $colldd = $_POST['colldd'];
  $collmm = $_POST['collmm'];
  $collyy = $_POST['collyy'];
  $detby = $_POST['detby'];
  $detdd = $_POST['detdd'];
  $detmm = $_POST['detmm'];
  $detyy = $_POST['detyy'];
  $siglacolbotorigem = $_POST['sigla_colbot_origem'];
  $dups = $_POST['dups'];
  $nrdups = $_POST['nrdups'];
  $notes = $_POST['notes'];
  $usos = $_POST['usos'];
  $usoespecifico = $_POST['uso_especifico'];
  $projeto = $_POST['projeto'];
  $habitat = $_POST['habitat'];
  $habito = $_POST['habito'];

    

    $result = mysqli_query($conexao, "INSERT INTO base_jabot(numtombo,sufixo,family,genus,cf,sp1,author1,rank1,sp2,author2,rank2,sp3,author3,vernacular,typestat,country,majorarea,minorarea,gazetteer,uc,latitude,longitude,latgrau,latmin,latseg,ns,longgrau,longmin,longseg,ew,altprof,altprofmax,unidmedaltprof,locnotes,flor,fruto,fuste,altura,unidmedaltura,collector,numero,addcoll,colldd,collmm,collyy,detby,detdd,detmm,detyy,siglacolbotorigem,dups,nrdups,notes,usos,usoespecifico,projeto,habitat,habito) 
    VALUES ('$numtombo','$sufixo','$family','$genus','$cf','$sp1','$author1','$rank1','$sp2','$author2','$rank2','$sp3','$author3','$vernacular','$typestat','$country','$majorarea','$minorarea','$gazetteer','$uc','$latitude','$longitude','$latgrau','$latmin','$latseg','$ns','$longgrau','$longmin','$longseg','$ew','$altprof','$altprofmax','$unidmedaltprof','$locnotes','$flor','$fruto','$fuste','$altura','$unidmedaltura','$collector','$numero','$addcoll','$colldd','$collmm','$collyy','$detby','$detdd','$detmm','$detyy','$siglacolbotorigem','$dups','$nrdups','$notes','$usos','$usoespecifico','$projeto','$habitat','$habito')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="">
<title>Adicionar</title>
</head>

<body>
<section>
  <div class="form-box">
    <div class="form-value">
      <form action="add-coleta.php" method="POST">
        <h2>Adicione</h2>
        <div class="inputbox">
        <input type="text" name="numtombo" required>
        <label for="">Numtombo</label>
        </div>
        <div class="inputbox">
        <input type="text" name="sufixo" required>
        <label for="">Sufixo</label>
        </div>
        <div class="inputbox">
        <input type="text" name="family" required>
        <label for="">Family</label>
        </div>
        <div class="inputbox">
        <input type="text" name="genus" required>
        <label for="">Genus</label>
        </div>
        <div class="inputbox">
        <input type="text" name="cf" required>
        <label for="">Cf</label>
        </div>
        <div class="inputbox">
        <input type="text" name="sp1" required>
        <label for="">Sp1</label>
        </div>
        <div class="inputbox">
        <input type="text" name="author1" required>
        <label for="">Author1</label>
        </div>
        <div class="inputbox">
        <input type="text" name="rank1" required>
        <label for="">Rank1</label>
        </div>
        <div class="inputbox">
        <input type="text" name="sp2" required>
        <label for="">Sp2</label>
        </div>
        <div class="inputbox">
        <input type="text" name="author2" required>
        <label for="">Author2</label>
        </div>
        <div class="inputbox">
        <input type="text" name="rank2" required>
        <label for="">Rank2</label>
        </div>
        <div class="inputbox">
        <input type="text" name="sp3" required>
        <label for="">Sp3</label>
        </div>
        <div class="inputbox">
        <input type="text" name="author3" required>
        <label for="">Author3</label>
        </div>
        <div class="inputbox">
        <input type="text" name="vernacular" required>
        <label for="">Vernacular</label>
        </div>
        <div class="inputbox">
        <input type="text" name="typestat" required>
        <label for="">Typestat</label>
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
        <input type="text" name="locnotes" required>
        <label for="">Locnotes</label>
        </div>
        <div class="inputbox">
        <input type="text" name="flor" required>
        <label for="">Flor</label>
        </div>
        <div class="inputbox">
        <input type="text" name="fruto" required>
        <label for="">Fruto</label>
        </div>
        <div class="inputbox">
        <input type="text" name="fuste" required>
        <label for="">Fuste</label>
        </div>
        <div class="inputbox">
        <input type="text" name="altura" required>
        <label for="">Altura</label>
        </div>
        <div class="inputbox">
        <input type="text" name="unidmedaltura" required>
        <label for="">Unidmedaltura</label>
        </div>
        <div class="inputbox">
        <input type="text" name="collector" required>
        <label for="">Collector</label>
        </div>
        <div class="inputbox">
        <input type="text" name="numero" required>
        <label for="">numero</label>
        </div>
        <div class="inputbox">
        <input type="text" name="addcoll" required>
        <label for="">Addcoll</label>
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
        <input type="text" name="sigla_colbot_origem" required>
        <label for="">Sigla Colbot Origem</label>
        </div>
        <div class="inputbox">
        <input type="text" name="dups" required>
        <label for="">Dups</label>
        </div>
        <div class="inputbox">
        <input type="text" name="nrdups" required>
        <label for="">Nrdups</label>
        </div>
        <div class="inputbox">
        <input type="text" name="notes" required>
        <label for="">Notes</label>
        </div>
        <div class="inputbox">
        <input type="text" name="usos" required>
        <label for="">Usos</label>
        </div>
        <div class="inputbox">
        <input type="text" name="uso_especifico" required>
        <label for="">Uso Especifico</label>
        </div>
        <div class="inputbox">
        <input type="text" name="projeto" required>
        <label for="">Projeto</label>
        </div>
        <div class="inputbox">
        <input type="text" name="habitat" required>
        <label for="">Habitat</label>
        </div>
        <div class="inputbox">
        <input type="text" name="habito" required>
        <label for="">Habito</label>
        </div>

  
       <br>

       <button type="submit" name="submit" id="submit">Adicionar</button>
       <a href='base_jabot.php'>Voltar</a>
      </form>
    </div>
  </div>
</section>
</body>

</html>