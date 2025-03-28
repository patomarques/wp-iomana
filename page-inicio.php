<?php get_header(); ?>

<div class="container-fluid bg-red">
    <?php
    echo do_shortcode('[smartslider3 slider="2"]');
    ?>
</div>

<section class="container-fluid bg-yellow pt-5 pb-5">
    <div class="container pt-4 pb-4">
        <div class="row">
            <h2 class="display-2 bold pb-4">Um museu virtual de objetos e
                histórias de gente pernambucana</h2>

            <p class="h2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                hendrerit in vulputate velit esse molestie consequat.</p>

            <a href="#" class="link">>>> Saiba mais.</a>
        </div>
    </div>

</section>

<?php
$objects = new WP_Query(
    array(
        'post_type' => 'objetos',
        'orderby' => 'publish',
        'order' => 'DESC',
    )
);
?>

<section class="container-fluid bg-red pt-5 pb-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 col-sm-6">
                <h2 class="title-section bold">Acervo</h2>
            </div>
            <div class="col-12 col-sm-6">
                <ul class="list-inline pull-right">
                    <li class="list-inline-item p-3">
                        <a href="<?= get_site_url() . '' ?>" class="bold h4">Objetos</a>
                    </li>
                    <li class="list-inline-item p-3">
                        <a href="<?= get_site_url() . '' ?>" class="bold h4">Pessoas</a>
                    </li>
                    <li class="list-inline-item p-3">
                        <a href="<?= get_site_url() . '' ?>" class="bold h4">Lugares</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">

            <div class="multiple-items">
                <?php while ($objects->have_posts()):
                    $objects->the_post(); ?>

                    <div>
                        <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>"
                            title="<?php echo get_the_title(); ?>" alt="<?php echo get_the_title(); ?>" class="img-responsive">
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 text-left">
                <h2 class="title-section bold">Objetos</h2>
            </div>
            <div class="col-12 col-sm-6">
                <div class="pull-right">
                    <a href="<?= get_site_url() . '/objetos' ?>" class="h4">>>> Saiba mais.</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$peoples = new WP_Query(
    array(
        'post_type' => 'pessoas',
        'orderby' => 'publish',
        'order' => 'DESC',
    )
);
?>

<section class="container-fluid bg-blue p-0">
    <div class="slick-people">

        <?php while ($peoples->have_posts()):
            $peoples->the_post(); ?>

            <div class="slick-people__item">
                <div style="background-image: url(<?= get_the_post_thumbnail_url(get_the_ID()) ?>)"
                    class="slick-people__item__image"></div>
            </div>
        <?php endwhile; ?>
    </div>


    <div class="container pb-5">
        <div class="row mt-5">
            <div class="col-12 col-sm-6">
                <h2 class="title-section bold">Pessoas</h2>
            </div>
            <div class="col-12 col-sm-6">
                <div class="pull-right pt-3">
                    <a href="<?= get_site_url() . '/pessoas' ?>" class="color-black h4">>>> Saiba mais.</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
$places = new WP_Query(
    array(
        'post_type' => 'lugares',
        'orderby' => 'publish',
        'order' => 'DESC',
    )
);
?>

<section class="container-fluid bg-green pt-5 pb-5">

    <div class="container">
        <div class="row m-auto">
            <div class="col text-center">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/mapa-pe.png' ?>" class="img-responsive w100vw pt-5 pb-5">

            </div>
        </div>
        <div class="row pt-5">
            <div class="col-12 col-md-4">
                <h2 class="title-section bold">Lugares</h2>

            </div>
            <div class="col-12 col-md-8 pt-2">

                <?php while ($places->have_posts()):
                    $places->the_post(); ?>

                    <a href="<?php echo get_the_permalink(); ?>"
                        class="btn btn-default bold h1">
                        <?php echo get_the_title(); ?>
                    </a>

                <?php endwhile; ?>

            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>