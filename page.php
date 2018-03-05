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
        
		<?php while($this->next()): ?>
		<div class="article">
			<div class="article-info">		
				<div class="title animated">
					<a class="article-title" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>						
				</div>
				<div class="details">
					<p class="article-details">On <?php $this->date('F j, Y'); ?> in <?php $this->category(','); ?></p>	
				</div>
			</div>

	        <div class="article-content">
					<?php $this->content('Continue Reading...'); ?>
	        </div>
		</div>      
		<?php endwhile; ?>


            
<?php $this->need('footer.php'); ?>
