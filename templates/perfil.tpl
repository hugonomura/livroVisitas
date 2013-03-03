{* Smarty *}
{include file='topo.tpl'}
<link rel="stylesheet" type="text/css" href="css/perfil.css" />
<article class="content">
{nocache}
<h2>{$user.nome}</h2>
<hr>
{if $smarty.session.user_id eq $user.id}
<p><span class="titulo">ID:</span><span class="conteudo"> {$user.id}</span><br /></p>
<p><span class="titulo">Nome:</span><span class="conteudo"> {$user.nome}</span><br /></p>
<p><span class="titulo">Emai:</span><span class="conteudo"> <a href="mailto:{$user.email}" id="email">{$user.email}</a></span><br /></p>
<p><span class="titulo">Website:</span><span class="conteudo"> <a href="{$user.website}" target="blank"  id="website">{$user.website}</a></span><br /></p>
<p><span class="titulo">Login:</span><span class="conteudo"> </span>{$user.login}</p>
{else}
<p><span class="titulo">Nome:</span><span class="conteudo"> {$user.nome}</span><br /></p>
<p><span class="titulo">Emai:</span><span class="conteudo"> <a href="mailto:{$user.email}" id="email">{$user.email}</a></span><br /></p>
<p><span class="titulo">Website:</span><span class="conteudo"> <a href="{$user.website}" target="blank" id="website">{$user.website}</a></span></p>
{/if}
{/nocache}
</article>

{include file='rodape.tpl'}
