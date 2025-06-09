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
  <div class="card shadow" style="width: 100%; max-width: 600px; border-radius: 20px; background: linear-gradient(135deg, #f8fafc 0%, #e0e7ef 100%); border: 1px solid #ffd600; color: #232526; margin-top: 30px;margin-bottom: 10px;">
    <div class="card-body p-4">
      <h3 class="card-title mb-4 text-center" style="font-weight: bold; letter-spacing: 1px; color: #283593; text-shadow: 1px 1px 4px #fff;">Cadastro de Fornecedor</h3>
      <?php if ($Sessao::retornaMensagem()) { ?>
        <div class="alert alert-warning text-center" role="alert" style="border-radius: 10px;">
          <?php echo $Sessao::retornaMensagem(); ?>
        </div>
      <?php } ?>
      <form action="http://<?php echo APP_HOST; ?>/fornecedor/salvar" method="post" id="form_cadastro" onsubmit="return mostrarFeedback();">
        <div class="espaco-campos" style="margin-bottom: 2.5rem; margin-top: 2rem;">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" value="<?php echo $Sessao::retornaValorFormulario('nome'); ?>" required>
        </div>
        <div class="espaco-campos" style="margin-bottom: 2.5rem;">
          <label for="nomeFantasia" class="form-label">Nome Fantasia</label>
          <input type="text" class="form-control" id="nomeFantasia" name="nomeFantasia" placeholder="Seu nome fantasia" value="<?php echo $Sessao::retornaValorFormulario('nomeFantasia'); ?>" required>
        </div>
        <div class="espaco-campos" style="margin-bottom: 2.5rem;">
          <label for="cnpj" class="form-label">CNPJ</label>
          <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="Seu CNPJ" value="<?php echo $Sessao::retornaValorFormulario('cnpj'); ?>" required>
        </div>
        <div class="espaco-campos" style="margin-bottom: 2.5rem;">
          <label for="inscricaoEstadual" class="form-label">Inscrição Estadual</label>
          <input type="text" class="form-control" id="inscricaoEstadual" name="inscricaoEstadual" placeholder="Sua inscrição estadual" value="<?php echo $Sessao::retornaValorFormulario('inscricaoEstadual'); ?>" required>
        </div>
        <div class="espaco-campos" style="margin-bottom: 2.5rem;">
          <label for="endereco" class="form-label">Endereço</label>
          <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Seu endereço" value="<?php echo $Sessao::retornaValorFormulario('endereco'); ?>" required>
        </div>
        <div class="espaco-campos" style="margin-bottom: 2.5rem;">
          <label for="tipoDeServico" class="form-label">Tipo de Serviço</label>
          <input type="text" class="form-control" id="tipoDeServico" name="tipoDeServico" placeholder="Seu tipo de serviço" value="<?php echo $Sessao::retornaValorFormulario('tipoDeServico'); ?>" required>
        </div>
        <div class="espaco-campos" style="margin-bottom: 2.5rem;">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Seu telefone" value="<?php echo $Sessao::retornaValorFormulario('telefone'); ?>" required>
        </div>
        <div class="espaco-campos" style="margin-bottom: 2.5rem;">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Seu email" value="<?php echo $Sessao::retornaValorFormulario('email'); ?>" required>
        </div>
        <div class="d-flex justify-content-center mt-5">
          <button type="submit" class="btn" style="background: linear-gradient(90deg,#ffd600,#ffea00); color: #232526; font-weight: bold; border-radius: 8px; box-shadow: 0 2px 8px #0002; min-width: 160px; display: block; margin: 0 auto;">Salvar</button>
        </div>
      </form>
      <script>
        // Máscara de CNPJ e Telefone
        document.addEventListener('DOMContentLoaded', function() {
          // Máscara CNPJ
          var cnpjInput = document.getElementById('cnpj');
          if (cnpjInput) {
            cnpjInput.addEventListener('input', function(e) {
              let v = e.target.value.replace(/\D/g, '');
              if (v.length > 14) v = v.slice(0, 14);
              v = v.replace(/^(\d{2})(\d)/, '$1.$2');
              v = v.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3');
              v = v.replace(/\.(\d{3})(\d)/, '.$1/$2');
              v = v.replace(/(\d{4})(\d)/, '$1-$2');
              e.target.value = v;
            });
          }

          // Máscara Telefone
          var telInput = document.getElementById('telefone');
          if (telInput) {
            telInput.addEventListener('input', function(e) {
              let v = e.target.value.replace(/\D/g, '');
              if (v.length > 11) v = v.slice(0, 11);
              if (v.length > 10) {
                v = v.replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3');
              } else if (v.length > 6) {
                v = v.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, '($1) $2-$3');
              } else if (v.length > 2) {
                v = v.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
              } else {
                v = v.replace(/^(\d*)/, '($1');
              }
              e.target.value = v;
            });
          }
        });

        function mostrarFeedback() {
          // Validação de e-mail antes do feedback
          var email = document.getElementById('email').value.trim();
          var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailRegex.test(email)) {
            // Alerta customizado
            var overlay = document.createElement('div');
            overlay.style.position = 'fixed';
            overlay.style.top = 0;
            overlay.style.left = 0;
            overlay.style.width = '100vw';
            overlay.style.height = '100vh';
            overlay.style.background = 'rgba(0,0,0,0.4)';
            overlay.style.display = 'flex';
            overlay.style.alignItems = 'center';
            overlay.style.justifyContent = 'center';
            overlay.style.zIndex = 9999;

            var box = document.createElement('div');
            box.style.background = '#fff';
            box.style.padding = '32px 24px';
            box.style.borderRadius = '12px';
            box.style.boxShadow = '0 2px 16px #0003';
            box.style.textAlign = 'center';
            box.innerHTML = '<h4 style="margin-bottom:16px;color:#283593;">Centro universitário Projeção</h4><div style="font-size:18px;">Por favor, informe um e-mail válido.</div><br><button style="margin-top:18px;padding:8px 24px;background:#ffd600;color:#232526;font-weight:bold;border:none;border-radius:6px;cursor:pointer;" id="btnEmailInvalido">OK</button>';

            overlay.appendChild(box);
            document.body.appendChild(overlay);

            document.getElementById('btnEmailInvalido').onclick = function() {
              document.body.removeChild(overlay);
              document.getElementById('email').focus();
            };

            return false;
          }

          // Cria o fundo escurecido
          var overlay = document.createElement('div');
          overlay.style.position = 'fixed';
          overlay.style.top = 0;
          overlay.style.left = 0;
          overlay.style.width = '100vw';
          overlay.style.height = '100vh';
          overlay.style.background = 'rgba(0,0,0,0.4)';
          overlay.style.display = 'flex';
          overlay.style.alignItems = 'center';
          overlay.style.justifyContent = 'center';
          overlay.style.zIndex = 9999;

          // Cria a caixa do alerta
          var box = document.createElement('div');
          box.style.background = '#fff';
          box.style.padding = '32px 24px';
          box.style.borderRadius = '12px';
          box.style.boxShadow = '0 2px 16px #0003';
          box.style.textAlign = 'center';
          box.innerHTML = '<h4 style="margin-bottom:16px;color:#283593;">Centro universitário Projeção</h4><div style="font-size:18px;">Cadastro enviado!</div><br><button style="margin-top:18px;padding:8px 24px;background:#ffd600;color:#232526;font-weight:bold;border:none;border-radius:6px;cursor:pointer;" id="btnOkFeedback">OK</button>';

          overlay.appendChild(box);
          document.body.appendChild(overlay);

          // Ao clicar em OK, remove o alerta e envia o formulário
          document.getElementById('btnOkFeedback').onclick = function() {
            document.body.removeChild(overlay);
            document.getElementById('form_cadastro').onsubmit = null; // Remove o evento para evitar loop
            document.getElementById('form_cadastro').submit();
          };

          return false; // Impede o envio imediato do formulário
        }
      </script>
    </div>
  </div>
</div>
<?php include_once(__DIR__ . '/../layouts/footer.php'); ?>