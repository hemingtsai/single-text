<?php
/**
 * 搜索模板
 *
 * @package custom
 */
if (!defined("__TYPECHO_ROOT_DIR__")) {
    exit();
} ?>
<?php $this->need("header.php"); ?>
<h1 class="title">搜索<?php if (
    $this->is("search")
): ?>关键词：<?php echo $this->archiveTitle("", "“", "”");endif; ?></h1>
<form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
<input type="text" id="s" name="s" class="text" value="<?php if (
    $this->is("search")
):
    echo $this->archiveTitle("", "", "");
endif; ?>" placeholder="<?php _e("输入关键字以搜索之"); ?>"/>
<button type="submit" class="submit"><?php _e("搜索"); ?></button>
</form>
<article>
<?php if ($this->is("search") && $this->have()): ?>
<div class="crumb">已找到以下结果与君</div>
<ul class="results">
<?php while ($this->next()): ?>
<li>
[ <?php $this->category(
    ","
); ?> ] <a href="<?php $this->permalink(); ?>" title="<?php $this->title(); ?>"><?php $this->title(); ?> <small><time datetime="<?php $this->date(); ?>"><?php $this->date(); ?></time></small></a>
</li>
<?php endwhile; ?>
</ul>
<?php if ($this->is("search") && $this->is("archive")) { ?>
<div class="post-pagination">
<?php $this->pageNav("&nbsp;←&nbsp;", "&nbsp;→&nbsp;", "5", "…"); ?>
</div>
<?php } ?>
<?php elseif ($this->is("search") && !$this->have()): ?>
此地无结果，但有你则已。
<?php endif; ?>
</article>
<?php $this->need("footer.php"); ?>
