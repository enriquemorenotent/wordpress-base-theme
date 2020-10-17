<?php get_header() ?>

<div class="container">
<div class="row">
<div class="col">

    <h1><i class="fas fa-bolt"></i> Foo</h1>

    <?php if (have_posts()) : ?>

        <?php while(have_posts()): ?>

            <?php the_post() ?>

            <?php $permalink = get_the_permalink() ?>

            <h1><a href="<?= $permalink ?>"><?php the_title() ?></a></h1>

        <?php endwhile ?>

    <?php else : ?>
        <p>No posts found</p>

    <?php endif ?>

</div>
</div>
</div>

<?php get_footer() ?>