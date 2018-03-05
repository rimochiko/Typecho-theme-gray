<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="comment" id="<?php $this->respondId(); ?>">
            <div class="comment-main-title">
                <h1>瞧瞧小脚丫</h1>
            </div>
        
            <ol id="comment_list">
                <?php $this->comments()->to($comments); ?><?php while($comments->next()): ?>
                <li id="<?php $comments->theId(); ?>">
                    <div class="comment_data">
                    <p>By：<strong><?php $comments->author(); ?></strong></p>
                    </div>
                    <div class="comment_body"><?php $comments->content(); ?></div>
                    <div class="comment_head"><?php $comments->gravatar('30', '');?> </div>

                </li>
                <?php endwhile; ?>
            </ol>

    <?php if($this->allow('comment')): ?>
    <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
		<?php if($this->user->hasLogin()): ?>
			<div class="comment-main-title">
				<h1>添加小脚丫</h1>
			</div>

			<div class="comment-info">
    			<p><?php _e('登录昵称: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
    		</div>
            <?php else: ?>

			<div class="comment-main-title">
				<h1>添加小脚丫</h1>
			</div>

		      <input type="text" name="author" placeholder="昵称*" value="<?php $this->remember('author'); ?>"/>
 		     <input type="text" name="mail" placeholder="电子邮箱" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?>/>
 		     <input type="text" name="url" placeholder="<?php _e('网页地址（http://）'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?>/>
		      <?php endif; ?>

 		     <textarea placeholder="请输入您的留言..." rows="10" cols="50" name="text"><?php $this->remember('text'); ?></textarea>
 		         <button type="submit" class="submit">挥挥衣袖，留下一个印记(●ˇ∀ˇ●)</button>
                 
    </form>

        <?php else: ?>
        <h3><?php _e('评论已关闭'); ?></h3>
     <?php endif; ?>


</div>
