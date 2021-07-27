<!--

Template name: Contact page

-->

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    
    <?php get_header(); ?>

    <body <?php body_class(); ?>>
        
        <main>

            <section class="introBG" style="background-image: url(<?php the_field('header_image'); ?>);">
                <div class="bg"></div>
                <div class="wrapper">
                    
                    
                    <div class="downWrapper">
                        <a class="smooth goingDown" href="#contact">
                            <svg class="downArrow" xmlns="http://www.w3.org/2000/svg" width="14.212" height="13.985" viewBox="0 0 14.212 13.985"><g transform="translate(-784.215 -694.253)"><path d="M0,0,6.753,6.753,0,13.505" transform="translate(798.074 700.778) rotate(90)" fill="none" stroke="#ffffff" stroke-width="1"/><path d="M0,0,6.753,6.753,0,13.505" transform="translate(798.074 694.607) rotate(90)" fill="none" stroke="#ffffff" stroke-width="1"/></g></svg>
                        </a>
                    </div>
                   
                </div>
            </section>  
            
            <section id="contact" class="section contact contact-part-1">
                <div class="wrapper">
                    <h1 class="reveal">Get in Touch</h1>
                    <div class="innerWrapper contactContent">
                        <div class="contactContent1 social">
                            <a href="https://uk.linkedin.com/company/poole-dick-associates" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83" viewBox="0 0 83 83"><g transform="translate(0 0.27)"><circle cx="41.5" cy="41.5" r="41.5" transform="translate(0 -0.27)" fill="#244f40"/><g transform="translate(29.685 28.528)"><rect width="5.072" height="17.752" transform="translate(0 6.34)" fill="#f7f2eb"/><path d="M194.947,1949.447c-3.539,0-4.148,1.291-4.437,2.536v-2.536h-5.072V1967.2h5.072v-10.144a2.536,2.536,0,0,1,5.072,0V1967.2h5.072v-8.876C200.655,1953.251,199.994,1949.447,194.947,1949.447Z" transform="translate(-177.83 -1943.107)" fill="#f7f2eb"/><circle cx="2.536" cy="2.536" r="2.536" transform="translate(0 0)" fill="#f7f2eb"/></g></g></svg>
                                <span>LinkedIn</span>
                            </a>
                            <a href="https://twitter.com/poole_dick" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83" viewBox="0 0 83 83"><g transform="translate(0.269)"><circle cx="41.5" cy="41.5" r="41.5" transform="translate(-0.269)" fill="#244f40"/><path d="M272.5,1939.85a9.969,9.969,0,0,1-2.883.791,5.043,5.043,0,0,0,2.208-2.777,10.059,10.059,0,0,1-3.188,1.217,5.026,5.026,0,0,0-8.556,4.579,14.254,14.254,0,0,1-10.348-5.245,5.028,5.028,0,0,0,1.553,6.7,5,5,0,0,1-2.273-.628c0,.021,0,.043,0,.063a5.023,5.023,0,0,0,4.027,4.923,5.033,5.033,0,0,1-2.266.086,5.025,5.025,0,0,0,4.689,3.486,10.124,10.124,0,0,1-7.432,2.08,14.279,14.279,0,0,0,21.979-12.03c0-.217-.006-.434-.016-.65A10.179,10.179,0,0,0,272.5,1939.85Z" transform="translate(-218.855 -1906.111)" fill="#f7f2eb"/></g></svg>
                                <span>Twitter</span>
                            </a>
                        </div>
                        <div class="contactContent2 contact form">
                            <?php echo do_shortcode( '[contact-form-7 id="40" title="Contact form"]') ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section contact contact-part-2">
                <div class="wrapper">
                    <h2 class="reveal">Our Offices</h2>
                    <div class="innerWrapper contactContent">

                        <div class="office-location">
                            <div class="address">
                                <h3>Bury.</h3>
                                <p>Waterfold Park,</p>
                                <p>Manchester</p>
                                <p>BL9 7BR</p>
                                <span class="divider"></span>
                                <a href="mailto:manchester@pooledick.co.uk">Manchester@pooledick.co.uk</a>
                                <span></span>
                                <a href="tel:+441614478500">+44 (0)161 447 8500</a>
                            </div>
                        </div>
                        <div class="office-location">
                            <div class="address">
                                <h3>Stoke-On-Trent.</h3>
                                <p>Home Farm, Keele University Science Park,</p>
                                <p>Newcastle-under-Lyme, Staffordshire</p>
                                <p>ST5 5AA</p>
                                <span class="divider"></span>
                                <a href="mailto:stoke@pooledick.co.uk">Stoke@pooledick.co.uk</a>
                                <span></span>
                                <a href="tel:00441782443030">+44 (0)1782 443 030</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section contact contact-part-3">
                <div class="wrapper">
                    <div class="innerWrapper contactContent">
                        <?php echo do_shortcode( '[wpgmza id="1"]') ?>
                        
                    </div>
                </div>
            </section>

        </main>

        <?php get_footer(); ?>
        
      
    </body>
</html>

