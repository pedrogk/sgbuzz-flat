<?php

/**

 * @file

 * Default theme implementation to display a node.

 */

global $base_root, $base_url;



  $style = 'large'; //image style

  if($node->field_image_gallery){

  $imageone = $node->field_image_gallery['und'][0]['uri'];

  }else{

  $imageone = '';

  }



if(!$page){



  ?>



<div class="post-outer">

  <article class="post <?php print $classes; ?>" id="<?php print $node->nid; ?>">

    <div itemtype="http://schema.org/BlogPosting" itemscope=""><a class="post_thumb" href="<?php print $node_url; ?>" title="<?php print $title;?>"><?php print theme('image_style', array('path' => $imageone, 'style_name' => 'blog_250x250', 'attributes'=>array('class'=>'post_thumb', 'alt'=>$title, 'width'=>'250', 'height'=>'250')));?></a>

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

            hide($content['field_image_gallery']);

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

      <div class="post-body gallery-content" id="post-body-<?php print $node->nid; ?>">

        <div itemprop="articleBody">

          <?php



            foreach($node->field_image_gallery['und'] as $key => $value){

              $image_uri  = $node->field_image_gallery['und'][$key]['uri'];

              $image = theme('image', array('style_name' => 'blog_612x380', 'path' => $image_uri));

              $output = image_style_url('blog_612x380', $image_uri);

              print '<a href="'.$output.'" data-lightbox="roadtrip" data-title="'.$title.'"><img  alt="'.$title.'" src="'.$output.'" /></a>';

              }

            hide($content['links']);

            hide($content['comments']);

            hide($content['field_categories']);

            hide($content['field_image_gallery']);

            hide($content['field_tags']);

            print render($content);

          ?>

          <div style="clear:both;"></div>

          </div>

          <div class="post_byfix">

            <div class="post_by">

              <div class="post_byimz">

              <?php

                print theme('image_style', array('path' => $node->field_image_gallery['und'][0]['uri'], 'style_name' => 'blog_70x70', 'attributes'=>array('alt'=>$title )));

              ?>

              </div>

              <ul>

                <li><?php print t('Title') ?>: <?php print $title;?></li>

                <li><?php print t('Posted by') ?>: <span class="post-author vcard"><span class="fn"><?php print strip_tags($name) ?></span></span></li>

                <li><?php print t('Date') ?>: <a class="updated timestamp-link" href="<?php print $node_url; ?>" rel="bookmark" title="permanent link"><abbr class="updated published" title=""><?php print format_date($node->created, 'custom', 'g:i A');?></abbr></a></li>

              </ul>

            </div>

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



  <div class="social_fix">

    <div class="social_txt"><span><?php print t('Share Article') ?>:</span>

      <ul class="social_menu" id="social_menu_animation">

        <li class="abfacebook"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php print 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" onclick="window.open(this.href,&quot;   sharer&quot;   ,&quot;   toolbar=0,status=0,width=626,height=436&quot;   );   return false;   " rel="nofollow" title="Share this on Facebook"><strong>Facebook</strong></a></li>

        <li class="abtwitter"><a href="   http://twitter.com/home?status=<?php print $title;?>   -- <?php print 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" rel="nofollow" title="Tweet This!"><strong>Twitter</strong></a></li>

        <li class="abgoogleplus"><a href="https://plus.google.com/share?url=<?php print 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" onclick="javascript:window.open(this.href,&quot;   &quot;   ,&quot;   menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;   );   return false;   " rel="nofollow" title="Share this on Google+"><strong>Google+</strong></a></li>

        <li class="abstumbleupon"><a href="http://www.stumbleupon.com/submit?url=<?php print 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>&amp;title=<?php print $title;?>" rel="nofollow" title="Share This on StumbleUpon"><strong>StumbleUpon</strong></a></li>

        <li class="abdig"><a href="http://digg.com/submit?phase=2&amp;url=<?php print 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>&amp;title=<?php print $title;?>" rel="nofollow" title="Digg this!"><strong>Digg</strong></a></li>

        <li class="abpinterest"><a data-pin-config="beside" href="http://pinterest.com/pin/create/button/?url=<?php print 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>&amp;media=<?php print file_create_url($node->field_image_gallery['und'][0]['uri']); ?>&amp;description=<?php print $title;?>" rel="nofollow" title="Share This on Pinterest"><strong>Pinterest</strong></a></li>

        <li class="ablinkedin"><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php print 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>&amp;title=<?php print $title;?>&amp;summary=&amp;   source=" rel="nofollow" title="Share this on LinkedIn"><strong>LinkedIn</strong></a></li>

      </ul>

    </div>

  </div>



  <?php

  $nids = db_query("SELECT n.nid, title FROM {node} n WHERE n.status = 1 AND n.type =:type AND n.nid <> :nid ORDER BY RAND() LIMIT 0,4", array(':type' => $type, ':nid' => $node->nid))->fetchCol();

  $nodes = node_load_multiple($nids);

  if (!empty($nodes)):

?>



  <div id="relatedpostsjp">

    <div class="relatedposts">

      <div class="relhead">

        <h4><?php print t('Related Posts') ?></h4>

        <div class="title_stripe"></div>

      </div>

      <ul class="">



        <?php $i = 0; ?>

          <?php foreach ($nodes as $node) :

            $i++;

            if($i == 5) break;

          ?>

          <?php

            $field_image_gallery = field_get_items('node', $node, 'field_image_gallery');

            $body = field_get_items('node', $node, 'body');

            $teaser= $body[0]['safe_summary'];

          ?>

          <li><a class="jdlunya" href="<?php print url('node/' . $node->nid);?>" title=""><span class="gmbrrltd"><?php print theme('image', array('style_name' => 'blog_70X70', 'path' => $node->field_image_gallery['und'][0]['uri'], 'attributes'=>array('alt'=>$title))); ?></span><strong><?php print $node->title; ?></strong></a>

          </li>

          <?php

            endforeach;

          ?>

      </ul>

    </div>

  </div>



  <?php

  endif;



?>

  <?php print render($content['comments']);?>



</div>

<!-- End main content -->

<?php

}



?>