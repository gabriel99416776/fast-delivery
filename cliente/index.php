<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Menu Offcanvas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .navbar-center-logo {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        body {
            background-color: #F3F3F3;
        }

        .hero {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
            /* CONTROLE AQUI */
            z-index: 1;
        }

        /* DESKTOP */
        .hero img {
            width: 100%;
            height: 380px;
            /* IMAGEM MAIOR */
            object-fit: cover;
            /* preenche sem distorcer */
        }


        /* garante que o texto fique por cima */
        .hero-text {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: #fff;
            z-index: 2;
        }

        .hero-text h1 {
            font-size: 26px;
            margin: 0;
            font-weight: 700;
        }

        .hero-text h2 {
            font-size: 18px;
            margin: 0;
        }

        /* MOBILE */
        @media (max-width: 768px) {
            .hero img {
                height: auto;
                /* remove altura fixa */
                object-fit: contain;
                /* MOSTRA IMAGEM COMPLETA */
            }

            .hero-text {
                bottom: 12px;
                left: 12px;
            }

            .hero-text h1 {
                font-size: 30px;
            }

            .hero-text h2 {
                font-size: 16px;
            }
        }

        .categorias-scroll {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            /* SCROLL AQUI */
            white-space: nowrap;
            padding-bottom: 10px;
            -webkit-overflow-scrolling: touch;
        }

        /* esconde a barra */
        .categorias-scroll::-webkit-scrollbar {
            display: none;
        }

        .categoria-btn {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 20px;
            padding: 8px 16px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            flex-shrink: 0;
            /* NÃO QUEBRA */
            transition: all .2s;
        }

        .categoria-btn:hover {
            background: #ff7a00;
            color: #fff;
            border-color: #ff7a00;
        }

        /* DESKTOP */
        @media (min-width: 769px) {
            .categorias-scroll {
                justify-content: center;
                overflow-x: visible;
                /* SEM SCROLL */
                flex-wrap: wrap;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-light bg-light position-relative px-3">
        <!-- Botão menu (esquerda) -->
        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuOffcanvas">
            ☰
        </button>

        <!-- Logo central -->
        <a class="navbar-brand navbar-center-logo" href="#">
            <img src="/fast_delivery/assets/logo.png" height="60" width="180">

        </a>
    </nav>

    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="menuOffcanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">🍔 Cardápio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">🪑 Mesas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">📦 Pedidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">⚙️ Configurações</a>
                </li>
            </ul>
        </div>
    </div>

    <section class="hero">
        <img src="/fast_delivery/assets/img-cliente.png" alt="Imagem restaurante">

        <div class="hero-text">
            <h1>Nome do restaurante</h1>
            <h2>Churrascaria</h2>
            <span>O seu cardápio inteligente</span>
        </div>
    </section>
    <section class="categorias container mt-4">
        <div class="categorias-scroll">
            <button class="categoria-btn">🍢 Petiscos</button>
            <button class="categoria-btn">🥤 Bebidas</button>
            <button class="categoria-btn">🍔 Comidas</button>
            <button class="categoria-btn">➕ Outros</button>
            <button class="categoria-btn">🍕 Pizzas</button>
            <button class="categoria-btn">🍰 Sobremesas</button>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>