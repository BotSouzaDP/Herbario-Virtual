<?php
include_once('config.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM especies WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $labsigla = $user_data['labsigla'];
            $family = $user_data['family'];
            $genus = $user_data['genus'];
            $sp1 = $user_data['sp1'];
            $author1 = $user_data['author1'];
            $rank1 = $user_data['rank1'];
            $sp2 = $user_data['sp2'];
            $author2 = $user_data['author2'];
            $rank2 = $user_data['rank2'];
            $sp3 = $user_data['sp3'];
            $author3 = $user_data['author3'];
            $description = $user_data['description'];
            $unico = $user_data['unico'];
            $phenology = $user_data['phenology'];
            $vernacular = $user_data['vernacular'];
        }
    } else {
        header('Location: especies.php');
    }
} else {
    header('Location: especies.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="">
    <title>Edit | Especies</title>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="saveEdit-especies.php" method="POST">
                    <h2>Altere uma especie</h2>
                    <div class="inputbox">
                        <input type="text" name="labsigla" value=<?php echo $labsigla; ?> required>
                        <label for="">Labsigla</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="family" value=<?php echo $family; ?> required>
                        <label for="">Family</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="genus" value=<?php echo $genus; ?> required>
                        <label for="">Genus</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="sp1" value=<?php echo $sp1; ?> required>
                        <label for="">Sp1</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="author1" value=<?php echo $author1; ?> required>
                        <label for="">Author1</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="rank1" value=<?php echo $rank1; ?> required>
                        <label for="">Rank1</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="sp2" value=<?php echo $sp2; ?> required>
                        <label for="">Sp2</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="author2" value=<?php echo $author2; ?> required>
                        <label for="">Author2</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="rank2" value=<?php echo $rank2; ?> required>
                        <label for="">Rank2</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="sp3" value=<?php echo $sp3; ?> required>
                        <label for="">Sp3</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="author3" value=<?php echo $author3; ?> required>
                        <label for="">Author3</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="description" value=<?php echo $description; ?> required>
                        <label for="">Description</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="unico" value=<?php echo $unico; ?> required>
                        <label for="">Unico</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="phenology" value=<?php echo $phenology; ?> required>
                        <label for="">Phenology</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="vernacular" value=<?php echo $vernacular; ?> required>
                        <label for="">Vernacular</label>
                    </div>

                    <br>

                    <input type="hidden" name="id" value=<?php echo $id; ?>>
                    <input type="submit" name="update" id="submit">

                </form>
            </div>
        </div>
    </section>
</body>

</html>