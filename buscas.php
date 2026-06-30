<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtro de Espécimes</title>
    <link rel="stylesheet" href="css/buscas.css">
    <!--<link rel="stylesheet" href="https://jabot.jbrj.gov.br/v3/css/bootstrap.min.css">-->
</head>
<body>
    <script src="menu.js"></script>
    <script src="funcao-menu.js"></script>
    <script src="scriptbusca.js"></script>


    <div class="divisa" id="divisa">
        <p class="divisatext">Selecione os Filtros</p>
    </div>

    <div class="container mt-4">
        <form action="http://localhost/Site/processa_busca.php" id="filtroForm" method="POST"> 
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="family">Família:</label>
                        <input type="text" class="form-control" id="family" name="family">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="genus">Gênero:</label>
                        <input type="text" class="form-control" id="genus" name="genus">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="sp1">Espécie:</label>
                        <input type="text" class="form-control" id="sp1" name="sp1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="author1">Autor:</label>
                        <input type="text" class="form-control" id="author1" name="author1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="detby">Determinador:</label>
                        <input type="text" class="form-control" id="detby" name="detby">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="collector">Coletor:</label>
                        <input type="text" class="form-control" id="collector" name="collector">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="numero">Nº Coleta:</label>
                        <input type="text" class="form-control" id="numero" name="numero">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="numtombo">Tombo:</label>
                        <input type="text" class="form-control" id="numtombo" name="numtombo">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="gazetteer">Localidade:</label>
                        <input type="text" class="form-control" id="gazetteer" name="gazetteer">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="locnotes">Notas:</label>
                        <input type="text" class="form-control" id="locnotes" name="locnotes">
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary mr-2">Consultar</button>
                    <button type="reset" class="btn btn-secondary">Limpar</button>
                </div>
            </div>
        </form>
    </div>
    

    <div id="resultados">
        
        
    </div>
    <button id="btnExportar" class="btn btn-success mt-3" style="display: none;">
    Exportar para CSV
</button>
    <script src="scriptbusca.js"></script>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <script src="js/rodape.js"></script>

</body>
</html>