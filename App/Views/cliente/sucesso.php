<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro realizado com sucesso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Ícone do Bootstrap (opcional) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background: url('https://png.pngtree.com/thumb_back/fh260/background/20220522/pngtree-abstract-white-and-light-gray-wave-modern-soft-luxury-texture-with-image_1379862.jpg') no-repeat center center fixed !important;
            
        }
        .success-box {
            border-radius: 20px;
            background: rgba(255,255,255,0.97);
            box-shadow: 0 4px 24px rgba(40, 53, 147, 0.10), 0 1.5px 8px #ffd60055;
            padding: 48px 36px 36px 36px;
            max-width: 520px;
            margin: 100px auto 0 auto;
            text-align: center;
            border-top: 6px solid #ffd600;
        }
        .success-icon {
            font-size: 60px;
            color: #43a047;
            margin-bottom: 18px;
        }
        .success-box h3 {
            color: #283593;
            font-weight: bold;
            margin-bottom: 18px;
            font-size: 2rem;
        }
        .success-box p {
            color: #232526;
            font-size: 1.2rem;
            margin-bottom: 32px;
        }
        .btn-voltar {
            background: linear-gradient(90deg,#ffd600,#ffea00);
            color: #232526;
            font-weight: bold;
            border-radius: 8px;
            padding: 12px 36px;
            border: none;
            box-shadow: 0 2px 8px #0002;
            font-size: 1.1rem;
            transition: background 0.2s;
            text-decoration: none;
            display: inline-block;
        }
        .btn-voltar:hover {
            background: linear-gradient(90deg,#ffea00,#ffd600);
            color: #283593;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="success-box">
    <div class="success-icon">
        <i class="bi bi-check-circle-fill"></i>
    </div>
    <h3>Parabéns, <?php echo $Sessao::retornaValorFormulario('nome'); ?>!</h3>
    <p>Seu cadastro foi realizado com sucesso.</p>
    <a href="http://<?php echo APP_HOST; ?>/usuario/cadastro" class="btn-voltar mt-2">Voltar</a>
</div>

</body>
</html>