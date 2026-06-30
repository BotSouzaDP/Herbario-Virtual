<?php
include_once('config.php');

// Verifica se o ID foi passado na URL
if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    // Prepara a consulta usando prepared statements para evitar injeção SQL
    $sqlSelect = "SELECT * FROM base_jabot WHERE id = ?";
    $stmt = $conexao->prepare($sqlSelect);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user_data = $result->fetch_assoc();

        // Atribui os dados às variáveis
        $numtombo = $user_data['numtombo'];
        $sufixo = $user_data['sufixo'];
        $family = $user_data['family'];
        $genus = $user_data['genus'];
        $cf = $user_data['cf'];
        $sp1 = $user_data['sp1'];
        $author1 = $user_data['author1'];
        $rank1 = $user_data['rank1'];
        $sp2 = $user_data['sp2'];
        $author2 = $user_data['author2'];
        $rank2 = $user_data['rank2'];
        $sp3 = $user_data['sp3'];
        $author3 = $user_data['author3'];
        $vernacular = $user_data['vernacular'];
        $typestat = $user_data['typestat'];
        $country = $user_data['country'];
        $majorarea = $user_data['majorarea'];
        $minorarea = $user_data['minorarea'];
        $gazetteer = $user_data['gazetteer'];
        $uc = $user_data['uc'];
        $latitude = $user_data['latitude'];
        $longitude = $user_data['longitude'];
        $latgrau = $user_data['latgrau'];
        $lat_min = $user_data['lat_min'];
        $lat_seg = $user_data['lat_seg'];
        $ns = $user_data['ns'];
        $long_grau = $user_data['long_grau'];
        $long_min = $user_data['long_min'];
        $long_seg = $user_data['long_seg'];
        $ew = $user_data['ew'];
        $altprof = $user_data['altprof'];
        $altprofmax = $user_data['altprofmax'];
        $unidmedaltprof = $user_data['unidmedaltprof'];
        $locnotes = $user_data['locnotes'];
        $flor = $user_data['flor'];
        $fruto = $user_data['fruto'];
        $fuste = $user_data['fuste'];
        $altura = $user_data['altura'];
        $unidmedaltura = $user_data['unidmedaltura'];
        $collector = $user_data['collector'];
        $numero = $user_data['numero'];
        $addcoll = $user_data['addcoll'];
        $colldd = $user_data['colldd'];
        $collmm = $user_data['collmm'];
        $collyy = $user_data['collyy'];
        $detby = $user_data['detby'];
        $detdd = $user_data['detdd'];
        $detmm = $user_data['detmm'];
        $detyy = $user_data['detyy'];
        $sigla_colbot_origem = $user_data['sigla_colbot_origem'];
        $dups = $user_data['dups'];
        $nrdups = $user_data['nrdups'];
        $notes = $user_data['notes'];
        $usos = $user_data['usos'];
        $uso_especifico = $user_data['uso_especifico'];
        $projeto = $user_data['projeto'];
        $habitat = $user_data['habitat'];
        $habito = $user_data['habito'];
    } else {
        // Se nenhum registro for encontrado, redireciona para a página principal
        header('Location: base_jabot.php');
        exit();
    }
} else {
    // Se o ID não for fornecido, redireciona para a página principal
    header('Location: base_jabot.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Dados</title>
    <link rel="stylesheet" href="css/inserir.css">
</head>
<body>
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <form action="saveEdit-base_jabot.php" method="POST" id="multi-step-form">
                <!-- Barra de Progresso -->
                <div class="formbold-steps">
                    <ul>
                        <li class="formbold-step-menu1 active">
                            <span>1</span>
                            Informações Gerais
                        </li>
                        <li class="formbold-step-menu2">
                            <span>2</span>
                            Taxonômicas
                        </li>
                        <li class="formbold-step-menu3">
                            <span>3</span>
                            Localização
                        </li>
                        <li class="formbold-step-menu4">
                            <span>4</span>
                            Características
                        </li>
                        <li class="formbold-step-menu5">
                            <span>5</span>
                            Coleta
                        </li>
                        <li class="formbold-step-menu6">
                            <span>6</span>
                            Usos
                        </li>
                    </ul>
                </div>

                <!-- Campo oculto para enviar o ID -->
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">

                <!-- Campo oculto para enviar o update -->
                <input type="hidden" name="update" value="1">

                <!-- Etapa 1: Informações Gerais -->
                <div class="formbold-form-step-1 active">
                    <h2>Informações Gerais</h2>
                    <br><br>
                    <div class="formbold-input-grid">
                        <div class="inputbox">
                            <input type="text" name="numtombo" value="<?php echo htmlspecialchars($numtombo); ?>" >
                            <label for="">Numtombo</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="sufixo" value="<?php echo htmlspecialchars($sufixo); ?>" >
                            <label for="">Sufixo</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="typestat" value="<?php echo htmlspecialchars($typestat); ?>" >
                            <label for="">Typestat</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="projeto" value="<?php echo htmlspecialchars($projeto); ?>" >
                            <label for="">Projeto</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="notes" value="<?php echo htmlspecialchars($notes); ?>" >
                            <label for="">Observações Gerais</label>
                        </div>
                    </div>
                </div>

                <!-- Etapa 2: Informações Taxonômicas -->
                <div class="formbold-form-step-2">
                    <h2>Informações Taxonômicas</h2>
                    <br><br>
                    <div class="formbold-input-grid">
                        <div class="inputbox">
                            <input type="text" name="family" value="<?php echo htmlspecialchars($family); ?>" >
                            <label for="">Family</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="genus" value="<?php echo htmlspecialchars($genus); ?>" >
                            <label for="">Genus</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="cf" value="<?php echo htmlspecialchars($cf); ?>" >
                            <label for="">Cf</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="sp1" value="<?php echo htmlspecialchars($sp1); ?>" >
                            <label for="">Sp1</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="author1" value="<?php echo htmlspecialchars($author1); ?>" >
                            <label for="">Autor da Espécie 1</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="rank1" value="<?php echo htmlspecialchars($rank1); ?>" >
                            <label for="">Rank 1</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="sp2" value="<?php echo htmlspecialchars($sp2); ?>" >
                            <label for="">Sp2</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="author2" value="<?php echo htmlspecialchars($author2); ?>" >
                            <label for="">Autor da espécie 2</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="rank2" value="<?php echo htmlspecialchars($rank2); ?>" >
                            <label for="">Rank 2</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="sp3" value="<?php echo htmlspecialchars($sp3); ?>" >
                            <label for="">Sp3</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="author3" value="<?php echo htmlspecialchars($author3); ?>" >
                            <label for="">Autor da espécie 3</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="vernacular" value="<?php echo htmlspecialchars($vernacular); ?>" >
                            <label for="">Nome Popular</label>
                        </div>
                    </div>
                </div>

                <!-- Etapa 3: Localização Geográfica -->
                <div class="formbold-form-step-3">
                    <h2>Localização Geográfica</h2>
                    <br><br>
                    <div class="formbold-input-grid">
                        <div class="inputbox">
                            <input type="text" name="country" value="<?php echo htmlspecialchars($country); ?>" >
                            <label for="">País</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="majorarea" value="<?php echo htmlspecialchars($majorarea); ?>" >
                            <label for="">Estado</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="minorarea" value="<?php echo htmlspecialchars($minorarea); ?>" >
                            <label for="">Município</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="gazetteer" value="<?php echo htmlspecialchars($gazetteer); ?>" >
                            <label for="">Dentro do Município</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="uc" value="<?php echo htmlspecialchars($uc); ?>" >
                            <label for="">Unidade de Conservação</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="latitude" value="<?php echo htmlspecialchars($latitude); ?>" >
                            <label for="">Latitude</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="longitude" value="<?php echo htmlspecialchars($longitude); ?>" >
                            <label for="">Longitude</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="latgrau" value="<?php echo htmlspecialchars($latgrau); ?>" >
                            <label for="">Grau de latitude</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="latmin" value="<?php echo htmlspecialchars($lat_min); ?>" >
                            <label for="">Latmin</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="latseg" value="<?php echo htmlspecialchars($lat_seg); ?>" >
                            <label for="">Latseg</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="ns" value="<?php echo htmlspecialchars($ns); ?>" >
                            <label for="">Norte/Sul</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="longgrau" value="<?php echo htmlspecialchars($long_grau); ?>" >
                            <label for="">Grau de longitude</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="longmin" value="<?php echo htmlspecialchars($long_min); ?>" >
                            <label for="">Longmin</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="longseg" value="<?php echo htmlspecialchars($long_seg); ?>" >
                            <label for="">Longseg</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="ew" value="<?php echo htmlspecialchars($ew); ?>" >
                            <label for="">Leste/Oeste</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="altprof" value="<?php echo htmlspecialchars($altprof); ?>" >
                            <label for="">Altitude Mínima</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="altprofmax" value="<?php echo htmlspecialchars($altprofmax); ?>" >
                            <label for="">Altitude Máxima</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="unidmedaltprof" value="<?php echo htmlspecialchars($unidmedaltprof); ?>" >
                            <label for="">Unidade de medida</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="locnotes" value="<?php echo htmlspecialchars($locnotes); ?>" >
                            <label for="">Descrição sobre a Localidade</label>
                        </div>
                    </div>
                </div>

                <!-- Etapa 4: Características da Planta -->
                <div class="formbold-form-step-4">
                    <h2>Características da Planta</h2>
                    <br><br>
                    <div class="formbold-input-grid">
                        <div class="inputbox">
                            <input type="text" name="flor" value="<?php echo htmlspecialchars($flor); ?>" >
                            <label for="">Flor</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="fruto" value="<?php echo htmlspecialchars($fruto); ?>" >
                            <label for="">Fruto</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="fuste" value="<?php echo htmlspecialchars($fuste); ?>" >
                            <label for="">Valor do Fuste</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="altura" value="<?php echo htmlspecialchars($altura); ?>" >
                            <label for="">Altura</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="unidmedaltura" value="<?php echo htmlspecialchars($unidmedaltura); ?>" >
                            <label for="">Unidade de medida</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="habitat" value="<?php echo htmlspecialchars($habitat); ?>" >
                            <label for="">Habitat</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="habito" value="<?php echo htmlspecialchars($habito); ?>" >
                            <label for="">Hábito</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="notes" value="<?php echo htmlspecialchars($notes); ?>" >
                            <label for="">Descrição do Indivíduo</label>
                        </div>
                    </div>
                </div>

                <!-- Etapa 5: Coleta e Identificação -->
                <div class="formbold-form-step-5">
                    <h2>Coleta e Identificação</h2>
                    <br><br>
                    <div class="formbold-input-grid">
                        <div class="inputbox">
                            <input type="text" name="collector" value="<?php echo htmlspecialchars($collector); ?>" >
                            <label for="">Collector</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="numero" value="<?php echo htmlspecialchars($numero); ?>" >
                            <label for="">Numero</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="addcoll" value="<?php echo htmlspecialchars($addcoll); ?>" >
                            <label for="">Coletor Adicional</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="colldd" value="<?php echo htmlspecialchars($colldd); ?>" >
                            <label for="">Dia da Coleta</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="collmm" value="<?php echo htmlspecialchars($collmm); ?>" >
                            <label for="">Mês</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="collyy" value="<?php echo htmlspecialchars($collyy); ?>" >
                            <label for="">Ano</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="detdd" value="<?php echo htmlspecialchars($detdd); ?>" >
                            <label for="">Dia da Determinação</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="detmm" value="<?php echo htmlspecialchars($detmm); ?>" >
                            <label for="">Mês</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="detyy" value="<?php echo htmlspecialchars($detyy); ?>" >
                            <label for="">Ano</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="siglacolbotorigem" value="<?php echo htmlspecialchars($sigla_colbot_origem); ?>" >
                            <label for="">Sigla Herb. Origem</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="dups" value="<?php echo htmlspecialchars($dups); ?>" >
                            <label for="">Dups</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="nrdups" value="<?php echo htmlspecialchars($nrdups); ?>" >
                            <label for="">Nrdups</label>
                        </div>
                    </div>
                </div>

                <!-- Etapa 6: Usos e Observações Finais -->
                <div class="formbold-form-step-6">
                    <h2>Usos e Observações Finais</h2>
                    <br><br>
                    <div class="formbold-input-grid">
                        <div class="inputbox">
                            <input type="text" name="usos" value="<?php echo htmlspecialchars($usos); ?>" >
                            <label for="">Usos</label>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="usoespecifico" value="<?php echo htmlspecialchars($uso_especifico); ?>" >
                            <label for="">Uso Específico</label>
                        </div>
                    </div>
                </div>

                <!-- Navegação -->
                <div class="formbold-form-btn-wrapper">
                    <!-- Botão "Voltar" -->
                     <button type="button" class="formbold-back-btn">Voltar</button>

                     <!-- Botão "Próximo" ou "Enviar" -->
                     <button type="button" class="formbold-btn" id="nextBtn">
                            Próximo
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M10.7814 7.33312L7.20541 3.75712L8.14808 2.81445L13.3334 7.99979L8.14808 13.1851L7.20541 12.2425L10.7814 8.66645H2.66675V7.33312H10.7814Z" fill="white"/>
                      </svg>
                     </button>
                </div>
                </div>
            </form>
        </div>
    </div>

    <script src="js/inserir.js"></script>
</body>
</html>