document.addEventListener("DOMContentLoaded", function() {
    console.log("Script de busca carregado!");

    // Adiciona esta verificação:
    const filtroForm = document.getElementById("filtroForm");
    
    if (filtroForm) {
        filtroForm.addEventListener("submit", function(event) {
            event.preventDefault(); 
            
            let formData = new FormData(this);
            console.log("Enviando requisição para processa_busca.php...");

            fetch("processa_busca.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById("resultados").innerHTML = data;
            })
            .catch(error => {
                console.error("Erro na requisição:", error);
                document.getElementById("resultados").innerHTML = "<p>Erro na busca!</p>";
            });
        });
    } else {
        console.log("Formulário de busca não encontrado nesta página. Pulando execução.");
    }
});