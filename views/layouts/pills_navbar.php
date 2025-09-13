<?php ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Navbar Tabs</title>
    <style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .navbar {
        display: flex;
        flex-wrap: wrap;
        background: #f0f0f0;
        padding: 0.5rem;
        border-bottom: 2px solid #ccc;
    }

    .tab {
        padding: 0.7rem 1.2rem;
        margin: 0 0.2rem;
        background: #e0e0e0;
        border-radius: 6px 6px 0 0;
        border: 1px solid #ccc;
        border-bottom: none;
        cursor: pointer;
        transition: background 0.3s;
    }

    .tab:hover {
        background: #d6d6d6;
    }

    .tab.active {
        background: white;
        font-weight: bold;
    }

    .content {
        padding: 1rem;
        border: 1px solid #ccc;
    }

    /* Responsividade: se não couber, vira scroll horizontal */
    .navbar {
        overflow-x: auto;
    }

    .tab {
        flex: 0 0 auto;
    }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="tab active">Home</div>
        <div class="tab">Dashboard</div>
        <div class="tab">Configurações</div>
        <div class="tab">Relatórios</div>
    </div>

    {{content}}

    <script>
    const tabs = document.querySelectorAll('.tab');
    const content = document.querySelector('.content');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            document.querySelector('.tab.active')?.classList.remove('active');
            tab.classList.add('active');
            content.textContent = `Você está na seção: ${tab.textContent}`;
        });
    });
    </script>

</body>

</html>