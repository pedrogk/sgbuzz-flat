<?php if ($content['#node']->comment and !($content['#node']->comment == 1 and $content['#node']->comment_count)) { ?>

<div id="com-tab">
  <div class="com-tab-menu clear">
    <ul>
      <li class="com-tab1 selected" style="width:100%;"><span class="blogger"><?php print t('Comments');?></span></li>
    </ul>
    <div class="clear"></div>
  </div>
  <div id="com-tab2">
    <div id="comments-tabfix">
      <div class="comments threaded_commentsnya" id="comments">
        <h4><span><?php print $content['#node']->comment_count.' '; print t('Comments');?></span></h4>
        <div class="comments-content">
          <div id="comment-holder">
            <div>
              <div>
                <div class="comment-thread">
                  <ol id="comment-list">
                    <?php print render($content['comments']); ?>
                  </ol>
                  <?php print str_replace('resizable', '', render($content['comment_form'])); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
