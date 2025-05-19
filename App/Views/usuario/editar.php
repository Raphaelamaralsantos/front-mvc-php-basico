<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h1 class="h2">Editar Usuário</h1>

    <form action="http://<?php echo APP_HOST; ?>/usuario/atualizar" method="post">
        <input type="hidden" name="id" value="<?php echo $viewVar['usuario']->getId(); ?>">

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $viewVar['usuario']->getNome(); ?>" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $viewVar['usuario']->getEmail(); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="http://<?php echo APP_HOST; ?>/usuario/listar" class="btn btn-secondary">Cancelar</a>
    </form>
</main>