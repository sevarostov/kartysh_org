<?php include ROOT . '/views/layouts/header.php'; ?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('<?php echo $articleItem['preview_']; ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1><?php echo $articleItem['subtitle']; ?></h1>
                    <h2 class="subheading"><?php echo $articleItem['short_content']; ?></h2>
                    <span class="meta"><?php echo $articleItem['date']; ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p><?php echo $articleItem['text']; ?></p>
                <p><?php echo $articleItem['text_']; ?></p>
                <p><?php echo $articleItem['text_1']; ?></p>
                <p><?php echo $articleItem['text_2']; ?> </p>
                <img class="img-responsive" src="<?php echo $articleItem['preview_m']; ?>" alt="">
                <h2 class="section-heading"><?php echo $articleItem['subtitle_']; ?></h2>

                <p><?php echo $articleItem['text_3']; ?></p>
                <p><?php echo $articleItem['text_4']; ?></p>

                <blockquote><?php echo $articleItem['blockquote']; ?></blockquote>
                <img class="img-responsive" src="<?php echo $articleItem['preview_mi']; ?>" alt="">
                <p><?php echo $articleItem['text_5']; ?></p>

                <h2 class="section-heading"><?php echo $articleItem['subtitle_1']; ?></h2>

                <p><?php echo $articleItem['text_6']; ?> </p>

                <img class="img-responsive" src='<?php echo $articleItem['preview_min']; ?>' alt="">

                <span class="caption text-muted"><?php echo $articleItem['text_muted']; ?></span>

                <p><?php echo $articleItem['text_7']; ?>
            </div>
        </div>
    </div>
</article>

<hr>

<?php include ROOT . '/views/layouts/footer.php'; ?>
