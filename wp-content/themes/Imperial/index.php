<?php get_header() ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>   

  <body>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <?php the_post()?>
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title"><?php the_title();?></h3>
            <div class="section-title-divider"></div>
            <p class="section-description"><?php the_content();?></p>
          </div>
        </div>
      </div>
      <div class="container about-container wow fadeInUp">
        <div class="row">
        

          <div class="col-lg-6 about-img">
            <img src="<?php the_field('image'); ?>" alt="">
          </div>

          <div class="col-md-6 about-content">
            <h2 class="about-title"><?php the_field('heading'); ?></h2>
            <p class="about-text">
           <?php the_field('description'); ?> <!--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate -->
            </p>
            <!-- <p class="about-text">
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
              id est laborum
            </p>
            <p class="about-text">
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt molli.
            </p> -->
          </div>
          
        </div>
      </div>
    </section><!-- End About Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Contact Us</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
        </div>

        <div class="row justify-content-center">
        <?php dynamic_sidebar('contact-1'); ?>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <?php echo do_shortcode('[contact-form-7 id="59" title="Contact form 1"]');?>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->


</main>

  <?php wp_footer(); ?>
  <?php get_footer() ?>