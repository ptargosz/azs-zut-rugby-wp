<?php

get_header();
 ?>
<section class="container single-container">


    <article class="post">
        <h2><?php the_title(); ?></a></h2>

        <p class="post-info"><?php the_time('j.m.Y G:i'); ?> autor: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
        <?php
            $categories = get_the_category();
            $separator = ", ";
            $output = '';

            if($categories){

                foreach($categories as $category){

                    $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;

                }

                echo trim($output, $separator);
            }
            ?>

        </p>
        <p><?php the_content(); ?></p>
    </article>
</section>


   <?php
get_footer();

?>