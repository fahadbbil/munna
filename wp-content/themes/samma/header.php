<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package samma
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta content="<?php bloginfo('description'); ?>" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo get_template_directory_uri();?>/assets/img/fav-icon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo get_template_directory_uri();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo get_template_directory_uri();?>/assets/css/style.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

      <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

          <div class="profile">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/mhmunna-logo.png" alt="" class="img-fluid ">
            <div class="social-links mt-3 text-center">
              <a href="https://www.facebook.com/mhmunna.me" target = "blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.linkedin.com/in/md-mofazzal-hossan-munna-5479ba4a/" target = "blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
			  <a href="https://github.com/mmhmunna?tab=repositories" target = "blank" class="linkedin"><i class="bx bxl-github"></i></a>
            </div>
          </div>
          <nav class="nav-menu">
            <ul>
              <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span><strong>Home</strong></span></a></li>
              <li><a href="#about"><i class="bx bx-user"></i> <span><strong>About</strong></span></a></li>
              <li><a href="#resume"><i class="bx bx-file-blank"></i> <span><strong>Resume</strong></span></a></li>
              <li><a href="#contact"><i class="bx bx-envelope"></i><strong>Contact</strong></a></li>
              <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US"
              data-type="vertical" data-theme="dark" data-vanity="mmhmunna">

              <a class="LI-simple-link" href='https://bd.linkedin.com/in/mmhmunna?trk=profile-badge'></a></div>

            </ul>
          </nav><!-- .nav-menu -->
          <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
        </div>
    </header><!-- End Header -->
