<?php
$args = array(
    'post_type' => 'lugares',
    'post_status' => 'publish',
    'numberposts' => -1,
    'order'    => 'ASC'
);
$lugares = new WP_Query($args);
?>

<div class="container-full page-lugares">
    <div class="row">
        <div class="square-container">
            <?php while ($lugares->have_posts()) : $lugares->the_post(); ?>
                <?php $thumbTeamUrl = get_the_post_thumbnail_url($lugares->the_ID(), 'post-thumbnail');
                if (empty($thumbTeamUrl)) {
                    $thumbTeamUrl = get_site_url() . '/wp-content/uploads/2024/11/icon-image-not-found-free-vector-3775104631.jpg';
                }
                ?>

                <div class="col">
                    <div class="card m-2">
                        <div class="square">
                            <div class="content" style="background: url(<?= $thumbTeamUrl; ?>)">
                                <!-- <img src="<?= $thumbTeamUrl; ?>" alt="<?php the_title(); ?>" class="img-responsive card-img-top"> -->
                            </div>
                        </div>
                        <div class="card__content pb-5">
                            <h4 class="card__title text-center mt-3"><?php echo get_the_title(); ?></h4>
                            <p class="card__text"><? //php echo the_content(); 
                                                    ?></p>
                            <div class="m-auto d-flex">
                                <a href="<?= get_permalink() ?>" class="btn btn-secondary text-center m-auto">Ver mais</a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
    </div>
</div>