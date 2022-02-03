<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvimento Web I</title>
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="navbar-fixed nav-bg">
        <nav class="nav-bg">
        <div class="nav-wrapper container">
            <a href="index.php" class="brand-logo"><img src="img/logo-mercado.png" style="width: 95px;" alt="Logo"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
                <li><a href="estoque.php">Estoque</a></li>
                <li><a href="vendas.php">Vendas</a></li>
                <li><a href="entrada.php">Entrada</a></li>
                <li><a href="estatisticas.php">Estatísticas</a></li>
            </ul>
        </div>
        </nav>
    </div>
    <!-- MENU MOBILE -->
    <ul class="sidenav" id="mobile-demo">
        <li><a href="index.php">Home</a></li>
        <li><a href="estoque.php">Estoque</a></li>
        <li><a href="vendas.php">Vendas</a></li>
        <li><a href="entrada.php">Entrada</a></li>
        <li><a href="estatisticas.php">Estatísticas</a></li>
    </ul>