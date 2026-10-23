<?php
if (!isset($pagina_ativa)) { $pagina_ativa = ''; }
function ativo($nome, $pagina_ativa) {
    return $nome === $pagina_ativa ? ' ativo' : '';
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Painel - Gestão de Produtos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="topo">
    <div class="financiadores">
        <img src="imagens/logo_financiadores.png" alt="Financiadores">
    </div>
    <div class="logos">
        <img src="imagens/logo_escola.png" alt="Escola Profissional OFICINA">
    </div>
    <div class="titulo">Módulo VII &mdash; Acesso a Bases de Dados via Web</div>
</div>
<div class="layout">
    <nav class="menu">
        <a href="painel.php" class="<?php echo ativo('painel', $pagina_ativa); ?>">Início</a>
        <a href="categorias_listar.php" class="<?php echo ativo('categorias', $pagina_ativa); ?>">Categorias</a>
        <a href="produtos_listar.php" class="<?php echo ativo('produtos', $pagina_ativa); ?>">Produtos</a>
        <a href="administradores_listar.php" class="<?php echo ativo('administradores', $pagina_ativa); ?>">Administradores</a>
        <a href="logout.php">Sair</a>
    </nav>
    <main class="conteudo">