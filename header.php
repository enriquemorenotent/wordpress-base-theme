<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <?php wp_head() ?>
    </head>
    <body <?php body_class() ?>>
        <header>
            <div class="container">
            <div class="row">
            <div class="col">

                <h1 class="site-name"><a href="/"><?= get_bloginfo("name") ?></a></h1>

            </div>
            </div>
            </div>
        </header>