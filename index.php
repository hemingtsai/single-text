<?php
/**
 * 一个Typecho主题
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>
<?php if ($this->is('archive')) { ?>
<div class="crumb"><strong>" <?php $this->archiveTitle(['category' => _t('%s'),'search' => _t('搜索结果'),'tag' => _t('标签：%s'),'author' => _t('作者：%s')], '', ''); ?> "</strong><?php if ( $this->is('search') ) { ?>关键词：<?php echo $this->archiveTitle('','',''); ?><?php } else { ?> 下的文章<?php } ?></div>
<?php } ?>
<?php if ($this->have()): ?>
<?php while ($this->next()): ?>
<article>
<h2 class="title"><a href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a></h2>
<?php $this->category(",", true, "无"); echo " &middot; ";?><time datetime="<?php $this->date(); ?>"><?php $this->date(); ?></time>
<div class="desc"><?php $this->excerpt(110, " ..."); ?></div>
</article>
<?php endwhile; ?>
<?php if ( $this->is('archive') || $this->is('index') ) { ?>
<div class="post-pagination">
<?php $this->pageNav('&nbsp;←&nbsp;', '&nbsp;→&nbsp;', '5', '…'); ?>
</div>
<?php }; ?>
<?php else : ?><article><em>空空如也 ...</em></article><?php endif; ?>
<?php $this->need('footer.php'); ?>
