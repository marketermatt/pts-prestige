<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU
 * @subpackage Prestige
 */
?>

</div><!-- end mainbody -->
    </div><!-- end div content -->	
<div class="clearfix"></div>
<!-- bottom module widget group 3 4 and 5 -->
<?php if ( function_exists('dynamic_sidebar') ) { ?>
          <?php if ( is_active_sidebar('Widget Three') || is_active_sidebar('Widget Four') || is_active_sidebar('Widget Five') ) { // checks to see if there is a widget ?>
          <div id="darkouter" class="clearfix">
			<div id="darkinner">
        
              <?php if ( function_exists('dynamic_sidebar') && is_active_sidebar('Widget Three') ) { // there are active widgets
                  echo '<div id="widget-three">';
                  dynamic_sidebar('Widget Three');
                  echo '</div>';
              } ?>                

              <?php if ( function_exists('dynamic_sidebar') && is_active_sidebar('Widget Four') ) { // there are active widgets
                  echo '<div id="widget-four">';
                  dynamic_sidebar('Widget Four');
                  echo '</div>';
              } ?>      

              <?php if ( function_exists('dynamic_sidebar') && is_active_sidebar('Widget Five') ) { // there are active widgets
                  echo '<div id="widget-five">';
                  dynamic_sidebar('Widget Five');
                  echo '</div>';
              } ?>
			          
          </div></div>
          <?php } ?>
      <?php } ?>
	
<!-- bottom module widget group 6 7 and 8-->
<?php if ( function_exists('dynamic_sidebar') ) { ?>
          <?php if ( is_active_sidebar('Widget Six') || is_active_sidebar('Widget Seven') || is_active_sidebar('Widget Eight') ) { // checks to see if there is a widget ?>
          <div id="lightouter" class="clearfix">
			<div id="lightinner">
        
              <?php if ( function_exists('dynamic_sidebar') && is_active_sidebar('Widget Six') ) { // there are active widgets
                  echo '<div id="widget-six">';
                  dynamic_sidebar('Widget Six');
                  echo '</div>';
              } ?>                

              <?php if ( function_exists('dynamic_sidebar') && is_active_sidebar('Widget Seven') ) { // there are active widgets
                  echo '<div id="widget-seven">';
                  dynamic_sidebar('Widget Seven');
                  echo '</div>';
              } ?>      

              <?php if ( function_exists('dynamic_sidebar') && is_active_sidebar('Widget Eight') ) { // there are active widgets
                  echo '<div id="widget-eight">';
                  dynamic_sidebar('Widget Eight');
                  echo '</div>';
              } ?>
			          
          </div></div>
          <?php } ?>
      <?php } ?>

<!-- bottom module widget group 9 10 and 11 -->
<?php if ( function_exists('dynamic_sidebar') ) { ?>
          <?php if ( is_active_sidebar('Widget Nine') || is_active_sidebar('Widget Ten') || is_active_sidebar('Widget Eleven') ) { // checks to see if there is a widget ?>
          <div id="mediumouter" class="clearfix">
			<div id="mediuminner">
        
              <?php if ( function_exists('dynamic_sidebar') && is_active_sidebar('Widget Nine') ) { // there are active widgets
                  echo '<div id="widget-nine">';
                  dynamic_sidebar('Widget Nine');
                  echo '</div>';
              } ?>                

              <?php if ( function_exists('dynamic_sidebar') && is_active_sidebar('Widget Ten') ) { // there are active widgets
                  echo '<div id="widget-ten">';
                  dynamic_sidebar('Widget Ten');
                  echo '</div>';
              } ?>      

              <?php if ( function_exists('dynamic_sidebar') && is_active_sidebar('Widget Eleven') ) { // there are active widgets
                  echo '<div id="widget-eleven">';
                  dynamic_sidebar('Widget Eleven');
                  echo '</div>';
              } ?>
			          
          </div></div>
          <?php } ?>
      <?php } ?>


  </div>
</div>
<div id="footerwrapper" class="clearfix">
<div id="footer">
  <div id="footermenu"><!-- Widget title disabled frontend --><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')) : ?><?php endif; ?></div>
  <div id="copyright"><!-- Widget title disabled frontend --><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Copyright')) : ?><?php endif; ?></div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>