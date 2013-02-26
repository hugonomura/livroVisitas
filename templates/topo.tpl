{* Smarty *}
<html>
<head>
  <title>Livro de Visitas | {$titulo}</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
  <header class="principal">
    <a href="#"><h1 id="logo">Livro de Visitas</h1></a>
    <nav class="menu principal">
      <ul class="menu">
        <li class={$index}><a href="index.php">Recados</a></li>
        <li class=${$entrar}><a href="login.php">Entrar</a></li>
        <li class={$cadastro}><a href="cadastro.php">Cadastrar-se</a></li>
      </ul>
    </nav>
  </header>
  <section class="principal">
