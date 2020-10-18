<?php get_header() ?>

<div class="container">
<div class="row">
<div class="col">

    <?php the_post() ?>

    <h1><?php the_title() ?></h1>

    <p><?= get_field('min_features_image_height'); ?></p>

    <?php the_content() ?>

</div>
</div>
</div>


<?php get_footer() ?>