<?php
session_start();
include('config.php'); // Inclui o arquivo de conexão

// Verifica se o usuário está logado
if (!isset($_SESSION['matricula'])) {
    header('Location: login.php');
    exit();
}

// Depuração: Exibe os dados recebidos
echo "<pre>";
print_r($_POST);
echo "</pre>";

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    // Coleta os dados do formulário
    $id = $_POST['id']; // ID do registro a ser atualizado
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
    $lat_min = $_POST['lat_min'];
    $lat_seg = $_POST['lat_seg'];
    $ns = $_POST['ns'];
    $long_grau = $_POST['long_grau'];
    $long_min = $_POST['long_min'];
    $long_seg = $_POST['long_seg'];
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
    $sigla_colbot_origem = $_POST['sigla_colbot_origem'];
    $dups = $_POST['dups'];
    $nrdups = $_POST['nrdups'];
    $notes = $_POST['notes'];
    $usos = $_POST['usos'];
    $uso_especifico = $_POST['uso_especifico'];
    $projeto = $_POST['projeto'];
    $habitat = $_POST['habitat'];
    $habito = $_POST['habito'];

    // Validação básica
    if (empty($id)) {
        echo "ID do registro não foi fornecido.";
        exit();
    }

    // Prepara a query de atualização
    $sql = "UPDATE base_jabot SET 
            numtombo=?, sufixo=?, family=?, genus=?, cf=?, sp1=?, author1=?, rank1=?, 
            sp2=?, author2=?, rank2=?, sp3=?, author3=?, vernacular=?, 
            typestat=?, country=?, majorarea=?, minorarea=?, gazetteer=?, 
            uc=?, latitude=?, longitude=?, latgrau=?, lat_min=?, lat_seg=?, 
            ns=?, long_grau=?, long_min=?, long_seg=?, ew=?, altprof=?, 
            altprofmax=?, unidmedaltprof=?, locnotes=?, flor=?, fruto=?, 
            fuste=?, altura=?, unidmedaltura=?, collector=?, numero=?, 
            addcoll=?, colldd=?, collmm=?, collyy=?, detby=?, detdd=?, 
            detmm=?, detyy=?, sigla_colbot_origem=?, dups=?, nrdups=?, 
            notes=?, usos=?, uso_especifico=?, projeto=?, habitat=?, habito=? 
            WHERE id=?";

    // Prepara e executa a query
    $stmt = $conexao->prepare($sql);
    if ($stmt) {
        // Verifica se todos os parâmetros estão corretos
        $stmt->bind_param(
            "ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssi",
            $numtombo, $sufixo, $family, $genus, $cf, $sp1, $author1, $rank1, 
            $sp2, $author2, $rank2, $sp3, $author3, $vernacular, 
            $typestat, $country, $majorarea, $minorarea, $gazetteer, 
            $uc, $latitude, $longitude, $latgrau, $lat_min, $lat_seg, 
            $ns, $long_grau, $long_min, $long_seg, $ew, $altprof, 
            $altprofmax, $unidmedaltprof, $locnotes, $flor, $fruto, 
            $fuste, $altura, $unidmedaltura, $collector, $numero, 
            $addcoll, $colldd, $collmm, $collyy, $detby, $detdd, 
            $detmm, $detyy, $sigla_colbot_origem, $dups, $nrdups, 
            $notes, $usos, $uso_especifico, $projeto, $habitat, $habito, 
            $id
        );

        if ($stmt->execute()) {
            // Redireciona para a página da tabela após a atualização
            header('Location: base_jabot.php');
            exit();
        } else {
            echo "Erro ao atualizar o registro: " . $stmt->error;
        }
    } else {
        echo "Erro ao preparar a query: " . $conexao->error;
    }
} else {
    echo "Requisição inválida.";
}
?>