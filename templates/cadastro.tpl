{include file='topo.tpl'}

<style type="text/css">
  .content label {
    float: left; margin-right:15px;
    width: 120px;
    font-weight: bold;
  }
  .content input {
    width: 180px;
    margin-bottom: 5px;
  }
  #submit {
    margin-left: 120px;
    margin-top: 5px;
    width: 90px;
  }

  h2{
    width: 100%;
    text-align: center;
    margin-bottom: 0;
  }
  article.content {
    width: 50%;
    margin: auto;
    margin-top: 10%;
    border: 1px solid #ebeff8;
    border-radius: 10px;
    padding: 5px auto;
  }
  article.content form p {
    margin-left: 20%;
    width: 80%;
  }
</style>

<article class="content">
  <form method="post" action="actions/cadastrar.php">
    <h2>Cadastro</h2>
    <hr>
    <p><label for="nome">Nome</label><input type="text" id="nome" name="nome" /></p>
    <p><label for="email">Email</label><input type="email" id="email" name="email" /></p>
    <p><label for="site">Website</label><input type="url" id="site" name="site" /></p>
    <p><label for="login">Login</label><input type="text" id="login" name="login" /></p>
    <p><label for="senha">Senha</label><input type="password" id="senha" name="senha" /></p>
    <p><input type="submit" valeu="Enviar" /></p>
  </form>
</article>

{include file='rodape.tpl'}
