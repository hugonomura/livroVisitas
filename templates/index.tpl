{* Smarty *}
{include file='topo.tpl'}

<script type="text/javascript">
{literal}
$(document).ready(function(){

  $("#submit").click(function(event) {
              event.preventDefault();
          $.ajax({
              url: "actions/novoRecado.php",
              data: 'novoRecado=' + $("#novoRecado").val(),
              type: 'POST',
              context: jQuery('#recados'),
              success: function(data){
                  this.prepend(data);
              }
          });
  });

  $("#novoRecado").focusin(function(){
    if($("#novoRecado").val() == "Escreva seu recado aqui... (Máximo 255 caracteres)"){
      $("#novoRecado").val("");
    }
  });

  $("#novoRecado").focusout(function(){
    if($("#novoRecado").val() == ""){
        $("#novoRecado").val("Escreva seu recado aqui... (Máximo 255 caracteres)");
      }
  });

});
{/literal}
</script>


{nocache}
  <article id="recados">
  {foreach from=$recados item=recado}
      <header class="titulo">{$recado.user_id} diz:</header>
      <p>{$recado.mensagem}</p>
      <hr>
  {/foreach}
  </article>
{if $smarty.session.usuario eq TRUE}
  <form action="actions/novoRecado.php" method="post">
    <textarea cols="50" rows="6" id="novoRecado">Escreva seu recado aqui... (Máximo 255 caracteres)</textarea>
    <input type="button" value="Enviar" id="submit">
  </form>
{/if}
{/nocache}

{include file='rodape.tpl'}
