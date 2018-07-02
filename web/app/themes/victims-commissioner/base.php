<?php get_template_part('templates/head'); ?>
<body <?php if (isset($post->post_name)) { body_class("slug-".$post->post_name); } ?>>

  <!--[if lte IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <div class="container">
      <div class="survey-banner survey-banner--moj">
<!--          The Victims’ Commissioner is seeking victims’ views about victim engagement in parole processes and the Victim Contact Scheme.-->
<!--          <a href="https://www.smartsurvey.co.uk/s/VictimContactSchemeSurvey/" target="_blank">Click here to have your say<span class="glyphicon glyphicon-new-window"></span></a>-->


          We’re carrying out a review into victims’ experiences of claiming criminal injuries compensation.
          If you have applied for criminal injuries compensation for yourself, or on behalf of a friend or relative, we would love to hear from you.
<!--          <a href="https://bit.ly/2KDbuWg" target="_blank">Share your views and experiences in our victims’ survey <span class="glyphicon glyphicon-new-window"></span></a>-->

          <a href="https://bit.ly/2KDbuWg" target="_blank">Have your say in our victims’ survey<span class="glyphicon glyphicon-new-window"></span></a>
      </div>
  </div>

  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
