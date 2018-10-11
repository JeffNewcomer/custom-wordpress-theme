
<?php

  get_header();

  while(have_posts()) {
    the_post();
    pageBanner();
      ?>


    <div class="container container--narrow page-section">
      <!-- normally the metabox (breadcrumb div) goes here  -->
      <div class="generic-content">
        <!-- below is the div for the professor's image and the text content to the right of the image -->
        <div class="row group">
          <div class="one-third">
            <?php the_post_thumbnail('professorPortrait'); ?>
          </div>
          <div class="two-thirds">
            <?php the_content(); ?>
          </div>
        </div>
      </div>

      <?php

      $relatedPrograms = get_field('related_programs');

      if ($relatedPrograms) {
        echo '<hr class="section-break">';
        echo '<h2 class="headline headline--medium">Subject(s) Taught(s)</h2>';
        echo '<ul class="link-list min-list">';
        foreach($relatedPrograms as $program) { ?>
          <li><a href="<?php echo get_the_permalink($program); ?>"><?php echo get_the_title($program); ?></a></li>
        <?php }
        echo '</ul>';
      }





      ?>

    </div>


  <?php }

  get_footer();

?>
