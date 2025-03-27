<?php get_header(); ?>

<div class="container-fluid bg-red">
    <?php echo do_shortcode('[smartslider3 slider="2"]')?>
</div>

<section class="container-fluid bg-yellow pt-5 pb-5">
    <div class="container">
        <div class="row">
            <h2 class="text-larger pb-4">Um museu virtual de objetos e
                histórias de gente pernambucana</h2>

            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
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
        <div class="row">
            <div class="col-12 col-sm-6">
                <h2 class="title-section">Acervo</h2>
            </div>
            <div class="col-12 col-sm-6">
                <ul class="list-inline">
                    <li class="list-inline-item">Objetos</li>
                    <li class="list-inline-item">Pessoas</li>
                    <li class="list-inline-item">Lugares</li>
                </ul>
            </div>
        </div>
        <div class="row d-flex">
            <?php while ($objects->have_posts()):
                $objects->the_post(); ?>

                <div class="col">
                    <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>" 
                    title="<?php echo get_the_title(); ?>" alt="<?php echo get_the_title(); ?>" class="img-responsive">

                </div>
            <?php endwhile; ?>
            <p>Aqui um caroussel de imagens clicavéis</p>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 text-left">
                <h2 class="title-section">Objetos</h2>
            </div>
            <div class="col-12 col-sm-6 text-right">
                <a href="#">>>> Saiba mais.</a>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid bg-blue pt-5 pb-5">

    <div class="container">

        <div class="row">
            <p>Aqui um caroussel com imagens dos artistas</p>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <h2 class="title-section">Pessoas</h2>
            </div>
            <div class="col-12 col-sm-6 text-right">
                <a href="#">>>> Saiba mais.</a>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid bg-green pt-5 pb-5">

    <div class="container">
        <div class="row">
            <p>Aqui um gmap com marcadores em 5 áreas de pernambuco</p>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <h2 class="title-section">Lugares</h2>
            </div>
            <div class="col-12 col-sm-6 text-right">
                <a href="#">>>> Saiba mais.</a>
            </div>
        </div>
    </div>
</section>