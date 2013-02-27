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
    $.post("actions/entrar.php",data,
      function(retorno){
        $('#aside-erro').html(retorno);
    }, "html");
  });
});
{/literal}
</script>

<article class="content">
  <form id="login" method="post" action="actions/cadastrar.php">
    <h2>Login</h2>
    <hr>
    <p><label for="login">Login</label><input type="text" id="login" name="login" /></p>
    <p><label for="senha">Senha</label><input type="password" id="senha" name="senha" /></p>
    <p><input type="button" value="Entrar" id="submit" /></p>
    <aside id="aside-erro"><b>{nocache}{$smarty.session.mensagem}{/nocache}</b></aside>
  </form>
</article>

{include file='rodape.tpl'}
