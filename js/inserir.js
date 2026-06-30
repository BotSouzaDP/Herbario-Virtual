document.addEventListener('DOMContentLoaded', function () {
    let currentStep = 1;
    const totalSteps = 6;
    const nextButton = document.getElementById('nextBtn');
    const backButton = document.querySelector('.formbold-back-btn');
    const form = document.getElementById('multi-step-form');

    function showStep(step) {
        // Oculta todas as etapas
        document.querySelectorAll('[class^="formbold-form-step-"]').forEach(function (el) {
            el.classList.remove('active');
        });

        // Mostra a etapa atual
        document.querySelector(`.formbold-form-step-${step}`).classList.add('active');

        // Atualiza a barra de progresso
        document.querySelectorAll('.formbold-step-menu1, .formbold-step-menu2, .formbold-step-menu3, .formbold-step-menu4, .formbold-step-menu5, .formbold-step-menu6').forEach(function (el) {
            el.classList.remove('active');
        });
        document.querySelector(`.formbold-step-menu${step}`).classList.add('active');

        // Altera o texto do botão na última etapa
        if (step === totalSteps) {
            nextButton.innerHTML = 'Enviar <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.7814 7.33312L7.20541 3.75712L8.14808 2.81445L13.3334 7.99979L8.14808 13.1851L7.20541 12.2425L10.7814 8.66645H2.66675V7.33312H10.7814Z" fill="white"/></svg>';
        } else {
            nextButton.innerHTML = 'Próximo <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.7814 7.33312L7.20541 3.75712L8.14808 2.81445L13.3334 7.99979L8.14808 13.1851L7.20541 12.2425L10.7814 8.66645H2.66675V7.33312H10.7814Z" fill="white"/></svg>';
        }
    }

    nextButton.addEventListener('click', function () {
        if (currentStep < totalSteps) {
            currentStep++;
            showStep(currentStep);
        } else {
            // Envia o formulário na última etapa
            form.submit();
        }
    });

    backButton.addEventListener('click', function () {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    });

    // Inicializa a primeira etapa
    showStep(currentStep);
});