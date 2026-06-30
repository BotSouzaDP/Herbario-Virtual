<?php
session_start(); // Início para salvar a sessão
include_once('config.php'); // Certifique-se de que o nome é config.php ou conexao.php

// Salva os filtros na sessão para exportação posterior
$_SESSION['filtros_busca'] = $_POST;
// Conectar ao banco de dados
$conn = new mysqli('localhost', 'root', '', 'acervo_herbario');

// Verificar a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capturar os dados da pesquisa
$family = isset($_POST['family']) ? $_POST['family'] : '';
$genus = isset($_POST['genus']) ? $_POST['genus'] : '';
$sp1 = isset($_POST['sp1']) ? $_POST['sp1'] : '';
$author1 = isset($_POST['author1']) ? $_POST['author1'] : '';
$detby = isset($_POST['detby']) ? $_POST['detby'] : '';
$collector = isset($_POST['collector']) ? $_POST['collector'] : '';
$numero = isset($_POST['numero']) ? $_POST['numero'] : ''; // Alterado para "numero"
$numtombo = isset($_POST['numtombo']) ? $_POST['numtombo'] : '';
$gazetteer = isset($_POST['gazetteer']) ? $_POST['gazetteer'] : '';
$locnotes = isset($_POST['locnotes']) ? $_POST['locnotes'] : '';

// Construir a consulta SQL
$sql = "SELECT * FROM base_jabot WHERE 1=1";

// Adicionar filtros à consulta SQL
if (!empty($family))    $sql .= " AND family LIKE '%" . $conn->real_escape_string($family) . "%'";
if (!empty($genus))     $sql .= " AND genus LIKE '%" . $conn->real_escape_string($genus) . "%'";
if (!empty($sp1))       $sql .= " AND sp1 LIKE '%" . $conn->real_escape_string($sp1) . "%'";
if (!empty($author1))   $sql .= " AND author1 LIKE '%" . $conn->real_escape_string($author1) . "%'";
if (!empty($detby))     $sql .= " AND detby LIKE '%" . $conn->real_escape_string($detby) . "%'";
if (!empty($collector)) $sql .= " AND collector LIKE '%" . $conn->real_escape_string($collector) . "%'";
if (!empty($numero))    $sql .= " AND numero LIKE '%" . $conn->real_escape_string($numero) . "%'";
if (!empty($numtombo))  $sql .= " AND numtombo LIKE '%" . $conn->real_escape_string($numtombo) . "%'";
if (!empty($gazetteer)) $sql .= " AND gazetteer LIKE '%" . $conn->real_escape_string($gazetteer) . "%'";
if (!empty($locnotes))  $sql .= " AND locnotes LIKE '%" . $conn->real_escape_string($locnotes) . "%'";

// Executar a consulta
$result = $conn->query($sql);

// Verificar se há resultados
if ($result->num_rows > 0) {
    // Exibir os resultados com estilização
    echo "<table class='result-table'>"; // Adicionando uma classe para estilizar a tabela
    echo "<thead><tr>";
    echo "<th>Num Tombo</th><th>Sufixo</th><th>Família</th><th>Gênero</th><th>Espécie 1</th><th>Autor 1</th><th>Determinador</th><th>Coletor</th><th>Número</th><th>Gazetteer</th><th>Notas Locais</th>";
    echo "</tr></thead><tbody>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["numtombo"] . "</td>";
        echo "<td>" . $row["sufixo"] . "</td>";
        echo "<td>" . $row["family"] . "</td>";
        echo "<td> <i>" . $row["genus"] . "</td>";
        echo "<td> <i>" . $row["sp1"] . "</td>";
        echo "<td>" . $row["author1"] . "</td>";
        echo "<td>" . $row["detby"] . "</td>";
        echo "<td>" . $row["collector"] . "</td>";
        echo "<td>" . $row["numero"] . "</td>"; // Corrigido para "numero"
        echo "<td>" . $row["gazetteer"] . "</td>";
        echo "<td>" . $row["locnotes"] . "</td>";
        echo "</tr>";
    }
    echo "</tbody></table>";


        // CRIAÇÃO DO LINK DE EXPORTAÇÃO
        // Pega tudo que veio no POST e transforma em uma string de URL (ex: ?family=Fabaceae&genus=Inga...)
        $filtros_url = http_build_query($_POST);

        echo "<div style='margin-top: 20px; text-align: center;'>";
        echo "  <a href='exportar_csv.php?{$filtros_url}' class='btn btn-success' style='padding: 10px; background-color: #28a745; color: white; text-decoration: none;'>Exportar CSV</a>";
        echo "</div>";




} else {
    echo "<p>Nenhum resultado encontrado.</p>";
}

// Fechar a conexão
$conn->close();
?>
