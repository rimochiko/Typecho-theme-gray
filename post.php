<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<body class="animated fadeIn">
	<div class="main">
		<div class="header">
			<ul class="nav">
				<li><a href="<?php $this->options->siteUrl(); ?>">阿糕の日记</a></li>
                <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
			</ul>
		</div>
        
		<div class="article">
			<div class="article-info">		
				<div class="title animated">
					<a class="article-title"><?php $this->title() ?></a>						
				</div>
				<div class="details">
					<p class="article-details">On <?php $this->date('F j, Y'); ?> in <?php $this->category(','); ?></p>	
				</div>
			</div>

	        <div class="article-content">
					<?php $this->content(''); ?>
	        </div>
			
			<div class="article-guide"> 
    			<ul class="post-near">
        			<li style="float:left">上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        			<li style="float:right">下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    			</ul>
			</div>

		</div>      

<?php $this->need('comments.php'); ?>
            
<?php $this->need('footer.php'); ?>
