<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ridhika</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/1c24d8f88a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>
    <!--START NAV BAR SECTION -->
    <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
        <div class="container-fluid">
          <div class="container">
            <a class="navbar-brand" href="<?php echo site_url();?>">
              <img class = "image-responsive" src="<?php echo get_template_directory_uri();?>/img/ridhika_logo_2.png" alt="logo image">
          </a>
          </div>
          <div class="container">
            
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo site_url();?> ">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/about');?>">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/blog');?>">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('#faq');?>">Faq</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
                         
          </div>
        </div>
      </nav>