<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Briefing</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="responsividade.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
    .show {
        transform: translateX(0%);
    }
    </style>
</head>
<body>
<section class="formulario">
<form>
<div class="form final">
        <span class="check">
            <i class="fa fa-check"></i>
        </span>
        &nbsp;&nbsp;Enviado
    </div>
    <button type="button" class="button-5"><a href="johnnyvasconcelos.com">Voltar</a></button>
</form>
<div style="text-align: left; padding: 12px;">
<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$empresa = $_POST["empresa"];
$ramo = $_POST["ramo"];
$whatsapp = $_POST["whatsapp"];
$whatsappempresa = $_POST["whatsapp-empresa"];
$redessociais = $_POST["redes-sociais"];
$produto = $_POST["produto"];
$horario = $_POST["horario"];
$descricao = $_POST["descricao"];
$slogan = $_POST["slogan"];
$cnpj = $_POST["cnpj"];
$porque = $_POST["porque"];
$usuarios = $_POST["usuarios"];
$paginas = $_POST["paginas"];
$alteracao = $_POST["alteracao"];
$concorrentes = $_POST["concorrentes"];
$sitebonito = $_POST["sitesbonitos"];
$logotipo = $_POST["logotipo"];
$logotipoimagem = $_POST["logotipo-img"];
$dominio = $_POST["dominio"];
$cores = $_POST["cores"];
$observacoes = $_POST["observacoes"];

echo "<br>";
echo "<br>";
echo "<br>";
echo "<h3 style='color:#5B2D72; font-size:25px'>Dados</h3>";
echo "<strong>Cliente:</strong> $nome";
echo "<br>";
echo "<strong>Email:</strong> $email";
echo "<br>";
echo "<strong>Empresa:</strong> $empresa";
echo "<br>";
echo "<strong>Ramo:</strong> $ramo";
echo "<br>";
echo "<strong>Whatsapp do cliente:</strong> $whatsapp";
echo "<br>";
echo "<strong>Whatsapp da empresa:</strong> $whatsappempresa";
echo "<br>";
echo "<strong>Redes sociais da empresa:</strong> $redessociais";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h3 style='color:#5B2D72; font-size:25px'>Sobre a empresa</h3>";
echo "<strong>Produtos da empresa:</strong> $produto";
echo "<br>";
echo "<strong>Horário:</strong> $horario";
echo "<br>";
echo "<strong>Descrição:</strong> $descricao";
echo "<br>";
echo "<strong>Slogan (para o banner):</strong> $slogan";
echo "<br>";
echo "<strong>CNPJ / Inscrição Estadual:</strong> $cnpj";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h3 style='color:#5B2D72; font-size:25px'>Criação</h3>";
echo "<strong>O que o cliente espera realizar:</strong> $porque";
echo "<br>";
echo "<strong>O que o cliente espera dos usuários:</strong> $usuarios";
echo "<br>";
echo "<strong>Quantas páginas o site terá:</strong> $paginas";
echo "<br>";
echo "<strong>Precisa fazer alterações recorrentes:</strong> $alteracao";
echo "<br>";
echo "<strong>Sites de concorrentes:</strong> $concorrentes";
echo "<br>";
echo "<strong>Sites que o cliente acha bonito:</strong> $sitebonito";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h3 style='color:#5B2D72; font-size:25px'>Finalização</h3>";
echo "<strong>Logotipo link:</strong> $logotipo";
echo "<br>";
echo "<strong>Logotipo imagem:</strong> $logotipoimagem";
echo "<br>";
echo "<strong>Domínio e hospedagem:</strong> $dominio";
echo "<br>";
echo "<strong>Cores da marca:</strong> $cores";
echo "<br>";
echo "<strong>Observações finais:</strong> $observacoes";
echo "<br>";
?>
</div>
</section>
<script src="script.js"></script>
<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"
      data-auto-a11y="true"></script>
    
</body>
</html>