<main id="content" class="container" role="main">
    <article class="article">
        <header class="article__header">
            <?php if($article_category !== "") { ?>
                <div class="category">
                    <span class="category__type"><?php echo $article_category;?></span>
                    <section class="category__content">
                        <?php include('article-types.php');?>
                    </section>
                </div>
                <hr>
            <?php } ?>
            <h2 class="article__title"><?php echo $title;?></h2>
            <p class="byline">Posted on <time pubdate="pubdate"><?php echo $pubdate;?></time></p>
            <div class="article__extra-header-info">
                <div class="author">
                    <p class="author__name">By <?php echo $author;?></p>
                    <p class="author__job">The News Beat Staff Reporter</p>
                </div>

            </div>
        </header>

        <figure class="featured-image">
            <img class="article-img article-img--featured" src="<?php echo $featured_img;?>" />
            <figcaption><?php echo $featured_img_caption;?></figcaption>
        </figure>

        <? echo $article;?>

        <?php

        include('comments.php');

        ?>

    </article>
</main>
