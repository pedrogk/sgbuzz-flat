<?php

/**

 * @file

 * Default theme implementation to display a node.

 */

global $base_root, $base_url;



if(!$page){





	?>



<div class="post-outer">

  <article class="post <?php print $classes; ?>" id="<?php print $node->nid; ?>">

    <div itemtype="http://schema.org/BlogPosting" itemscope=""><a class="post_thumb" href="<?php print $node_url; ?>" title="<?php print $title;?>"><?php print theme('image_style', array('path' => $node->field_image['und'][0]['uri'], 'style_name' => 'blog_250x250', 'attributes'=>array('class'=>'post_thumb', 'alt'=>$title, 'width'=>'250', 'height'=>'250')));?></a>

      <h2><span><a href="<?php print $node_url; ?>" title="<?php print $title;?>"><?php print $title;?></a></span></h2>

      <div class="postmeta-fix">

        <div class="postmeta-primary"><span class="date"><span class="meta_date"><?php print format_date($node->created, 'custom', 'g:i A');?></span></span>&nbsp;/&nbsp;<span class="comnum">&nbsp;&nbsp;</span><span class="meta_comments"><a href="<?php print $node_url; ?>" onclick=""><?php print $comment_count ?></a></span></div>

      </div>

      <div  id="post-body-<?php print $node->nid; ?>">

        <div class="post-body">

          <?php

            hide($content['comments']);

            hide($content['links']);

            hide($content['field_tags']);

            hide($content['field_image']);

            hide($content['field_categories']);

            print render($content);

         ?>

        </div>

        <div id="readmore"><a href="<?php print $node_url; ?>" title="<?php print $title;?>"> <?php print t('Read more') ?> »</a></div>

        <div style="clear: both;"></div>

      </div>

    </div>

  </article>

</div>



<?php



} else {



?>

<div class="post-outer">

  <article class="post <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">

  <?php

print theme('breadcrumb', array('breadcrumb'=>drupal_get_breadcrumb()));

?>

    <div itemtype="http://schema.org/BlogPosting" itemscope="">

      <h1 class="post-title-blog" ><?php print $user_picture ?><span itemprop="headline"><?php print $title;?></span></h1>

      <div class="post-body entry-content" id="post-body-<?php print $node->nid; ?>">

        <div itemprop="articleBody">

          <?php

		        if(isset($node->field_image['und'][0]['uri'])):

		      ?>


            <?php



		        print theme('image', array('path' => $node->field_image['und'][0]['uri'], 'style_name' => 'blog_684x400', 'attributes'=>array('alt'=>$title )));?>


            <?php

		        endif;

		    ?>

        <?php

    			hide($content['links']);

    			hide($content['comments']);

          hide($content['field_categories']);

          hide($content['field_image']);

          hide($content['field_tags']);

    			print render($content);

    			?>

          <div style="clear:both;"></div>

          </div>

          <div style="padding-bottom:60px;"></div>

          <div class="post-footer">

            <div class="post-footer-line post-footer-line-1"><span class="post-author vcard"> <?php print t('Posted by') ?> <span class="fn"><?php print strip_tags($name) ?></span></span><span class="post-timestamp"> <?php print t('at') ?> <a class="timestamp-link" href="<?php print $node_url; ?>" rel="bookmark" title="permanent link"><abbr class="published" title=""><?php print format_date($node->created, 'custom', 'g:i A');?></abbr></a></span><span class="post-comment-link"></span><span class="post-icons"></span>

              <div class="post-share-buttons goog-inline-block"></div>

            </div>

            <div class="post-footer-line post-footer-line-3"><span class="post-location"></span></div>

          </div>

      </div>

    </div>

  </article>



  <?php print render($content['comments']);?>



</div>

<!-- End main content -->

<?php

}



?>