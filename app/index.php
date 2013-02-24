<?php

require_once('setup.php');
$smarty = new Smarty_LivroVisitas;
$smarty->assign('name', 'Thomas');

$smarty->display('index.tpl');
?>
