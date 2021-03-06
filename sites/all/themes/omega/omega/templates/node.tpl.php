<article<?php print $attributes; ?>>
 <div class="blockcontroller">
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
	<?php if(strpos($attributes,'node-list-details') != false): ?>
	  <header>
	    <p<?php print $title_attributes; ?>>
	      <!-- <a href="<?php //print $node_url ?>" title="<?php //print $title ?>"><?php //print $title ?></a> -->
	      <?php print $title ?>
	    </p>
	  </header>
	<?php endif; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <div class="articledate"><?php print $date; ?> -- <?php print $name; ?></div>
  <?php endif; ?>  
  
  <!-- <div<?php //print $content_attributes; ?>> -->
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content); 
    ?>
  <!-- </div> -->
  <?php if (!$page && $title): ?>
	<?php if(strpos($attributes,'node-list-details') == false): ?>
	  <header>
	    <p<?php print $title_attributes; ?>>
	      <!-- <a href="<?php //print $node_url ?>" title="<?php //print $title ?>"><?php //print $title ?></a> -->
	      <?php print $title ?>
	    </p>
	  </header>
	<?php endif; ?>
  <?php endif; ?>
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>
</div>
</article>
