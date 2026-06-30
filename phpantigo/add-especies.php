<?php

  if(isset($_POST['submit'])) 

  {
 
    include_once('config.php');

    $labsigla = $_POST['labsigla'];
    $family = $_POST['family'];
    $genus = $_POST['genus'];
    $sp1 = $_POST['sp1'];
    $author1 = $_POST['author1'];
    $rank1 = $_POST['rank1'];
    $sp2 = $_POST['sp2'];
    $author2 = $_POST['author2'];
    $rank2 = $_POST['rank2'];
    $sp3 = $_POST['sp3'];
    $author3 = $_POST['author3'];
    $description = $_POST['description'];
    $unico = $_POST['unico'];
    $phenology = $_POST['phenology'];
    $vernacular = $_POST['vernacular'];

    $result = mysqli_query($conexao, "INSERT INTO especies(labsigla,family,genus,sp1,author1,rank1,sp2,author2,rank2,sp3,author3,description,unico,phenology,vernacular) VALUES ('$labsigla','$family','$genus','$sp1','$author1','$rank1','$sp2','$author2','$rank2','$sp3','$author3','$description','$unico','$phenology','$vernacular')");
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
        <form action="add-especies.php" method="POST">
          <h2>Adicione uma coleta</h2>
          <div class="inputbox">
            <input type="text" name="labsigla" required>
            <label for="">Labsigla</label>
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
            <input type="text" name="description" required>
            <label for="">Description</label>
          </div>
          <div class="inputbox">
            <input type="text" name="unico" required>
            <label for="">Unico</label>
          </div>
          <div class="inputbox">
            <input type="text" name="phenology" required>
            <label for="">Phenology</label>
          </div>
          <div class="inputbox">
            <input type="text" name="vernacular" required>
            <label for="">Vernacular</label>
          </div>
    
         <br>

         <button type="submit" name="submit" id="submit">Adicionar</button>
         <a href='especies.php'>Voltar</a>
        </form>
      </div>
    </div>
  </section>
</body>

</html>