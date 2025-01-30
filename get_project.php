<?php
define('SITE_ROOT', str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']).'/');
$page_params = array();
$page_params['title'] = 'Главная';
include SITE_ROOT.'/tpl/header.php'; 
?>


<div class="content">
<div style="width: 55%;margin:17px auto;">
<div class="project_block" style="width:33%;float: left;margin:-3px;text-align: center;">
<div class="project_block_wrap" style="padding:9px">
<div class="project_photo_wrap">
	<div class="project_photo" style="width:100%;height:240px;background-image: url('/image/1624295141_16-phonoteka_org-p-oboi-vodopad-krasivo-19.jpg');background-position: center;background-size: cover;border-radius: 27px;"></div>
</div>
<div class="button_action_wrap" style="color:#000">
<button class="button_black">Поддержать</button>
</div>
</div>
</div>












<div style="margin-left:26%;margin-left: 34%;">
<div style="font-weight: bold;padding:14px 0 7px">Про путь узы</div>
<div style="line-height: 23px;margin-bottom: 19px;"> 

1. Резников Борис Дмитриевич (1924-1993), ветеран Великой Отечественно войны, врач-хирург, кандидат медицинских наук, с 1961 по 1984гг. возглавлял Саратовское областное здравоохранение, награжден орденами и медалями;
2. Кузнецова (Резникова) Софья Дмитриевна (1927-2006), врач-терапевт, «Заслуженный работник здравоохранения Кубани», имеет правительственные награды. Похоронена на Краснодарском военно-почетном кладбище;
3. Лысикова (Резникова) Ольга Дмитриевна (1938 г.р.), зубной врач, пенсионерка, проживает в г. Саратове.
В 1953 году дедушка Борис Дмитриевич женился на бабушке Зое Тимофеевне. Она работала заведующей педиатрическим отделением в Городской клинической больнице № 3. У них родилось два сына:
1. Резников Дмитрий Борисович - ортопед, травматолог высшей категории.
2. Резников Юрий Борисович (отец Вадима Юрьевича) - врач-бактериолог, врач- гериатр.

</div>	
</div>

<div>
	












<script src="https://vk.com/js/api/openapi.js?169" type="text/javascript"></script>
<script type="text/javascript">
      VK.init({
        apiId: 52990226,
        onlyWidgets: true
      });
</script>
<div id="vk_comments" style="background-color:red"></div>
<script type="text/javascript">
  VK.Widgets.Comments('vk_comments');
</script>











</div>

</div>


</div>

<div style="background-color: #000;z-index: 9;opacity: .3;position: fixed;left:0;top:0;right:0;bottom:0; z-index: 3;"></div>
<div class="popup_box_block" style="position:fixed;top:0;left:0;top:0;right:0;bottom:0;z-index: 5; ">

<div class="popup_box_wrap" style="background-color: #FFF;width: 33%;margin:75px auto;border-radius: 7px;">
  
  <div class="popup_box_head" style="height: 51px;line-height: 51px;border-bottom: 1px solid #808080;padding:0 14px;">
  <div class="popup_box_head_close" style="float:right;">закрыть</div>
  <div class="popup_box_head_title">Поддержать автора</div></div>

  <div class="popup_box_body" style="background-color:#EEE"><div style="padding:19px"><div style="margin-bottom: 11px;">Выберте сумму</div>
        <div style="margin-bottom: 15px;"><input type="text" placeholder="Сума" class="text_field"></div>
<div style="margin-bottom: 11px;">Выберте платежную систему</div>
    <img src="/image/Vidy-elektronnyh-platezhnyh-sistem.png" style="width:100%">
<div style="margin-top: 9px;"><button style="height:44px ;width: 100%;   height: 37px;
    padding: 0 11px;
    border-radius: 7px;
    border: 1px solid #000;" onClick="">Перевести</button></div>
  </div>




    </div>
  <div class="popup_box_bottom"></div>
</div>
  
</div>


<?php
include SITE_ROOT.'/tpl/footer.php'; 
?>