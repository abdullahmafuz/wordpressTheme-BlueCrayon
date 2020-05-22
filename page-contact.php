<?php
/* Template Name: contact*/
get_header();

?>

<img class="top-section-img" src="<?php bloginfo("template_directory"); ?>/img/blue-shad-bg.png" alt="" />
</div>
</header>

<section class="marketing">
    <div class="why-marketing">
        <img class="contact-bg" src="<?php bloginfo("template_directory"); ?>/img/contact-bg.svg" alt="blue contact bg">
        <div class="container">
            <h2>Contact us</h2>
            <p class="contact-para">
                Leave your details below, and we’ll get back to you as soon as we can!
            </p>
            <div class="contact-details">
                <h4>Hetal Rathod – Consulting Guru</h4>
                <p>
                    <a href="mailto:hetal@bluecrayonconsulting.com">hetal@bluecrayonconsulting.com</a>
                </p>
            </div>
            <div class="contact-details">
                <h4>Vaibhav Arora – Events Ninja</h4>
                <p>
                    <a href="mailto:vb@bluecrayonconsulting.com">vb@bluecrayonconsulting.com</a>
                </p>
            </div>
        </div>
        <div class="container">

            <div class="contact-form">

                <?php echo do_shortcode('[contact-form-7 id="78" title="Untitled"]'); ?>
            </div>


        </div>
    </div>


</section>

<?php get_footer(); ?>