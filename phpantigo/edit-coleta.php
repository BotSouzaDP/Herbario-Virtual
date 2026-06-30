<?php
include_once('config.php');

if (!empty($_GET['id_coleta'])) {
    $id_coleta = $_GET['id_coleta'];
    $sqlSelect = "SELECT * FROM coleta WHERE id_coleta=$id_coleta";
    $result = $conexao->query($sqlSelect);
    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {

            $especie_id = $user_data['especie_id'];
            $coletor_id = $user_data['coletor_id'];
            $id_image = $user_data['id_image'];
            $accession = $user_data['accession'];
            $collector = $user_data['collector'];
            $addcoll = $user_data['addcoll'];
            $prefix = $user_data['prefix'];
            $number = $user_data['number'];
            $suffix = $user_data['suffix'];
            $colldd = $user_data['colldd'];
            $collmm = $user_data['collmm'];
            $collyy = $user_data['collyy'];
            $dateres = $user_data['dateres'];
            $detby = $user_data['detby'];
            $detdd = $user_data['detdd'];
            $detmm = $user_data['detmm'];
            $detyy = $user_data['detyy'];
            $country = $user_data['country'];
            $majorarea = $user_data['majorarea'];
            $minorarea = $user_data['minorarea'];
            $gazetteer = $user_data['gazetteer'];
            $locality_notes = $user_data['locality_notes'];
            $origindb = $user_data['origindb'];
            $observacoes_gerais = $user_data['observacoes_gerais'];
            $lat = $user_data['lat'];
            $ns = $user_data['ns'];
            $longitude = $user_data['longitude'];
            $ew = $user_data['ew'];
            $alt = $user_data['alt'];
            $altmax = $user_data['altmax'];
            $altres = $user_data['altres'];
        }
    } else {
        header('Location: coleta.php');
    }
} else {
    header('Location: coleta.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="">
    <title>Edit | Coleta</title>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="saveEdit-coleta.php" method="POST">
                    <h2>Altere uma coleta</h2>
                    <div class="inputbox">
                        <input type="text" name="id_coleta" value=<?php echo $id_coleta;?> required>
                        <label for="">ID coleta</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="especie_id" value=<?php echo $especie_id;?> required>
                        <label for="">ID da espécie</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="coletor_id" value=<?php echo $coletor_id;?> required>
                        <label for="">ID do coletor</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="id_image" value=<?php echo $id_image;?> required>
                        <label for="">ID da imagem</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="accession" value=<?php echo $accession;?> required>
                        <label for="">Accession</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="collector" value=<?php echo $collector;?> required>
                        <label for="">Collector</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="addcoll" value=<?php echo $addcoll;?> required>
                        <label for="">Addcoll</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="prefix" value=<?php echo $prefix;?> required>
                        <label for="">Prefix</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="number" value=<?php echo $number;?> required>
                        <label for="">Number</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="suffix" value=<?php echo $suffix;?> required>
                        <label for="">Suffix</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="colldd" value=<?php echo $colldd;?> required>
                        <label for="">Colldd</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="collmm" value=<?php echo $collmm;?> required>
                        <label for="">Collmm</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="collyy" value=<?php echo $collyy;?> required>
                        <label for="">Collyy</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="dateres" value=<?php echo $dateres;?> required>
                        <label for="">Dateres</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="detby" value=<?php echo $detby;?> required>
                        <label for="">Detby</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="detdd" value=<?php echo $detdd;?> required>
                        <label for="">Detdd</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="detmm" value=<?php echo $detmm;?> required>
                        <label for="">Detmm</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="detyy" value=<?php echo $detyy;?> required>
                        <label for="">Detyy</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="country" value=<?php echo $country;?> required>
                        <label for="">Country</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="majorarea" value=<?php echo $majorarea;?> required>
                        <label for="">Majorarea</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="minorarea" value=<?php echo $minorarea;?> required>
                        <label for="">Minorarea</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="gazetteer" value=<?php echo $gazetteer;?> required>
                        <label for="">Gazetteer</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="locality_notes" value=<?php echo $locality_notes;?> required>
                        <label for="">Locality Notes</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="origindb" value=<?php echo $origindb;?> required>
                        <label for="">Origindb</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="observacoes_gerais" value=<?php echo $observacoes_gerais;?> required>
                        <label for="">Observações</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="lat" value=<?php echo $lat;?> required>
                        <label for="Lat">Lat</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="ns" value=<?php echo $ns;?> required>
                        <label for="">Ns</label>
                    </div>
                    <div class="inputbox">
                        <input type="number" name="longitude" value=<?php echo $longitude;?> required>
                        <label for="">Longitude</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="ew" value=<?php echo $ew;?> required>
                        <label for="">Ew</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="alt" value=<?php echo $alt;?> required>
                        <label for="">Alt</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="altmax" value=<?php echo $altmax;?> required>
                        <label for="Altmax">Altmax</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="altres" value=<?php echo $altres;?> required>
                        <label for="">Altres</label>
                    </div>

                    <br>

                    <input type="hidden" name="id" value=<?php echo $id_coleta; ?>>
                    <input type="submit" name="update" id="submit">

                </form>
            </div>
        </div>
    </section>
</body>

</html>