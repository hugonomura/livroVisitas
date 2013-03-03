{* Smarty *}
{include file='topo.tpl'}
<link rel="stylesheet" type="text/css" href="css/perfil.css" />
<article class="content">
{nocache}
<h2>{$user->get('nome')}</h2>
<hr>
{if $smarty.session.user_id eq $user->get('id')}
<p><span class="titulo">ID:</span><span class="conteudo"> {$user->get('id')}</span><br /></p>
<p><span class="titulo">Nome:</span><span class="conteudo"> {$user->get('nome')}</span><br /></p>
<p><span class="titulo">Emai:</span><span class="conteudo"> <a href="mailto:{$user->get('email')}" id="email">{$user->get('email')}</a></span><br /></p>
<p><span class="titulo">Website:</span><span class="conteudo"> <a href="{$user->get('website')}" target="blank"  id="website">{$user->get('website')}</a></span><br /></p>
<p><span class="titulo">Login:</span><span class="conteudo"> </span>{$user->get('login')}</p>
{else}
<p><span class="titulo">Nome:</span><span class="conteudo"> {$user->get('nome')}</span><br /></p>
<p><span class="titulo">Emai:</span><span class="conteudo"> <a href="mailto:{$user->get('email')}" id="email">{$user->get('email')}</a></span><br /></p>
<p><span class="titulo">Website:</span><span class="conteudo"> <a href="{$user->get('website')}" target="blank" id="website">{$user->get('website')}</a></span></p>
{/if}
{/nocache}
</article>

{include file='rodape.tpl'}
