<?php
define('SITE_ROOT', str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']).'/');
$page_params = array();
$page_params['title'] = 'Главная';
include SITE_ROOT.'/tpl/header.php'; 
?>
<div class="content"></div>
<?php
include SITE_ROOT.'/tpl/footer.php'; 
?>