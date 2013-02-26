<?php
    // Carrega a biblioteca Smarty
    define("SMARTY_DIR","/usr/share/php/smarty3/");
    require_once(SMARTY_DIR . 'Smarty.class.php');

    header('Content-type: text/html; charset=utf-8');

    class Smarty_LivroVisitas extends Smarty {

    function __construct(){

        parent::__construct();

        // caminho absoluto para o local da aplicação: /var/www/livroVisitas/
        $caminho = '/var/www/livroVisitas/';

        // apontando a localização onde os diretórios do Smarty estão instalados
        $this->setTemplateDir($caminho . 'templates/');
        $this->setCompileDir($caminho . 'templates_c/');
        $this->setConfigDir($caminho . 'configs/');
        $this->setCacheDir($caminho . 'cache/');

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'Livro de Visitas');
   }

    }
?>
