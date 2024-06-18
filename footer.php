<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div id="footer">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>&nbsp;|&nbsp;<a href="<?php $this->options->siteUrl('guestbook.html'); ?>" target="_blank">留言</a><?php if($this->options->showICP): ?><span>&nbsp;|&nbsp;<?php $this->options->showICP(); ?></span><?php endif; ?>&nbsp;<<?php timer_stop($this); ?>s> 
</div>
</div>

<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/keyword.js'); ?>"></script>

</body>
</html>
