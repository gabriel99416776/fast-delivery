 <style>
     
        .status-aberto {
            color: #198754;
            font-weight: bold;
        }
        .status-fechado {
            color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">👥 Clientes Ativos</h5>
            <button class="btn btn-sm btn-success">+ Novo Cliente</button>
        </div>

        <div class="card-body">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-secondary">
                    <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Mesa</th>
                        <th>Total (R$)</th>
                        <th>Última Atualização</th>
                        <th>Status</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>João Silva</td>
                        <td>Mesa 05</td>
                        <td>R$ 128,50</td>
                        <td>29/01/2026 21:15</td>
                        <td class="status-aberto">Aberto</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-primary">Ver</button>
                            <button class="btn btn-sm btn-warning">Editar</button>
                            <button class="btn btn-sm btn-danger">Fechar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Maria Oliveira</td>
                        <td>Mesa 12</td>
                        <td>R$ 76,00</td>
                        <td>29/01/2026 20:40</td>
                        <td class="status-aberto">Aberto</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-primary">Ver</button>
                            <button class="btn btn-sm btn-warning">Editar</button>
                            <button class="btn btn-sm btn-danger">Fechar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Carlos Mendes</td>
                        <td>Mesa 02</td>
                        <td>R$ 45,90</td>
                        <td>29/01/2026 19:10</td>
                        <td class="status-fechado">Fechado</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-secondary">Ver</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>