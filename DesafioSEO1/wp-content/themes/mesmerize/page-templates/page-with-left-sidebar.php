<?php
/*
Template Name: Page With Left Sidebar
*/

mesmerize_get_header();
?>
    <div class="page-content">
        <div class="gridContainer">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3 page-sidebar-column">
                    <?php mesmerize_get_sidebar('pages'); ?>
                </div>

                <div class="col-xs-12 col-sm-8 col-md-9">
                    <?php
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
