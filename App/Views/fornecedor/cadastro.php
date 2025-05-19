<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cadastro de Fornecedor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet" />
  <style>
    body, html {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #f5f5f5;
    }
    .card-title {
      color: #1a237e;
      text-align: center;
      font-weight: 600;
    }
    .btn-yellow {
      background-color: #f9d71c;
      color: #000;
      font-weight: 600;
      border: none;
      margin-top: 30px;
      width: 100%;
    }
    .btn-yellow:hover {
      background-color: #e6c817;
      color: #000;
    }
    /* Container ajustado para deixar o conteúdo mais para cima */
    .container-custom {
      height: 50vh;
      display: flex;
      justify-content: center;
      align-items: flex-start; /* muda de center para flex-start para subir */
      padding-top: -6px; /* dá um espaçamento do topo */
    }
  </style>
</head>
<body>
  <div class="container-custom">
    <div style="width: 100%; max-width: 600px;">
      <div class="card shadow-sm">
        <div class="card-body">
          <h3 class="card-title mb-4">Cadastro de Fornecedor</h3>

          <?php if ($Sessao::retornaMensagem()) { ?>
            <div class="alert alert-warning" role="alert">
              <?php echo $Sessao::retornaMensagem(); ?>
            </div>
          <?php } ?>

          <form action="http://<?php echo APP_HOST; ?>/fornecedor/salvar" method="post" id="form_cadastro">

            <div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" value="<?php echo $Sessao::retornaValorFormulario('nome'); ?>" required>
            </div>

            <div class="mb-3">
              <label for="nomefantasia" class="form-label">Nome Fantasia</label>
              <input type="text" class="form-control" id="nomefantasia" name="nomefantasia" placeholder="Seu nome fantasia" value="<?php echo $Sessao::retornaValorFormulario('nomefantasia'); ?>" required>
            </div>

            <div class="mb-3">
              <label for="cnpj" class="form-label">CNPJ</label>
              <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="Seu CNPJ" value="<?php echo $Sessao::retornaValorFormulario('cnpj'); ?>" required>
            </div>

            <div class="mb-3">
              <label for="inscricaoEstadual" class="form-label">Inscrição Estadual</label>
              <input type="text" class="form-control" id="inscricaoEstadual" name="inscricaoEstadual" placeholder="Sua inscrição estadual" value="<?php echo $Sessao::retornaValorFormulario('inscricaoEstadual'); ?>" required>
            </div>

            <div class="mb-3">
              <label for="endereco" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Seu endereço" value="<?php echo $Sessao::retornaValorFormulario('endereco'); ?>" required>
            </div>

            <div class="mb-3">
              <label for="tipoDeServico" class="form-label">Tipo de Serviço</label>
              <input type="text" class="form-control" id="tipoDeServico" name="tipoDeServico" placeholder="Seu tipo de serviço" value="<?php echo $Sessao::retornaValorFormulario('tipoDeServico'); ?>" required>
            </div>

            <div class="mb-3">
              <label for="telefone" class="form-label">Telefone</label>
              <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Seu telefone" value="<?php echo $Sessao::retornaValorFormulario('telefone'); ?>" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Seu email" value="<?php echo $Sessao::retornaValorFormulario('email'); ?>" required>
            </div>

            <button type="submit" class="btn btn-yellow btn-sm">Salvar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
