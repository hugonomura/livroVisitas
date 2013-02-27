{include file='topo.tpl'}

<link rel="stylesheet" type="text/css" href="css/form.css" />
<script type="text/javascript">
{literal}
$(document).ready(function(){
  $("#submit").click(function(){
    var arr = $("input");
    for(i = 0; i < arr.length; i++){
      if(arr[i].value == ""){
        $("#aside-erro").html("<b>Preencha todos os campos!</b>");
        return;
      }
    }
    data = {
                nome:$("#nome").val(),
                email:$("#email").val(),
                site:$("#site").val(),
                login:$("#login").val(),
                senha:$("#senha").val()
            };
    $.post("actions/cadastrar.php",data,
      function(retorno){
        $('#aside-erro').html(retorno);
    }, "html");
  });
});
{/literal}
</script>

<article class="content">
  <form id="cadastro" method="post" action="actions/cadastrar.php">
    <h2>Cadastro</h2>
    <hr>
    <p><label for="nome">Nome</label><input type="text" id="nome" name="nome" /></p>
    <p><label for="email">Email</label><input type="email" id="email" name="email" /></p>
    <p><label for="site">Website</label><input type="url" id="site" name="site" value="http://" /></p>
    <p><label for="login">Login</label><input type="text" id="login" name="login" /></p>
    <p><label for="senha">Senha</label><input type="password" id="senha" name="senha" /></p>
    <p><input type="button" value="Enviar" id="submit" /></p>
    <aside id="aside-erro"><b>{nocache}{$smarty.session.mensagem}{/nocache}</b></aside>
  </form>
</article>

{include file='rodape.tpl'}
