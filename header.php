<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php $this->options->title(); ?><?php if ($this->options->subSite): ?><?php $this->options->subSite(); ?><?php endif; ?>
    </title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <?php $this->header(); ?>
    <?php if ($this->options->tongjiCode): ?><?php $this->options->tongjiCode(); ?><?php endif; ?>
	<script type="text/javascript">
	if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion .split(";")[1].replace(/[ ]/g,"")<"MSIE9.0")
	{
	alert("IE版本太低，请升级到IE10以上，或使用chrome内核浏览器。");
	}
	</script>
</head>
<body>




