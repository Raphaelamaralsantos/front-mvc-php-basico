<nav class="navbar navbar-inverse navbar-fixed-top" style="background: linear-gradient(90deg, #1a237e, #283593); border:none; box-shadow: 0 2px 8px rgba(0,0,0,0.2);">
    <div class="container">
        <div class="navbar-header">
            <button 
                type="button" 
                class="navbar-toggle collapsed" 
                data-toggle="collapse" 
                data-target="#navbar" 
                aria-expanded="false" 
                aria-controls="navbar"
                style="border-color: #ffffff;"
            >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar" style="background-color: #fff;"></span>
                <span class="icon-bar" style="background-color: #fff;"></span>
                <span class="icon-bar" style="background-color: #fff;"></span>
            </button>
            <a class="navbar-brand glow-text" href="http://<?php echo APP_HOST; ?>" style="font-weight: 700; font-size: 1.6rem; color: #ffeb3b; letter-spacing: 1px;">
                Centro Universitário Projeção
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li <?php if($viewVar['nameController'] == "HomeController") { ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>" style="color: #fff; font-weight: 500;">Home</a>
                </li>
                <li <?php if($viewVar['nameController'] == "UsuarioController") { ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>/usuario/cadastro" style="color: #fff; font-weight: 500;">Cadastro de Usuário</a>
                </li>
                <li <?php if($viewVar['nameController'] == "FornecedorController") { ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>/fornecedor/cadastro" style="color: #fff; font-weight: 500;">Cadastro de Fornecedor</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
/* Animação de brilho suave */
@keyframes brilho {
    0% {
        text-shadow: 0 0 5px #ffeb3b, 0 0 10px #ffeb3b;
    }
    50% {
        text-shadow: 0 0 10px #fff176, 0 0 20px #fff176;
    }
    100% {
        text-shadow: 0 0 5px #ffeb3b, 0 0 10px #ffeb3b;
    }
}

.glow-text {
    animation: brilho 2s infinite ease-in-out;
}

/* Botão ativo */
.navbar-inverse .navbar-nav > li.active > a,
.navbar-inverse .navbar-nav > li.active > a:hover,
.navbar-inverse .navbar-nav > li.active > a:focus {
    background-color: #ffeb3b !important;
    color: #1a237e !important;
    font-weight: 700;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

/* Hover nos links */
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
    background-color: rgba(255, 235, 59, 0.3);
    color: #fff;
    transition: background-color 0.3s ease;
}
</style>
