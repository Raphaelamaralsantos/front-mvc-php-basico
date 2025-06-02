<div class="container" style="margin-top: 80px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0" style="border-radius: 16px;">
                
                <div class="card-body p-5">
                    <h3 class="text-center mb-4" style="color: #1a237e; font-weight: 600;">
                        Cadastro de Usuário
                    </h3>

                    <?php if($Sessao::retornaMensagem()){ ?>
                        <div class="alert alert-warning" role="alert">
                            <?php echo $Sessao::retornaMensagem(); ?>
                        </div>
                    <?php } ?>

                    <form action="http://<?php echo APP_HOST; ?>/usuario/salvar" method="post" id="form_cadastro" onsubmit="return mostrarFeedback();">
                        <div class="form-group mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input 
                                type="text" 
                                class="form-control"  
                                name="nome" 
                                placeholder="Seu nome" 
                                value="<?php echo $Sessao::retornaValorFormulario('nome'); ?>" 
                                required
                            >
                        </div>
                        <div class="form-group mb-4">
                            <label for="email" class="form-label">E-mail</label>
                            <input 
                                type="email" 
                                class="form-control" 
                                name="email" 
                                placeholder="seu@email.com" 
                                value="<?php echo $Sessao::retornaValorFormulario('email'); ?>" 
                                required
                            >
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block" style="width: 100%; padding: 10px 0;">
                                Salvar
                            </button>
                        </div>
                    </form>
                    <script>
                        function mostrarFeedback() {
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
                            box.innerHTML = '<h4 style="margin-bottom:16px;color:#283593;">Centro universitário Projeção</h4><div style="font-size:18px;">Cadastro enviado! Aguarde o processamento.</div><br><button style="margin-top:18px;padding:8px 24px;background:#ffd600;color:#232526;font-weight:bold;border:none;border-radius:6px;cursor:pointer;" id="btnOkFeedback">OK</button>';

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
    </div>
</div>