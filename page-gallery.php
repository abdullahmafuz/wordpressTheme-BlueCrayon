<?php
/* Template Name: Gallery*/
get_header();

?>

<section class="gallery-section">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="<?php bloginfo("template_directory"); ?>/img/gallery/img1.jpg" class="d-block w-100" alt="events">
            </div>
            <div class="carousel-item">
                <img src="<?php bloginfo("template_directory"); ?>/img/gallery/img2.jpg" class="d-block w-100" alt="events">
            </div>
            <div class="carousel-item">
                <img src="<?php bloginfo("template_directory"); ?>/img/gallery/img3.jpg" class="d-block w-100" alt="events">
            </div>
            <div class="carousel-item active">
                <img src="<?php bloginfo("template_directory"); ?>/img/gallery/img4.jpg" class="d-block w-100" alt="events">
            </div>
            <div class="carousel-item">
                <img src="<?php bloginfo("template_directory"); ?>/img/gallery/img5.jpg" class="d-block w-100" alt="events">
            </div>
            <div class="carousel-item">
                <img src="<?php bloginfo("template_directory"); ?>/img/gallery/img6.jpg" class="d-block w-100" alt="events">
            </div>
            <div class="carousel-item">
                <img src="<?php bloginfo("template_directory"); ?>/img/gallery/img7.jpeg" class="d-block w-100" alt="events">
            </div>
            <div class="carousel-item">
                <img src="<?php bloginfo("template_directory"); ?>/img/gallery/img8.jpeg" class="d-block w-100" alt="events">
            </div>
            <div class="carousel-item">
                <img src="<?php bloginfo("template_directory"); ?>/img/gallery/img9.jpeg" class="d-block w-100" alt="events">
            </div>
            <div class="carousel-item">
                <img src="<?php bloginfo("template_directory"); ?>/img/gallery/img10.jpeg" class="d-block w-100" alt="events">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>


<?php get_footer(); ?>