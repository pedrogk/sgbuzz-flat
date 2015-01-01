<li id="comment-<?php print $node->nid; ?>" class="comment" >
  <div class="avatar-image-container">
    <?php if($picture){
			print $picture;
		}  else {
			print '<img src="/'.variable_get('user_picture_default', 'mega/sites/default/files/styles/thumbnail/public/pictures/default-avatar.png').'" alt="Default User Picture" />';
		}
		?>
  </div>
  <div id="" class="comment-block">
    <div id="" class="comment-header" ><cite class="user"><?php print theme('username', array('account' => $content['comment_body']['#object'], 'attributes' => array('class' => 'url'))) ?></cite><span class="icon user"></span><span class="datetime secondary-text"><?php print format_date($node->created, 'custom', 'F d, Y H:i A');?></span></div>
    <p id="" class="comment-content">
      <?php hide($content['links']); print render($content) ?>
    </p>
    <div class="comment-reply-edit"><?php print render($content['links']) ?></div>
  </div>
</li>