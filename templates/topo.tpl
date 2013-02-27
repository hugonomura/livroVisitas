{* Smarty *}
<html>
<head>
  <title>Livro de Visitas | {$titulo}</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>
<body>
  <header class="principal">
    <a href="index.php"><h1 id="logo">Livro de Visitas</h1></a>
    <nav class="menu principal">
      <ul class="menu">
        {nocache}
        {if $smarty.session.usuario eq TRUE}
        <li class={$index}><a href="index.php">logado</a></li>
        <li class={$entrar}><a href="login.php"></a></li>
        <li class={$cadastro}><a href="actions/sair.php">Sair</a></li>
        {else}
        <li class={$index}><a href="index.php">Recados</a></li>
        <li class={$entrar}><a href="login.php">Entrar</a></li>
        <li class={$cadastro}><a href="cadastro.php">Cadastrar-se</a></li>
        {/if}
        {/nocache}
      </ul>
    </nav>
  </header>
  <section class="principal">
