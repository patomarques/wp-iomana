<?php get_header(); ?>

<section id="page-producoes" class="container">
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-4 offset-lg-2">
            <div class="content-box d-block text-center p-5">
                <div class="box-icon-rounded">
                    <i class="fa-solid fa-book "></i>
                </div>
                <h4 class="content-box__title pb-4">Ebooks</h4>
                <a href="<?= get_site_url() ?>/wp-content/uploads/2024/11/Museologia_e_suas_interfaces_criticas_mu.pdf" target="_blank" 
                class="btn btn-green pt-2 pl-5 pr-4 pb-2">Visualizar</a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="content-box d-block text-center p-5">
                <div class="box-icon-rounded">
                    <i class="fa-solid fa-video"></i>
                </div>
                <h4 class="content-box__title pb-4">Documentário</h4>
                <a href="<?= get_post_custom_values('link_video')[0] ?>" target="_blank" class="btn btn-green pt-2 pl-5 pr-4 pb-2">Assistir</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>