document.addEventListener("DOMContentLoaded", function() {
    const menuButton = document.getElementById("menuButton");
    const navMenu = document.getElementById("navMenu");

    menuButton.addEventListener("click", function() {
        navMenu.classList.toggle("show");
        menuButton.classList.toggle("open");
    });
});

function validarForm() {
    const nome = document.getElementById("nome").value;
    const idade = document.getElementById("idade").value;
    const email = document.getElementById("email").value;
    const telefone = document.getElementById("telefone").value;

    // Validar se o nome contém apenas letras
    if (!/^[A-Za-z\s]+$/.test(nome)) {
        alert("Nome deve conter apenas letras.");
        return false;
    }

    // Validar se a idade é maior ou igual a 18
    if (idade < 18) {
        alert("Idade deve ser igual ou maior que 18 anos.");
        return false;
    }

    // Validar o formato do email
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
        alert("Email inválido.");
        return false;
    }

    // Validar o formato do telefone
    if (!/^\d{2}\s\d{9}$/.test(telefone)) {
        alert("Telefone inválido. Use o formato: 99 987654321");
        return false;
    }

    return true;
}
