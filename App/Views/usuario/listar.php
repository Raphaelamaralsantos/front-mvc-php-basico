<!-- Adicione no <head> do arquivo principal -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<style>
    body {
        background: linear-gradient(120deg, #232526 0%, #ffd600 100%);
        min-height: 100vh;
        background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20220522/pngtree-abstract-white-and-light-gray-wave-modern-soft-luxury-texture-with-image_1379862.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    .main-content {
        margin-top: 40px;
        margin-bottom: 40px;
    }
    .titulo-lista {
        color: #1a237e;
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 24px;
        text-shadow: 0 2px 8px #ffd60033;
    }
    .btn-nv {
        background: linear-gradient(90deg,#ffd600,#ffea00);
        color: #232526;
        font-weight: bold;
        border-radius: 8px;
        padding: 10px 28px;
        border: none;
        box-shadow: 0 2px 8px #0002;
        font-size: 1.1rem;
        transition: background 0.2s;
        margin-bottom: 18px;
        margin-right: 12px;
    }
    .btn-nv a {
        color: #232526;
        text-decoration: none;
        font-weight: bold;
    }
    .btn-nv:hover, .btn-nv a:hover {
        background: linear-gradient(90deg,#ffea00,#ffd600);
        color: #283593;
        text-decoration: none;
    }
    .table.usuario {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 24px rgba(40, 53, 147, 0.10), 0 1.5px 8px #ffd60055;
    }
    .table.usuario th {
        background: #283593;
        color: #ffd600;
        font-weight: 600;
        border: none;
        font-size: 1.1rem;
    }
    .table.usuario td {
        vertical-align: middle;
        font-size: 1.05rem;
        border-top: 1px solid #eee;
        /* Adiciona padding menor na coluna de ações */
    }
    .table.usuario td.acao {
        padding-right: 12px;
        padding-left: 8px;
        width: 110px; /* Ajuste conforme necessário para os botões */
    }
    .btn-edit, .btn-delarquivo {
        border: none;
        border-radius: 6px;
        padding: 6px 10px; /* padding menor para aproximar os ícones */
        margin-right: 4px;
        font-size: 1rem;
        transition: background 0.2s;
    }
    .btn-edit {
        background: #43a047;
        color: #fff;
    }
    .btn-edit:hover {
        background: #388e3c;
        color: #fff;
    }
    .btn-delarquivo {
        background: #e53935;
        color: #fff;
    }
    .btn-delarquivo:hover {
        background: #b71c1c;
        color: #fff;
    }
    .mensagem .alert {
        border-radius: 8px;
        font-size: 1rem;
        margin-bottom: 18px;
        box-shadow: 0 2px 8px #ffd60033;
    }
    @media (max-width: 768px) {
        .main-content {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .table.usuario {
            font-size: 0.95rem;
        }
        .btn-nv {
            width: 100%;
            margin-bottom: 12px;
        }
    }
</style>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="titulo-lista h2">LISTA DE USUÁRIOS</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" id="pdf" class="btn btn-sm btn-outline-secondary" title="Exportar PDF"><i class="fa-regular fa-file-pdf"></i></button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="mensagem">
            <?php if ($Sessao::retornaMensagem()) { ?>
                <div class="alert <?php echo $Sessao::classeRetorno(); ?>" role="alert"><?php echo $Sessao::retornaMensagem(); ?></div>
            <?php } ?>
        </div>

        <button class="btn-nv">
            <a href="http://<?php echo APP_HOST; ?>/usuario/cadastro">CRIAR NOVO <i class="fa-regular fa-square-plus"></i></a>
        </button>

        <div class="panel-body">
            <table class="table usuario" id="printTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>EMAIL</th>
                        <th style="width:110px;">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
    <?php foreach ($viewVar['usuarios'] as $usuario) { ?>
        <tr>
            <td><?php echo $usuario->getId(); ?></td>
            <td><?php echo $usuario->getNome(); ?></td>
            <td><?php echo $usuario->getEmail(); ?></td>
            <td class="acao" align="right">
                <a title="Editar" href="http://<?php echo APP_HOST; ?>/usuario/edicao/<?php echo $usuario->getId(); ?>" class="btn-edit"><i class="fa-solid fa-pen-to-square"></i></a>
                <a title="Excluir" href="http://<?php echo APP_HOST; ?>/usuario/exclusao/<?php echo $usuario->getId(); ?>" class="btn-delarquivo"><i class="fa-solid fa-trash-arrow-up"></i></a>
            </td>
        </tr>
    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
