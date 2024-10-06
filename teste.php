<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transição com JS</title>
    <style>
    /* Caixa inicial */
    .box {
        width: 100px;
        height: 100px;
        background-color: red;
        transition: all 0.5s ease;
        /* Transição aplicada a todas as propriedades */
    }

    /* Classe que será adicionada/alterada */
    .box.expand {
        width: 200px;
        background-color: blue;
    }
    </style>
</head>

<body>

    <div class="box"></div>
    <button id="toggle">Toggle Class</button>

    <script>
    const box = document.querySelector('.box');
    const button = document.getElementById('toggle');

    button.addEventListener('click', function() {
        box.classList.toggle('expand'); // Adiciona ou remove a classe 'expand'
    });
    </script>

</body>

</html>