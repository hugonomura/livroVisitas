{* Smarty *}
{include file='topo.tpl'}
<link rel="stylesheet" type="text/css" href="css/form.css" />
<script type="text/javascript">
{literal}
$(document).ready(function(){
  $("#cadastro").keypress(function() {
    // alert("Handler for .keypress() called.");
    var keycode = (event.keyCode ? event.keyCode : event.which);
     if(keycode == 13) {
      $("#submit").click();
     }
  });

  $("#submit").click(function(){
    var arr = $("input");
    for(i = 0; i < arr.length; i++){
      if(arr[i].value == ""){
        $("#aside-erro").html("<b>Preencha todos os campos!</b>");
        return;
      }
    }
    if($("#senha").val() != $("#confirma-senha").val()){
      $("#aside-erro").html("<b>Senha e confirma senha devem ser iguais!</b>");
      return;
    }
    data = {
                nome:$("#nome").val(),
                email:$("#email").val(),
                site:$("#site").val(),
                login:$("#login").val(),
                senha:$("#senha").val(),
                confirma_senha:$("#confirma-senha").val()
            };
    $.post("actions/cadastrar.php",data,
      function(retorno){
        if(retorno == "cadastrado"){
          window.location.replace("index.php");
        }else{
          $('#aside-erro').html(retorno);
        }
    }, "html");
  });
});
{/literal}
</script>
{nocache}
<article class="content">
  <form id="cadastro">
    <h2>Cadastro</h2>
    <hr>
    <p><label for="nome">Nome</label><input type="text" id="nome" name="nome" /></p>
    <p><label for="email">Email</label><input type="email" id="email" name="email" /></p>
    <p><label for="site">Website</label><input type="url" id="site" name="site" value="http://" /></p>
    <p><label for="login">Login</label><input type="text" id="login" name="login" /></p>
    <p><label for="senha">Senha</label><input type="password" id="senha" name="senha" /></p>
    <p><label for="confirma-senha">Confirmar senha</label><input type="password" id="confirma-senha" name="confirma-senha" /></p>
    <p><input type="button" value="Enviar" id="submit" /></p>
    <aside id="aside-erro"><b></b></aside>
  </form>
</article>
{/nocache}
{include file='rodape.tpl'}
