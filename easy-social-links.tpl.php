<?php
/**
 * @file
 * This is the file description for Easy Social module.
 * 
 * Variables available:
 * - $social_links: Assoc array with my share buttons html markup.
 *
 */
?>
 <div id='easysocial-box'>
  <?php if(isset($social_links['twitter'])): ?>
  <span class='easysocial-widget-twitter'><?php echo $social_links['twitter']; ?></span>  
  <? endif; ?>
  <?php if(isset($social_links['facebook'])): ?>
  <span class='easysocial-widget-facebook'><?php echo $social_links['facebook']; ?></span>  
  <? endif; ?>
  <?php if(isset($social_links['googleplus'])): ?>
  <span class='easysocial-widget-googleplus'><?php echo $social_links['googleplus']; ?></span>  
  <? endif; ?>
</div>