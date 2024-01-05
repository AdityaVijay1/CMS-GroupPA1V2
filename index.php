<!-- A Wordpress Responsive Theme Template -->

<?php get_header(); ?>

<!-- blog layout with Bootstrap layout grid: -->
<div class="blogspace">
        
    <div class="container">

        <div class="col-sm-8 blog-main">

            
            <?php 
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
                break;
                endwhile; ?>

                <nav>
                    <ul class="pager">
                        <li>
                                <?php next_posts_link( 'Previous' ); ?>
                        </li>
                        <li>
                                <?php previous_posts_link( 'Next' ); ?>
                        </li>
                    </ul>
                </nav>

            <?php endif; ?>

        </div>
        <!-- /.blog-main -->

        <?php get_sidebar(); ?>

    </div>
    <!-- /.container -->
</div>  
<!-- /.blogspace -->

<?php get_footer(); ?>
