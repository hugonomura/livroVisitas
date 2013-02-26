{include file='topo.tpl'}

<link rel="stylesheet" type="text/css" href="css/form.css" />
<script type="text/javascript" src="js/form.js"></script>

<article class="content">
  <form id="login" method="post" action="actions/cadastrar.php">
    <h2>Login</h2>
    <hr>
    <p><label for="login">Login</label><input type="text" id="login" name="login" /></p>
    <p><label for="senha">Senha</label><input type="password" id="senha" name="senha" /></p>
    <p><input type="button" value="Entrar" id="submit" onclick=verificaCampos("login") /></p>
    <aside id="aside-erro"><b>{nocache}{$smarty.session.mensagem}{/nocache}</b></aside>
  </form>
</article>

{include file='rodape.tpl'}
