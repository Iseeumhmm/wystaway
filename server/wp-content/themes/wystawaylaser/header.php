
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
            <nav class="navbar navbar-light nav-center">
				<a href="/index" class="navbar-brand">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
				</a>
                <button style="border: none;"class="navbar-toggle mr-auto" data-toggle="collapse" data-target="#navbarMenu">
					<img class="menu" src="<?php echo get_template_directory_uri(); ?>/img/menu.png"/>
                </button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <div class="navbar-nav mr-auto navbar-mobile-center">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#Angie" class="nav-link px-nav-link">Book with Angie</a></a>
                            </li>
                            <li class="nav-item">
                                <a href="#Cassie" class="nav-link px-nav-link">Book with Cassie</a>
                            </li>
                            <li class="nav-item">
                                <a href="#Price-List" class="nav-link px-nav-link">Price List</a>
                            </li>
                            <li class="nav-item">
                                <a href="#FAQ" class="nav-link px-nav-link">FAQ's</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        </header><!-- #masthead -->

        <div id="content" class="site-content">
