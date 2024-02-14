document.addEventListener("DOMContentLoaded", function () {
    var currentPage = window.location.pathname;
    var links = document.querySelectorAll(".pag-url");
    var linkCad = document.querySelector('a[href="/Trabalho-Josefa/public/cadastrar"]');
    var linkFunc = document.querySelector('a[href="/Trabalho-Josefa/public/allfuncionario"]');
    var linkEquip = document.querySelector('a[href="/Trabalho-Josefa/public/allequipamento"]');

    links.forEach(function (link) {
        if (link.getAttribute("href") == currentPage) {
            link.classList.add("active");
        }
    })

    if (currentPage.includes("cadastro")) {
        linkCad.classList.add("active");
    } else if (currentPage.includes("allfuncionario")) {
        linkFunc.classList.add("active");
    }else if (currentPage.includes("allequipamento")){
        linkEquip.classList.add("active");
    }

})


// Função para exibir o pop-up
function showPopup(numSerie) {
    var popup = document.getElementById('popup-' + numSerie);
    popup.style.display = 'block';
}

// Função para fechar o pop-up
function closePopup(numSerie) {
    var popup = document.getElementById('popup-' + numSerie);
    popup.style.display = 'none';
}

function showPopupDes(numSerie) {
    var popup = document.getElementById('popupDes-' + numSerie);
    popup.style.display = 'block';
}

// Função para fechar o pop-up
function closePopupDes(numSerie) {
    var popup = document.getElementById('popupDes-' + numSerie);
    popup.style.display = 'none';
}