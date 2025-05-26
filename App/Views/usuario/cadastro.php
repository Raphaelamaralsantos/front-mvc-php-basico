<?php include_once(__DIR__ . '/../layouts/header.php'); ?>

<style>
    body {
        background: url('https://png.pngtree.com/thumb_back/fh260/background/20220522/pngtree-abstract-white-and-light-gray-wave-modern-soft-luxury-texture-with-image_1379862.jpg') no-repeat center center fixed;
        background-size: cover;
    }
    .espaco-campos {
        padding-left: 18px;
        padding-right: 18px;
    }
</style>

<div class="container" style="min-height: 80vh; display: flex; justify-content: center; align-items: center;">
  <div class="card shadow" style="width: 100%; max-width: 600px; border-radius: 20px; background: linear-gradient(135deg, #f8fafc 0%, #e0e7ef 100%); border: 1px solid #ffd600; color: #232526;">
    <div class="card-body p-4">
      <h3 class="card-title mb-4 text-center" style="font-weight: bold; letter-spacing: 1px; color: #283593; text-shadow: 1px 1px 4px #fff;">Cadastro de Usuário</h3>

      <?php if ($Sessao::retornaMensagem()) { ?>
        <div class="alert alert-warning text-center" role="alert" style="border-radius: 10px;">
          <?php echo $Sessao::retornaMensagem(); ?>
        </div>
      <?php } ?>

      <form action="http://<?php echo APP_HOST; ?>/usuario/salvar" method="post" id="form_cadastro">
        <div class="espaco-campos" style="margin-bottom: 2.5rem; margin-top: 2rem;">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" value="<?php echo $Sessao::retornaValorFormulario('nome'); ?>" required>
        </div>

        <div class="espaco-campos" style="margin-bottom: 2.5rem;">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Seu email" value="<?php echo $Sessao::retornaValorFormulario('email'); ?>" required>
        </div>

        <div class="d-flex justify-content-center mt-5">
          <button type="submit" class="btn" style="background: linear-gradient(90deg,#ffd600,#ffea00); color: #232526; font-weight: bold; border-radius: 8px; box-shadow: 0 2px 8px #0002; min-width: 160px; display: block; margin: 0 auto;">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include_once(__DIR__ . '/../layouts/footer.php'); ?>