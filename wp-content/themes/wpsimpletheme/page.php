<?php get_header(); ?>
    <main role="main">
        <div class="page-banner">
            <div class="page-banner__bg-image"
                 style="background-image: url(<?php echo get_theme_file_uri('assets/images/header-bg.jpg') ?>);">
                <div class="page-banner__content container t-center c-white">
                    <h1 class="headline headline--large">Welcome!</h1>
                    <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
                    <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re
                        interested in?</h3>
                    <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
                </div>
            </div>
            <!-- /.page-banner__bg-image -->
        </div>

        <!-- /.page-banner -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Hello, world!</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>

        <div class="container">

            <h1><?php the_title(); ?></h1>
			<?php get_template_part('templates/section', 'content'); ?>

        </div>

    </main>

<?php get_footer(); ?>