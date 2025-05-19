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

                    <form action="http://<?php echo APP_HOST; ?>/usuario/salvar" method="post" id="form_cadastro">
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
                </div>
            </div>
        </div>
    </div>
</div>
