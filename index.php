<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fast Delivery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .borda-nav {

        height: 10px;
        background: #FE6603;
        background: linear-gradient(90deg, rgba(254, 102, 3, 1) 0%, rgba(158, 83, 33, 1) 50%, rgba(46, 46, 46, 1) 100%);
    }

    .item-nav .nav-link {
        color: #444444;
        font-weight: 600;
        font-size: 16px;
        margin: 0 5px;
    }

    nav {
        box-shadow: 0 4px 1em grey;
    }
</style>

<body>
    <div class="borda-nav"></div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 navbar-center item-nav">

                    <li class="nav-item">
                        <a class="nav-link" data-page="home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-page="cardapio">CARDÁPIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-page="clientes">CLIENTES</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            CONFIGURAÇÕES
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" data-page="mesas">MESAS</a></li>
                            <li><a class="dropdown-item" data-page="horario">HORÁRIO DE FUNCIONAMENTO</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" data-page="empresa">DADOS DA EMPRESA</a></li>
                        </ul>
                    </li>

                </ul>
                <div>
                    <button class="btn btn-outline-success" type="submit">Login</button>
                    <button class="btn btn-outline-primary" type="submit">Suporte</button>
                </div>
            </div>
        </div>
    </nav>

    <main id="conteudo" class="container mt-4"></main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>


    <script>
        function carregar(pagina) {
            fetch(`pages/${pagina}.php`)
                .then(r => r.text())
                .then(html => document.getElementById('conteudo').innerHTML = html);
        }

        document.querySelectorAll('[data-page]').forEach(el => {
            el.onclick = () => carregar(el.dataset.page);
        });

        // carrega HOME ao abrir
        carregar('home');
    </script>

</body>

</html>