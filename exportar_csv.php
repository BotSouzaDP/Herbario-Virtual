<?php
header("Content-Type: text/csv; charset=UTF-8");
header("Content-Disposition: attachment; filename=resultado_pesquisa.csv");
header("Pragma: no-cache");
header("Expires: 0");

$servername = "localhost";
$username = "root";  // Altere se necessário
$password = "";      // Altere se necessário
$database = "acervo_herbario";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Define a codificação do banco de dados para UTF-8
$conn->set_charset("utf8");

// Captura os filtros passados via GET
$family = isset($_GET['family']) ? $_GET['family'] : '';
$genus = isset($_GET['genus']) ? $_GET['genus'] : '';
$sp1 = isset($_GET['sp1']) ? $_GET['sp1'] : '';
$detby = isset($_GET['detby']) ? $_GET['detby'] : '';
$collector = isset($_GET['collector']) ? $_GET['collector'] : '';
$numero = isset($_GET['numero']) ? $_GET['numero'] : '';
$numtombo = isset($_GET['numtombo']) ? $_GET['numtombo'] : '';
$gazetteer = isset($_GET['gazetteer']) ? $_GET['gazetteer'] : '';

// Monta a consulta SQL com base nos filtros
$sql = "SELECT * FROM base_jabot WHERE 1=1";
if ($family) $sql .= " AND family LIKE '%$family%'";
if ($genus) $sql .= " AND genus LIKE '%$genus%'";
if ($sp1) $sql .= " AND sp1 LIKE '%$sp1%'";
if ($detby) $sql .= " AND detby LIKE '%$detby%'";
if ($collector) $sql .= " AND collector LIKE '%$collector%'";
if ($numero) $sql .= " AND numero LIKE '%$numero%'";
if ($numtombo) $sql .= " AND numtombo LIKE '%$numtombo%'";
if ($gazetteer) $sql .= " AND gazetteer LIKE '%$gazetteer%'";

$result = $conn->query($sql);

// Abre o arquivo CSV na saída
$output = fopen("php://output", "w");
fwrite($output, "\xEF\xBB\xBF"); // BOM para acentos no Excel

if ($result->num_rows > 0) {
    // 1. Pega a primeira linha para extrair os nomes das colunas (cabeçalho)
    $primeiraLinha = $result->fetch_assoc();
    $cabecalhos = array_keys($primeiraLinha);
    fputcsv($output, $cabecalhos); // Escreve o cabeçalho dinâmico

    // 2. Escreve a primeira linha que já tínhamos pego
    fputcsv($output, $primeiraLinha);

    // 3. Loop para o restante das linhas (agora exporta TUDO automaticamente)
    while ($row = $result->fetch_assoc()) {
        fputcsv($output, $row); // Exporta a linha inteira, sem precisar listar coluna por coluna
    }
} else {
    fputcsv($output, ["Nenhum resultado encontrado."]);
}

fclose($output);
$conn->close();
exit();
?>
