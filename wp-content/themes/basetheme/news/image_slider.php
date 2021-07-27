<?php if( have_rows('inner_slider') ): ?>
<div class="contentSliderWrapper">
    <div class="contentSlider">
        <?php while( have_rows('inner_slider') ): the_row(); ?>
                <div class="image">
                    <?php $contentImage=get_sub_field('full_image'); ?>
                    <img src="<?php echo $contentImage['sizes']['innerImage']; ?>" width="<?php echo $contentImage['sizes']['innerImage-width']; ?>" height="<?php echo $contentImage['sizes']['innerImage-height']; ?>" alt="<?php echo $contentImage['alt']; ?>" />
                </div>
        <?php endwhile; ?>
    </div>
</div>
<?php endif; ?>

<script>
jQuery(document).ready(function(){
    jQuery('.contentSlider').slick({
        fade: true,
        arrows: true,
        dots: true
    });
});
</script>