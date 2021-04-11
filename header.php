<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Angella Ricot</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="#"><img src="/img/angella-logo.jpeg" alt="" class="logo-img"></a> -->
            <a class="navbar-brand" style="color: rgb(194, 0, 0);" href="#">Angella Ricot</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="<?php echo site_url(''); ?>">Home</a>
                <a class="nav-link" href="<?php echo site_url('#about'); ?>">About</a>
                <a class="nav-link" href="<?php echo site_url('/#books'); ?>">Books</a>
                <a class="nav-link" href="<?php echo site_url('/#coming'); ?>">Coming Releases</a>
                <a class="nav-link" href="<?php echo site_url('/shop'); ?>">Shop</a>
                <a class="nav-link" href="<?php echo site_url('/blog'); ?>">Blog</a>
                <a class="nav-link" href="<?php echo site_url('/#connect'); ?>">Connect</a>
              </div>
            </div>
          </div>
        </nav>
   