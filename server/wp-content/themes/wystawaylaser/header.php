
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WystawayLaser
 */

?>
<!doctype html>
<html class="mt-0" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wystaway Laser</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
    <div id="page" class="site">

        <header id="masthead" class="site-header">
        <div class="container-fluid p-0" id="outer"></div>
            <nav class="navbar navbar-light">
				<a href="/index" class="navbar-brand">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
				</a>
                <button style="border: none;"class="navbar-toggle mr-auto" data-toggle="collapse" data-target="#navbarMenu">
					<img class="menu" src="<?php echo get_template_directory_uri(); ?>/img/menu.png"/>
                </button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <div class="navbar-nav ml-auto navbar-mobile-center">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="/book-a-tee" class="nav-link px-nav-link">Book a tee</a>
                            </li>
                            <li class="nav-item">
                                <a href="/about" class="nav-link px-nav-link">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" area-expanded="false">Golf</a>
                                <div class="dropdown-menu">
                                    <a href="/the-course" class="dropdown-item">The Course</a>
                                    <a href="/proshop" class="dropdown-item">The Pro Shop</a>
                                    <a href="/lessons" class="dropdown-item">Lessons</a>
                                    <a href="/league" class="dropdown-item">League</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/events" class="nav-link px-nav-link">Events</a>
                            </li>
                            <li class="nav-item">
                                <a href="/contact" class="nav-link px-nav-link">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="/greenfees" class="nav-link px-nav-link">Green fees</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        </header><!-- #masthead -->

        <div id="content" class="site-content">
