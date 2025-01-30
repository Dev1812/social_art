<?php
define('SITE_ROOT', str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']).'/');
$page_params = array();
$page_params['title'] = 'Главная';
include SITE_ROOT.'/tpl/header.php'; 
?>
<div class="content" style="background-color:#EEE;">

<?php
for($i=0;$i<9;$i++) {
?><a href="/get_project.php?project_id=<?php echo $i;?>">
<div class="project_block" style="width:25%;display: inline-block;margin:-3px;text-align: center;">
<div class="project_block_wrap" style="padding:9px">
<div class="project_photo_wrap">
	<div class="project_photo" style="width:100%;height:240px;background-image: url('/image/1624295141_16-phonoteka_org-p-oboi-vodopad-krasivo-19.jpg');background-position: center;background-size: cover;border-radius: 27px;"></div>
</div>
<div class="title" style="color:#000">Алишеер</div>
</div>
</div></a>
<?php
}
?>

</div>
<?php
include SITE_ROOT.'/tpl/footer.php'; 
?>