<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro realizado com sucesso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #232526 0%, #ffd600 100%);
            min-height: 100vh;
        }
        .success-box {
            border-radius: 16px;
            background: #fff;
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
    <div class="container" style="margin-top: 80px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="success-box">
                    <div class="success-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 11.03a.75.75 0 0 0 1.07 0l3.992-3.992a.75.75 0 1 0-1.06-1.06L7.5 9.439 6.03 7.97a.75.75 0 1 0-1.06 1.061l1.999 2z"/>
                        </svg>
                    </div>
                    <h3>Parabéns <?php echo $Sessao::retornaValorFormulario('nome'); ?>!</h3>
                    <p class="mb-4">Seu cadastro foi realizado com sucesso.</p>
                    <a href="http://<?php echo APP_HOST; ?>/fornecedor/cadastro" class="btn-voltar">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>