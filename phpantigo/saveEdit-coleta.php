<?php
// isset -> serve para saber se uma variável está definida
include_once('config.php');
if (isset($_POST['update'])) {

    $id_coleta = $_POST['id_coleta'];
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

    $sqlInsert = "UPDATE coleta 
        SET especie_id='$especie_id',coletor_id='$coletor_id',id_image='$id_image',accession='$accession',collector='$collector',addcoll='$addcoll',prefix='$prefix',number='$number',suffix='$suffix',colldd='$colldd',collmm='$collmm',collyy='$collyy',dateres='$dateres',detby='$detby',detdd='$detdd',detmm='$detmm',detyy='$detyy',country='$country',majorarea='$majorarea',minorarea='$minorarea',gazetteer='$gazetteer',locality_notes='$locality_notes',origindb='$origindb',observacoes_gerais='$observacoes_gerais',lat='$lat',ns='$ns',longitude='$longitude',ew='$ew',alt='$alt',altmax='$altmax',altres='$altres'
        WHERE id_coleta=$id_coleta";
    $result = $conexao->query($sqlInsert);
    print_r($result);
}
header('Location: coleta.php');
