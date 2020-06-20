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
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<style>
body{
    margin-top:10vh;
    font-style: normal;
    font-weight: normal; 
    font-family: 'Roboto', sans-serif;
}
button
{
    border-radius:6px !important;
}
p{
    font-size: 16px;
    line-height: 26px;
    color: #84888C;
}
section{
    margin-top: 10vh;
}
.ata{
    font-size: 42px;
    line-height: 49px;
    color: #041F8F;
}
.bg_azul
{
    background:url('/img/azul.png');
    border-radius:20px;
}
h2.se2
{
    color: #303D63;
    padding-top:3vh;    
    padding-left:5vh;    
}
.p2{
    background:url('/img/retangulo_azul.png');
    background-repeat: no-repeat;
    background-size: cover;
}
#parte_2{
    margin-top:30px;
}
.h2p2{
    margin-top:10vh;
    color: #FFFFFF;
    font-size: 32px;
    line-height: 40px;
}

.cp3
{
    background: #F6F9FC;
    border-radius: 15px;
    padding: 40px;
}
.cp3 h2{
    color: #041F8F;
}

.col-md-4 .card
{
    background:#fff0;
    border: 0px !important;
}

.col-md-4 .card .card-title, .card-text
{
    text-align: center;
    font-family: 'Roboto', sans-serif;

}
.col-md-4 .card .card-title{
    font-weight: 500;
    font-size: 24px;
    line-height: 28px;

}
.col-md-4 .card .card-text{
    font-size: 16px;
line-height: 26px;

}
.card-img-top
{
    max-height: 98px;
    max-width: 100px;
}
.carousel-cell {
    width: 66%;
    margin-right: 10px;
    counter-increment: carousel-cell;
  }
.carousel-cell .card-img-top
{
    margin-top:30px;
}

.carousel-cell .card-title
{
    font-size: 16px;
    text-align: center;

}

.carousel-cell .card-text
{
    font-size: 14px;
    text-align: center;

}
.marcas
{
    padding:20px;
    box-sizing: border-box;
    border-radius: 20px;
    margin-bottom:70px;
    max-height: 300px !important;
    max-width: 300px !important;
}
.order1 span
{
    display:block;
 text-align: center;
 margin-top:15px;
}

span{
    text-align: center;
    margin-top:15px;
    margin-bottom:15px;
    display:block;
    font-size: 16px;
    line-height: 26px;
    color: #84888C;
}

.cm {
    background-color: #ff000000;
    border: none;
}
</style>
<main id="site-content" role="main">

	<?php

	$archive_title    = '';
	$archive_subtitle = '';


	if ( have_posts() ) {

		$i = 0;

		while ( have_posts() ) {
			$i++;
			if ( $i > 1 ) {
				echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
			}
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	} elseif ( is_search() ) {
		?>

		<div class="no-search-results-form section-inner thin">

			<?php
			get_search_form(
				array(
					'label' => __( 'search again', 'twentytwenty' ),
				)
			);
			?>

		</div><!-- .no-search-results -->

		<?php
	}
	?>


</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
