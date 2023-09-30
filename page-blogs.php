<?php echo get_header( );?>
<main class="blog-main global-width">
    <div class="blog-sec1">
       <section>
       <h2>Omniverse Articles</h2>
        <p> omniverse updates</p>
       </section>
       <section class="blogarticles">
       <?php
                $contentview = array('post_type' => 'content', 'posts_per_page' => 6);

                $contentquery = new WP_Query($contentview);

                if ($contentquery->have_posts()):
                    ?>
                    <ul class="blogslist">
                        <?php while ($contentquery->have_posts()):
                            $contentquery->the_post();
                            ?>
                            <a style="text-decoration:none; cursor:pointer;" href="">
                                <li>
                                    <section>
                                        <h2><img src="<?php echo get_the_post_thumbnail_url(); ?>" loading="lazy"
                                                alt="Omniverse blog"></h2>

                                        <p>
                                            <span>
                                                <?php echo get_the_date('F j, Y'); ?>
                                            </span><br>
                                            <?php echo the_title(); ?>
                                        </p>
                                    </section>
                                </li>
                            </a>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                        </section>
                    <?php endif; ?>
       </section>
    </div>
</main>
<?php echo get_footer(  );?>