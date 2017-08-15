﻿<?php
/**
 * 这是一款高仿自HEXO的小清新绿色Typecho主题，一款兼容Typecho众多插件并全新支持pjax的主题。
 * @package Sgreen Theme 
 * @author 一夜涕
 * @version 1.6
 * @link http://yiyeti.cc
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

 <content>
<div class="main">
<?php while($this->next()): ?>
		<div class="article">
		<div class="article-title">
			<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
					</div>
		<small class="article-time"><?php _e('发表于：'); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time> | <?php _e('分类：'); ?><?php $this->category(','); ?> | <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论：0 ', '评论：1 ', '评论：%d '); ?></a> | <?php Views_Plugin::theViews(); ?></small>
		<div class="article-content"><?php $this->excerpt(90, '...'); ?><p class="readmore"><a href="<?php $this->permalink() ?>">阅读全文&gt;&gt;</a></p>		</div>
	</div>
	<?php endwhile; ?>
<div class="page-url">
	</div>
	<div class="pagination">
		 <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?></div>
				</div>
	</content>
<?php $this->need('footer.php'); ?>


