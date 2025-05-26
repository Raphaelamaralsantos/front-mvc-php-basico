<nav class="navbar navbar-inverse navbar-fixed-top" style="background: linear-gradient(90deg, #1a237e, #283593); border:none; box-shadow: 0 2px 8px rgba(0,0,0,0.2); min-height: 80px;">
    <div class="container" style="height: 80px;">
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
            <a class="navbar-brand glow-text" href="http://<?php echo APP_HOST; ?>" style="font-weight: 800; font-size: 2rem; color: #ffeb3b; letter-spacing: 1px; line-height: 60px;">
                Centro Universitário Projeção
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right" style="height: 80px; display: flex; align-items: center;">
                <li <?php if($viewVar['nameController'] == "HomeController") { ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>" style="color: #fff; font-weight: 500; font-size: 1.2rem;">
                        <!-- Ícone Home SVG Bootstrap -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16" style="margin-right: 6px; vertical-align: -3px;">
                          <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 2 7.5V14a1 1 0 0 0 1 1h3.5a.5.5 0 0 0 .5-.5V11a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v3.5a.5.5 0 0 0 .5.5H13a1 1 0 0 0 1-1V7.5a.5.5 0 0 0-.146-.354l-6-6z"/>
                          <path d="M13 2.5V6l.5.5L14 7V2.5a1 1 0 0 0-1-1h-1a1 1 0 0 0-1 1V3l.5.5L13 2.5z"/>
                        </svg>
                        Home
                    </a>
                </li>
                <li <?php if($viewVar['nameController'] == "UsuarioController") { ?> class="active" <?php } ?>>
                    <a href="http://<?php echo APP_HOST; ?>/usuario/cadastro" style="color: #fff; font-weight: 500; font-size: 1.2rem;">
                        <!-- Ícone Usuário SVG Bootstrap preenchido -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="margin-right: 6px; vertical-align: -3px;">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        Cadastro de Usuário
                    </a>
                </li>

<li <?php if($viewVar['nameController'] == "FornecedorController") { ?> class="active" <?php } ?>>
    <a href="http://<?php echo APP_HOST; ?>/fornecedor/cadastro" style="color: #fff; font-weight: 500; font-size: 1.2rem;">
        <!-- Ícone Fornecedor SVG Bootstrap (skyscraper) -->
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 6px; vertical-align: -3px;">
          <rect width="4" height="14" x="1" y="1" rx="1" fill="#90caf9"/>
          <rect width="4" height="10" x="6" y="5" rx="1" fill="#42a5f5"/>
          <rect width="4" height="16" x="11" y="0" rx="1" fill="#1976d2"/>
          <rect width="1" height="2" x="2.5" y="3" fill="#fff"/>
          <rect width="1" height="2" x="2.5" y="7" fill="#fff"/>
          <rect width="1" height="2" x="2.5" y="11" fill="#fff"/>
          <rect width="1" height="2" x="7.5" y="7" fill="#fff"/>
          <rect width="1" height="2" x="7.5" y="11" fill="#fff"/>
          <rect width="1" height="2" x="12.5" y="3" fill="#fff"/>
          <rect width="1" height="2" x="12.5" y="7" fill="#fff"/>
          <rect width="1" height="2" x="12.5" y="11" fill="#fff"/>
        </svg>
        Cadastro de Fornecedor
    </a>
</li>
            </ul>
        </div>
    </div>
</nav>

<style>
@keyframes brilho {
    0% { text-shadow: 0 0 1px #ffeb3b, 0 0 2px #ffeb3b; }
    50% { text-shadow: 0 0 2px #fff176, 0 0 4px #fff176; }
    100% { text-shadow: 0 0 1px #ffeb3b, 0 0 2px #ffeb3b; }
}
.glow-text {
    animation: brilho 2s infinite ease-in-out;
}
.navbar-inverse .navbar-nav > li.active > a,
.navbar-inverse .navbar-nav > li.active > a:hover,
.navbar-inverse .navbar-nav > li.active > a:focus {
    background-color: #ffeb3b !important;
    color: #1a237e !important;
    font-weight: 700;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
    background-color: rgba(255, 235, 59, 0.3);
    color: #fff;
    transition: background-color 0.3s ease;
}
</style>