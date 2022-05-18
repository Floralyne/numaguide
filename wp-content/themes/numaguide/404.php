<?php get_header() ?>

<style>
    html {
        margin-top: 0 !important;
    }

    @media screen and (max-width: 782px) {
        html {
            margin-top: 0 !important;
        }
    }
</style>

<section class="page404">
    <div class="container404">
        <div class="image404">
            <img src="<?= get_template_directory_uri() . '/assets/images/404.svg'; ?>">
        </div>
        <div class="message404">La page que vous recherchez n'existe pas !</div>
    </div>
</section>