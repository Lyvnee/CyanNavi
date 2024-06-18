<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 作为网站LOGO，留空则直接显示站点文字标题'));
    $form->addInput($logoUrl);

    $subSite = new Typecho_Widget_Helper_Form_Element_Text('subSite', NULL, NULL, _t('站点副标题'), _t('在这里填入一段文字，作为站点副标题和主标题一起显示在浏览器标题栏'));
    $form->addInput($subSite);
	
    $showICP = new Typecho_Widget_Helper_Form_Element_Text('showICP', NULL, NULL, _t('ICP备案号'), _t('在这里填入你的ICP备案号'));
    $form->addInput($showICP);
	
    $tongjiCode = new Typecho_Widget_Helper_Form_Element_Textarea('tongjiCode', NULL, NULL, _t('站点统计'), _t('在这里填入站点统计代码，例如百度统计。'));
    $form->addInput($tongjiCode);
}

function themeFields($layout) {
    $naviUrl = new Typecho_Widget_Helper_Form_Element_Text('naviUrl', NULL, _t('https://'), _t('网址'), _t('在这里填入网址'));
    $naviUrl->input->setAttribute('style', 'width:100%');
    $layout->addItem($naviUrl);

    $naviLogo = new Typecho_Widget_Helper_Form_Element_Text('naviLogo', NULL,NULL, _t('网站LOGO'), _t('在这里填入网站logo地址，建议大小20x20px'));
    $naviLogo->input->setAttribute('style', 'width:100%');
    $layout->addItem($naviLogo);
	
	$naviDesc = new Typecho_Widget_Helper_Form_Element_Textarea('naviDesc', NULL,NULL, _t('网站简介'), _t('在这里填入网站的简介'));
    $naviDesc->input->setAttribute('style', 'width:100%');
    $layout->addItem($naviDesc); 
	
	$naviCustom = new Typecho_Widget_Helper_Form_Element_Textarea('naviCustom', NULL,NULL, _t('自定义数据'), _t('该项用于用户自定义数据扩展'));
    $naviCustom->input->setAttribute('style', 'width:100%');
    $layout->addItem($naviCustom); 	
}

function timer_start() {
    global $timestart;
    $mtime = explode( ' ', microtime() );
    $timestart = $mtime[1] + $mtime[0];
    return true;
}
timer_start();
 
function timer_stop( $display = 0, $precision = 3 ) {
    global $timestart, $timeend;
    $mtime = explode( ' ', microtime() );
    $timeend = $mtime[1] + $mtime[0];
    $timetotal = $timeend - $timestart;
    $r = number_format( $timetotal, $precision );
    if ( $display )
        echo $r;
    return $r;
}
